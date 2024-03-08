<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Model\Admins;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admins;
        $admin->admin_name = 'admin';
        $admin->admin_type = 1;
        $admin->admin_user = 'admin';
        $admin->admin_pass = Hash::make('admin');
        $admin->save();

    }
}
