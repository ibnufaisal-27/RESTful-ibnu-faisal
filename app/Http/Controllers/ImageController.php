<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Image $image)
    {
        $image = $image->all();
        return response()->json($image, 200);
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
        $file = $request->file;
        $enable = $request->enable;

            $data = new \App\Image();
            $data->name = $name;
            $data->file = $file;
            $data->enable = $enable;

            if($data->save()){
                $res['message'] = "Image Insert Success !";
                $res['value'] = $data;
                return response($res,201);
            }
            $res['message'] = "400";
            $res['value'] = "Image Insert Failed !";
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
        $imageFind = Image::find($id);

        if($imageFind == false) {
            return response()->json(['status'=>'404', 'message'=>'Image ID not found !'], 404); 
        } else {
            $name = $request->name;
            $file = $request->file;
            $enable = $request->enable;

            $data = Image::where('id',$id)->first();
            $data->name = $name;
            $data->file = $file;
            $data->enable = $enable;
            
            if($data->update()) {

                $res['message'] = "Image Update Success !";
                $res['value'] = [
                    'id' => $data->id,
                    'name' =>$data->name,
                    'file' =>$data->file,
                    'enable' =>  $data->enable
                ];
                return response($res,201);
            } else {
                $res['message'] = "400";
                $res['value'] = "Image Update Failed !";
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
