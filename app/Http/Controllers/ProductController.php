<?php

namespace App\Http\Controllers;

use App\Contracts\ProductContract;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    protected $productRepository;

    

    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index()
    {
        $products= $this->productRepository->listProducts();
        return  response()->json(['products' => $products]);
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
