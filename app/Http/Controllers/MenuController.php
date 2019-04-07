<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\MenuDataTable;
use App\DataTables\UsersDataTablesEditor;

use App\Mcategory;
use App\Menu;
use Datatables;


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
        $datatable = new MenuDataTable();

        return $datatable->render("admin.menu");

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
        //
    }
}
