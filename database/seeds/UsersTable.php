<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = array('name' => 'dawan','email' => 'dawancse@gmail.com','password' => '123456');
        DB::table('users')->insert($values);
    }
}
