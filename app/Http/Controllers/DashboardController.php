<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function Home(Request $request)
    {
        return Inertia::render('Home');
    }

    public function Categories(Request $request)
    {
//        $products = Products::paginate(12);
//        return Inertia::render('Categories', [
//            'products' => $products,
//        ]);

        $perPage = $request->input('per_page', 12);
        $products = Products::paginate($perPage);
        return Inertia::render('Categories', [
            'products' => $products,
        ]);
    }

    public function Products(Request $request)
    {
        return Inertia::render('Products');
    }
}
