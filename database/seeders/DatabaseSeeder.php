<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        Admin::create([

            'role_id'           => 1,
            'name'              => 'super Admin',
            'email'             => 'admin@gmail.com',
            'cell'              => '01750639637',
            'username'          =>  'provider',
            'password'          =>   Hash::make('asdfghjkl'),
            
            ]);

              
        theme::create([

            'id'                => 1,
            'photo'             => 'photo.JPG',
            'email'             => 'nayanislam085@gmail.com',
            'cell'              => '01750639637',
            'social'            =>  '',
            'address'           =>   'Puthia, Rajshahi',
            
            ]);
  
 
    }
}
