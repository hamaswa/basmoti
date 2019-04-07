<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view("admin.about")->with('about',$about);
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
        $data = $request->all();
        $about = About::find($id);
        $image = $request->file("image_url");
        $imagename = date('ymdhms').$image->getClientOriginalName();
        $destinationPath = 'uploads';
        $image->move($destinationPath, $imagename);

        $about->update(
            [   'title1' => $data['title1'],
                'title2' => $data['title1'],
                'image_url' => $imagename,
                'short_description' => $data['short_description'],
                'description' => $data['description'],
            ]
        );
        return redirect(route("home"));

    }
}
