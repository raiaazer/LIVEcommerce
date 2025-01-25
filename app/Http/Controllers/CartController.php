<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $sessionId = $request->session()->getId();
        $cart = Cart::where('session_id', $sessionId)->first();

        return response()->json([
            'cart' => $cart ? $cart->cart_items : [],
            'total_price' => $cart ? $cart->total_price : 0.00,
        ]);
    }

    /**
     * Add an item to the cart.
     */
    public function addItem(Request $request)
    {
        $validator = Validator::make( $request->all(), [
            'product_id' => ['bail', 'required'],
            'name' => ['bail', 'required'],
            'price' => ['bail', 'required'],
            'quantity' => ['bail', 'required'],
        ],
            [
                'product_id.required' => 'product_id is required or incorrect',
                'name.required' => 'name is required or incorrect',
                'price.required' => 'price is required or incorrect',
                'quantity.required' => 'quantity is required or incorrect',
            ]
        );

        $req = $request->all();
        if($validator->stopOnFirstFailure()->fails()){
            $flattened = Arr::flatten($validator->getMessageBag()->getMessages());
            return response()->json(['message' => 'Validation Error.',array_shift($flattened), 'code' => 404]);
        }
        $sessionId = $request->session()->getId();
        $cart = Cart::updateOrCreate(['sessionId' => $sessionId],[
            'userId' => 0,
            'sessionId' => $sessionId,
            'totalPrice' => $req['price'] * $req['quantity'],
            'cart_items' => json_encode($req),
        ]);

//        dd($req, $sessionId);
//
//
//        // Find or create a cart for this session
//        $cart = Cart::firstOrCreate(
//            ['sessionId' => $sessionId],
//            ['totalPrice' => 0.00, 'cart_items' => []]
//        );
//
//        // Get the cart items and append the new item
//        $cartItems = $cart->cart_items ?? [];
//        $cartItems[] = [
//            'productId' => $validated['product_id'],
//            'name' => $validated['name'],
//            'price' => $validated['price'],
//            'quantity' => $validated['quantity'],
//        ];
//
//        // Update the cart with new items and calculate total price
//        $cart->cart_items = $cartItems;
//        $cart->totalPrice = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantity']);
//        $cart->save();

        return response()->json(['message' => 'Item added to cart', 'cart' => $cart]);
    }

    /**
     * Update the quantity of a cart item.
     */
    public function updateItem(Request $request, $productId)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $sessionId = $request->session()->getId();
        $cart = Cart::where('session_id', $sessionId)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart not found'], 404);
        }

        $cartItems = collect($cart->cart_items)->map(function ($item) use ($productId, $validated) {
            if ($item['product_id'] == $productId) {
                $item['quantity'] = $validated['quantity'];
            }
            return $item;
        })->toArray();

        $cart->cart_items = $cartItems;
        $cart->total_price = collect($cartItems)->sum(fn($item) => $item['quantity'] * $item['price']);
        $cart->save();

        return response()->json(['message' => 'Cart updated', 'cart' => $cart]);
    }

    /**
     * Remove an item from the cart.
     */
    public function removeItem(Request $request, $productId)
    {
        $sessionId = $request->session()->getId();
        $cart = Cart::where('session_id', $sessionId)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart not found'], 404);
        }

        $cartItems = collect($cart->cart_items)->filter(fn($item) => $item['product_id'] != $productId)->toArray();
        $cart->cart_items = $cartItems;
        $cart->total_price = collect($cartItems)->sum(fn($item) => $item['quantity'] * $item['price']);
        $cart->save();

        return response()->json(['message' => 'Item removed from cart', 'cart' => $cart]);
    }

    /**
     * Clear the cart.
     */
    public function clear(Request $request)
    {
        $sessionId = $request->session()->getId();
        $cart = Cart::where('session_id', $sessionId)->first();

        if ($cart) {
            $cart->cart_items = [];
            $cart->total_price = 0.00;
            $cart->save();
        }

        return response()->json(['message' => 'Cart cleared']);
    }
}
