<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Gcategory;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.gallery")->with("gallery",Gallery::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Gcategory::all();
        return view("admin.gallery-form")->with("category",$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $image = $request->file("image_url");
        $destinationPath = 'uploads';
        $image->move($destinationPath, $image->getClientOriginalName());

        Gallery::create(
            [   //'alt' => $data['alt'],
                'category_id' => $data['category_id'],
                'image_url' => $image->getClientOriginalName(),
                'status'=>'1'
            ]
        );
        return redirect(route("gallery.create"));

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
        $gallery = Gallery::find($id);
        $imagetodelete = "/uploads/".$gallery->image_url;
        if(File::exists($imagetodelete)) {
            File::delete($imagetodelete);
        }
        $gallery->delete();

        return view("admin.gallery")->with("gallery",Gallery::all());

    }
}
