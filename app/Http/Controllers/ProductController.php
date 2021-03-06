<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = 0;
        if (Auth::user()) {
            $user_id = Auth::user()->id;
        }
        $products = Product::where("visibilidad",1)->orderBy("created_at", 'desc')->paginate(10);

        return view("catalogo.inicio", compact("products", "user_id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        //strcmp
        if (!Auth::user()) {
            abort(404);
        }
        if (strcmp(Auth::user()->rol, "administrador") === 0) {
            return view("catalogo.store", compact('categories'));
        }
        abort(404);
        //lo optimo seria redirigir al index
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user_id = 0;
        if (Auth::user()) {
            $user_id = Auth::user()->id;
        }
        return view("catalogo.show", compact("product", "user_id"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::get();
        return view("catalogo.edit", compact("product", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function gestionar()
    {
        if (!Auth::user()) {
            abort(404);
        }
        if (Auth::user()->rol !== "administrador") {
            abort(404);
        } else {
            $products = Product::get();
            return view("catalogo.gestionar", compact("products"));
        }
    }
}
