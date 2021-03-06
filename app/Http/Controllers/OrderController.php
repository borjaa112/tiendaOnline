<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\CartLine;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\at;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Auth::user()){
            return view('orders.noregistered');//"No estas registrado, registate o iniciar session para completar el pedido"
        }else{
            $direcciones = Address::where("user_id", Auth::user()->id)->get();
            return view("orders.index", compact("direcciones"));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        $productos = CartLine::where("user_id", Auth::user()->id)->get();
        //return dd($productos);
        if($productos->isEmpty()){
            return view('orders.noarticle');
        }
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->address_id = $request->get("address_id");
        $order->save();
        //return response()->json($order->id, 201);

        //return dd($productos);
        // foreach ($productos as $producto) {
        //     return dd($producto['id']);
        // }


        foreach ($productos as $producto) {
            $product = Product::where("id", $producto["product_id"])->first();
            if($product->cantidad < $producto['cantidad']){
                return response("No hay suficientes unidades del producto ".$product->nombre,201);
            }else{
                $product->cantidad = $product->cantidad - $producto['cantidad'];
                $product->save();
            }
            $lineaPedido = new Orderline();
            $lineaPedido -> order_id = $order->id;
            $lineaPedido -> cantidad = $producto['cantidad'];
            $lineaPedido -> product_id = $producto['product_id'];
            $lineaPedido -> precio = Product::where("id", $producto['product_id'])->first()->precio_base;
            $lineaPedido ->descuento  = Product::where("id", $producto['product_id'])->first()->descuento;
            $lineaPedido->save();

        }

        $cartLines = CartLine::where("user_id", Auth::user()->id)->get();
        foreach($cartLines as $cartLine){
            $cartLine->delete();
        }
        return view("orders.confirmacion", compact("order"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        //$orders = Order::where("id", $order->id)->with("orderlines")->get();
        return view("orders.show", compact("order"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function gestionar(User $user){
        if(!Auth::user() || Auth::user()->rol !== "administrador"){
            abort(404);
        }
        $orders = Order::where('user_id', $user->id)->get();
        return view("orders.gestionar", compact("orders"));
    }

    public function ordenarPrecio($user){
        if(!Auth::user() || Auth::user()->rol !== "administrador"){
            abort(404);
        }
        $user_id = $user;//$request->get('user_id');
        $orders = Order::where("user_id", $user_id)->orderBy("created_at", 'desc')->get();
        return view("orders.gestionar", compact("orders"));
    }
}
