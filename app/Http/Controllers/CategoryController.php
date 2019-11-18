<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $category = $category->all();
        return response()->json($category, 200);
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
        $name = $request->name;
        $enable = $request->enable;

            $data = new \App\Category();
            $data->name = $name;
            $data->enable = $enable;

            if($data->save()){
                $res['message'] = "Category Insert Success !";
                $res['value'] = $data;
                return response($res,201);
            }
            $res['message'] = "400";
            $res['value'] = "Category Insert Failded !";
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
        $categoryFind = Category::find($id);

        if($categoryFind == false) {
            return response()->json(['status'=>'404', 'message'=>'Category ID not found !'], 404); 
        } else {
            $name = $request->name;
            $enable = $request->enable;

            $data = Category::where('id',$id)->first();
            $data->name = $name;
            $data->enable = $enable;
            
            if($data->update()) {

                $res['message'] = "Category Update Success !";
                $res['value'] = [
                    'id' => $data->id,
                    'name' =>$data->name,
                    'enable' =>  $data->enable
                ];
                return response($res,201);
            } else {
                $res['message'] = "400";
                $res['value'] = "Category Update Failded !";
                return response()->json($res, 400); 
            }
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
        //
    }
}
