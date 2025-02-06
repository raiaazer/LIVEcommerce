<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

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
            'image1' => ['bail', 'required'],
            'image2' => ['bail', 'required'],
        ],
            [
                'product_id.required' => 'product_id is required or incorrect',
                'name.required' => 'name is required or incorrect',
                'price.required' => 'price is required or incorrect',
                'quantity.required' => 'quantity is required or incorrect',
                'image1.required' => 'image1 is required or incorrect',
                'image2.required' => 'image2 is required or incorrect',
            ]
        );

        $req = $request->all();
        if($validator->stopOnFirstFailure()->fails()){
            $flattened = Arr::flatten($validator->getMessageBag()->getMessages());
            return response()->json(['message' => 'Validation Error.',array_shift($flattened), 'code' => 404]);
        }

        $sessionId = $request->session()->getId();
        $cartDetails = Cart::where('sessionId', $sessionId)->first();

        if ($cartDetails) {
            $productDetails = json_decode($cartDetails->cart_items, true) ?? [];
            $productFound = false;

            // Check if the product already exists in the cart
            foreach ($productDetails as &$item) {
                if ($item['product_id'] == $req['product_id']) {
                    $item['quantity'] += $req['quantity']; // Increment quantity
                    $item['subtotal'] = $item['quantity'] * $item['price']; // Update subtotal
                    $item['image1'] = $req['image1'];
                    $item['image2'] = $req['image2'];
                    $productFound = true;
                    break;
                }
            }

            if (!$productFound) {
                // Add the new product to the cart
                $productDetails[] = [
                    'product_id' => $req['product_id'],
                    'name' => $req['name'],
                    'price' => $req['price'],
                    'quantity' => $req['quantity'],
                    'subtotal' => $req['price'] * $req['quantity'],
                    'image1' => $req['image1'],
                    'image2' => $req['image2'],
                ];
            }

            // Update cart items and total price
            $cartDetails->cart_items = json_encode($productDetails);
            $cartDetails->totalPrice = array_sum(array_column($productDetails, 'subtotal'));
            $cartDetails->save();

            Inertia::share([
                'cartData' => function () {
                    $sessionId = session()->getId();
                    $cartData = Cart::where('sessionId', $sessionId)->first();

                    $cartCount = 0;
                    $cartItems = [];

                    if ($cartData) {
                        $cartItems = json_decode($cartData->cart_items, true);
                        $cartCount = count($cartItems);
                    }

                    return [
                        'cartItems'=>$cartItems,
                        'cartData'=>$cartData
                    ];
                },
            ]);
//            return response()->json(['message' => 'Cart updated', 'cart' => $cartDetails]);
        }

// If no cart exists, create a new one
        Cart::create([
            'userId' => 0, // Assuming guest user
            'sessionId' => $sessionId,
            'totalPrice' => $req['price'] * $req['quantity'], // Initial total price
            'cart_items' => json_encode([
                [
                    'product_id' => $req['product_id'],
                    'name' => $req['name'],
                    'price' => $req['price'],
                    'quantity' => $req['quantity'],
                    'subtotal' => $req['price'] * $req['quantity'],
                    'image1' => $req['image1'],
                    'image2' => $req['image2'],
                ],
            ]),
        ]);

        $sessionId = session()->getId();
        $cartData = Cart::where('sessionId', $sessionId)->first();
        $cartCount = 0;
        $cartItems = [];

        if ($cartData) {
            $cartItems = json_decode($cartData->cart_items, true);
            $cartCount = count($cartItems);
        }

//        return response()->json([
//            'cartCount' => $cartCount,
//            'cartItems' => $cartItems,
//            'cartDetail' => $cartDetails,
//            'message' => 'New cart created and item added'
//        ]);
        return inertia('Categories', [
            'cartCount' => $cartCount,
            'cartItems' => $cartItems,
            'cartData' => $cartData,
            'message' => 'New cart created and item added',
        ]);
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
