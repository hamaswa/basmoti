<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

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
        $image = $request->file("image_url");
        $destinationPath = 'uploads';
        $image->move($destinationPath,$image->getClientOriginalName());

        $slider->update(
            [
                'video' => $data['video'],
                'image_url' => $image->getClientOriginalName(),
                'description' => $data['description'],
            ]
        );
        return redirect(route("home"));
    }


}
