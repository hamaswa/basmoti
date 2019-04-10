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
                'short_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.",
            ]
        );

        Siteconfig::create([
            'email'=>'email',
            'location'=>'',
            'phone'=>'',
            'contact_us'=>'Lorem ipsum dolor sit amet, conse ncteturll adipisicing elit, sed do eiusmod',
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
            'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.3658931726295!2d73.01906531454426!3d33.67358874503782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df958a6d10a8a7%3A0x7462083c645efc56!2sStreet+37%2C+G-10%2F4+G+10%2F4+G-10%2C+Islamabad%2C+Islamabad+Capital+Territory%2C+Pakistan!5e0!3m2!1sen!2s!4v1554906670303!5m2!1sen!2s',

        ]);
    }
}
