<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

class ProdctController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            //dd($request);exit;
           //echo $request->get('name');exit;
        $validatedData = $request->validate([
            'category' => 'required|numeric',
            'name' => 'required|string|min:3',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'model' => 'required|string',
            'sku' => 'required|string',
            'status' => 'required|numeric',
            'image' => 'required'
        ]);

        $imageName = time() . '.' . $request['image']->getClientOriginalExtension();

				$request['image']->move(
				base_path() . '/public/upload/', $imageName
			);
        return Product::create([
            'catid' => $request['category'],
            'name' => $request['name'],
            'qty'=>$request['qty'],
            'price'=>$request['price'],
            'model'=>$request['model'],
            'sku'=>$request['sku'],
            'status'=>$request['status'],
			'image' => $imageName,

        ]);

        //return redirect()->route('create-product')->with('info','Product Added Successfully');
        return redirect('create-product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
