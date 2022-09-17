<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::filter()->get();
        $data = ProductResource::collection($products);

        return response()->json(['products' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|integer',
        ]);
        $product = new Product($request->all());
        $product->save();
        $product->sku = sprintf('%06d', $product->id);
        $product->save();

        return response()->json([
            'success' => true,
            'message' => 'Product was successfully created.',
            'product' => new ProductResource($product),
        ], 200);
    }
}
