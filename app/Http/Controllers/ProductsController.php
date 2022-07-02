<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']= Product::all();
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new Product;
        $record->name = $request->name;
        $record->price = $request->price;
        $record->category_id = $request->category_id;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $path = 'uploads/products/'.time().'.'.$image->extension();
            $image->move(public_path('uploads/products/'),$path);
            $record->image_path = $path;
        }
        $record->save();
        return "<h1>Record added successfully";
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);
        return view('products.edit', $data);
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
        {
            $record = Product::findOrFail($id);
            $record->name = $request->name;
            $record->price = $request->price;
            $record->category_id = $request->category_id;
    
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $path = 'uploads/products/'.time().'.'.$image->extension();
                $image->move(public_path('uploads/products/'),$path);
                $record->image_path = $path;
            }
            $record->save();
            return "<h1>Record Updated successfully";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Product::findOrFail($id);
        $record->delete();


        return back();
    }
}
