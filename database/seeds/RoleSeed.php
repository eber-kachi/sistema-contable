<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles = [
            'rol1' => [
                'name' => 'admin',
                'display_name' => 'Administrador',
                'description' => 'Es un administrador'
            ],
            'rol2' => [
                'name' => 'secre',
                'display_name' => 'Secretaria',
                'description' => 'Es una secretaria'
            ],
            'rol3' => [
                'name' => 'emple',
                'display_name' => 'Empleado',
                'description' => ' es un empleado normal'
            ]
        ];
        foreach ($Roles as $value) {
            DB::table('roles')->insert([
                'name' => $value['name'],
                'display_name' => $value['display_name'],
                'description' => $value['description'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
