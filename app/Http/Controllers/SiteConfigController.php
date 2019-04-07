<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siteconfig;
use File;

class SiteConfigController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("admin.config")->with("config",Siteconfig::find(1));

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
        $config = Siteconfig::find($id);
        $config->update([
            'title'=>$data['title'],
            'facebook'=>$data['facebook'],
            'twitter'=>$data['twitter'],
            'youtube'=>$data['youtube'],
            'pintrest'=>$data['pintrest'],
            'gallerytitle'=>$data['gallerytitle'],
            'gallerydescription'=>$data['gallerydescription'],
            'menudescription'=>$data['menudescription'],
            'menutitle'=>$data['menutitle'],
        ]);
        if($request->hasFile('site_logo')){
            $imagetodelete = "/uploads/".$config->site_logo;
            if(File::exists($imagetodelete)) {
                File::delete($imagetodelete);
            }

            $image = $request->file('site_logo');
            $imagename = date('ymdhms') . $image->getClientOriginalName();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $imagename);
            $config->update([
                'site_logo' => $imagename
                ]);
        }

        return view("admin.config")->with("config",Siteconfig::find(1));

    }


}
