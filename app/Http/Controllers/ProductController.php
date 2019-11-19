<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Category;
use App\Product;
use App\Image;
use App\ProductImage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Product::with(['categoryProduct','productImage'])->get();

        if(count($data) > 0){ //mengecek apakah data product kosong atau tidak
            $res['message'] = "Success !";
            $res['values'] = $data;
            return response($res,200);
        }
        else{
            $res['message'] = "Empty!";
            return response($res,400);
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
        $categoryFind = Category::find($request->category_id);
        $imageFind = Image::find($request->image_id);

        $name = $request->name;
        $description = $request->description;
        $enable = $request->enable;
        $category_id = $request->category_id;
        $image_id = $request->image_id;

        if($categoryFind == false) {
            return response()->json(['status'=>'404', 'message'=>'Category ID not found !'], 404); 
        } else if($imageFind == false ) {
            return response()->json(['status'=>'404', 'message'=>'Image ID not found !'], 404); 
        } else {
            $data = new \App\Product();
            $data->name = $name;
            $data->description = $description;
            $data->enable = $enable;

            if($data->save()){
                $data_category = new \App\CategoryProduct();
                $data_category->product_id = $data->id;
                $data_category->category_id = $category_id;
                $data_category->save();

                $data_image = new \App\ProductImage();
                $data_image->product_id = $data->id;
                $data_image->image_id = $image_id;
                $data_image->save();

                $res['message'] = "Product Insert Success !";
                $res['value'] = [
                    'id' => $data->id,
                    'name' =>$data->name,
                    'description' => $data->description,
                    'enable' =>  $data->enable,
                    'category' => [
                        'product_id' => $data->id,
                        'category_id' => $data_category->category_id
                    ],
                    'product_image' => [
                        'product_id' => $data->id,
                        'product_image' => $data_image->image_id
                    ]

                ];
                return response($res,201);
            }
        }
            $res['message'] = "400";
            $res['value'] = "Product Insert Failded !";
         return response()->json($res, 400); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Product::with(['categoryProduct','productImage'])->where('id',$id)->get();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success !";
            $res['values'] =  $data;
            return response($res,200);
        }
        else{
            $res['message'] = "Product Not Found !";
            return response($res,404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $categoryFind = Category::find($request->category_id);
        $imageFind = Image::find($request->image_id);
        $productFind = Product::find($id);

        $name = $request->name;
        $description = $request->description;
        $enable = $request->enable;
        $category_id = $request->category_id;
        $image_id = $request->image_id;

        if($categoryFind == false) {
            return response()->json(['status'=>'404', 'message'=>'Category ID not found !'], 404); 
        } else if($imageFind == false ) {
            return response()->json(['status'=>'404', 'message'=>'Image ID not found !'], 404); 
        } else if ($productFind == false) {
            return response()->json(['status'=>'404', 'message'=>'Product ID not found !'], 404);
        } else {
            $data = Product::where('id',$id)->first();
            $data->name = $name;
            $data->description = $description;
            $data->enable = $enable;
            $data->update();

                $data_category = new \App\CategoryProduct();
                $data_category->where('product_id',$data->id)->update(array('category_id' => $category_id));
                
                $data_image = new \App\ProductImage();
                $data_image->where('product_id',$data->id)->update(array('image_id' => $image_id));

                $res['message'] = "Product Update Success !";
                $res['value'] = [
                    'id' => $data->id,
                    'name' =>$data->name,
                    'description' => $data->description,
                    'enable' =>  $data->enable,
                    'category' => [
                        'product_id' => $data->id,
                        'category_id' => $category_id
                    ],
                    'product_image' => [
                        'product_id' => $data->id,
                        'product_image' => $image_id
                    ]

                ];
                return response($res,201);
            
        }
            $res['message'] = "400";
            $res['value'] = "Product Insert Failded !";
         return response()->json($res, 400); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::where('id',$id)->first();
        $productFind = Product::find($id);

        if ($productFind ) {
            if($data->delete()){
                $res['message'] = "Product Delete Success !";
                $res['value'] = $data;
                return response($res,200);
            }
            else{
                $res['message'] = "Product Delete Failed !";
                return response($res,404);
            }
        } else {
                return response()->json(['status'=>'404', 'message'=>'Product ID not found !'], 404);
        }
    }
}
