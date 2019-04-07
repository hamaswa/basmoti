<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\MenuDataTable;

use App\Mcategory;
use App\Menu;
use Datatables;
use File;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuDataTable $datatable)
    {
        return $datatable->render("admin.menu");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Mcategory::all();
        return view("admin.menu_add_form")->with("category",$categories);

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

        Menu::create(
            [
                'category_id' => $data['category_id'],
                'image_url' => $image->getClientOriginalName(),
                'title' => $data['title'],
                'description'=>$data['description'],
                'price'=>$data['price'],
                'status'=>'1'
            ]
        );
        return redirect( route("menu.index"));

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
        $data['menu'] = Menu::find($id);
        $data['category'] =  Mcategory::all();
        return  view("admin.menu_edit_form",$data);
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
        $menu = Menu::find($id);
        $menu->update(
            [
                'category_id' => $data['category_id'],
                'title' => $data['title'],
                'description'=>$data['description'],
                'price'=>$data['price'],
            ]
        );

        if($request->hasFile("image_url")){
            $imagetodelete = $menu->image_url;
            if(File::exists($imagetodelete)){
                File::delete($imagetodelete);
            }
            $data = $request->all();

            $image = $request->file("image_url");
            $destinationPath = 'uploads';
            $imagename = date('ymdhms').$image->getClientOriginalName();
            $image->move($destinationPath, $imagename);

            Menu::create(
                [
                    'image_url' => $imagename
                ]
            );

            return redirect( route("menu.index"));
        }


        return redirect( route("menu.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if(File::exists($menu->image_url)){
            File::delete($menu->image_url);
        }
        $menu->delete();
        return redirect(route("menu.index"));
    }
}
