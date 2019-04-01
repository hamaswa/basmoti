<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
    }
}
