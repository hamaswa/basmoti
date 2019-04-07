<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use File;

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
        $about->update(
            [   'title1' => $data['title1'],
                'title2' => $data['title1'],
                'short_description' => $data['short_description'],
                'description' => $data['description'],
            ]
        );

        if($request->hasFile('image_url')) {
            $imagetodelete = "/uploads/".$about->image_url;
            if(File::exists($imagetodelete)) {
                File::delete($imagetodelete);
            }

            $image = $request->file("image_url");
            $imagename = date('ymdhms') . $image->getClientOriginalName();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $imagename);
            $about->update([
                'image_url' => $imagename,
            ]);
        }
        return redirect(route("home"));

    }
}
