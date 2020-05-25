<?php
// Use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yudistira',
            'email' => 'yudistirairvan@gmail.com',
            'password' => bcrypt('240893'),
            'hak_akses' => 'super-admin',
            'id_ig' => '1',
        ]);
    }
}
