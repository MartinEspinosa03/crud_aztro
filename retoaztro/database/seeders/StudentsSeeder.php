<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::create([
            'name' => 'Martin',
            'Lasname' => 'Espinosa',
            'email' => 'marti@gmail.com',
            'password'=> '123456',
        ]);
        Students::create([
            'name' => 'Cristian',
            'Lasname' => 'Ovando',
            'email' => 'cristian@gmail.com',
            'password'=> '111111',
        ]);
        Students::create([
            'name' => 'Angel',
            'Lasname' => 'Merlin',
            'email' => 'angel@gmail.com',
            'password'=> '222222',
        ]);
    }
}
