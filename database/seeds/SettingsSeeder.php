<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Settings')->insert(
        [
            [
                'registration' => 1,
                'crudbuilder' => 1,
                'filemanager' => 1
            ]
            
        ]
        );
    }
}
