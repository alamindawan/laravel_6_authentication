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
        $values = array('name' => 'dawan','level' => 1,'email' => 'dawancse@gmail.com','password' => '$2y$10$JZYeGzfHtX4RSE.vqmskeOBoHO933Lgvfo84va2pprZ3NQaClyzzm');
        DB::table('users')->insert($values);
    }
}
