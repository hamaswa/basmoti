<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Slider;
use App\About;
use App\Siteconfig;




class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Hamayun Khan';
        $admin->email = 'hama_swa@yahoo.com';
        $admin->password = bcrypt('hama@123$');
        $admin->save();
        Slider::create(
            [
                'video' => "cxB4ACaaR4I",
                'image_url' => "",
                'title' => "",
                'description' => 'description',
            ]
        );

        About::create(
            [   'title1' => "About Basmoti Restaurant",
                'title2' => "Basmoti ensures healthy environment. Make a short trip.",
                'image_url' => "",
                'status'=>1,
                'short_description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.</p>",
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.</p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.</p>",
            ]
        );

        Siteconfig::create([
            'title'=>'Site Title Here Please',
            'site_logo'=>'Logo Here',
            'facebook'=>'',
            'twitter'=>'',
            'youtube'=>'',
            'pintrest'=>'',
            'gallerytitle'=>'Our gallery',
            'gallerydescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.',
            'menudescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.',
            'menutitle'=>'Our Food Menu',
        ]);
    }
}
