<?php

use Illuminate\Database\Seeder;

class RolesTable extends Seeder {
    public function run() {
        $data = array('name' => 'Super Admin', 'level' => 1, 'level' => 1,'createdAt' => date('Y-m-d H:i:s'), 'createdBy' => 1);
        DB::table('roles')->insert($data);
    }

}
