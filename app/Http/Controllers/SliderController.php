<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view("admin.slider")->with('slider',$slider);
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
        $data=$request->all();
        $slider = Slider::find($id);


        $slider->update(
            [
                'video' => $data['video'],
                'description' => $data['description'],
            ]
        );
        if($request->has("image_url")){
            $imagetodelete = $slider->image_url;
            if(File::exists($imagetodelete)){
                File::delete($imagetodelete);
            }
            $image = $request->file("image_url");
            $destinationPath = 'uploads';
            $imagename = date('ymdhms') . $image->getClientOriginalName();
            $image->move($destinationPath,$imagename);
            $slider->update(
                [
                    'image_url'=> $imagename
                ]
            );
        }
        return redirect(route("home"));
    }


}
