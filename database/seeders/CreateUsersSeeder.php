<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Administrator',
                'email'=>'dallum.brown@gmail.com',
                'is_admin'=>'1',
                'password'=>bcrypt('p455w0rd'),
            ],
            [
                'name'=>'Dallum Brown',
                'email'=>'fuklor@hotmail.com',
                'is_admin'=>'0',
                'password'=>bcrypt('m0n5t3r'),
            ],
        ];

        foreach ($user as $key => $value){
            DB::table('users')->insert([
                $key => $value
            ]);
        }
    }
}
