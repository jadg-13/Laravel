<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //      'password' => bcrypt('password')
        //  ]);

        \App\Models\Student::factory()->create(
            [
                'cif' => '12ewerw34567A',
                'name' => 'Test',
                'last_name' => 'User',
                'email' => 'tes@gmial.com',
                'phone' => '123456789']
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678A',
                'name' => 'Test',
                'last_name' => 'User',
                'email' =>
                'tes1@gmial.com',
                'phone' => '123456789']
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678b',
                'name' => 'Test',
                'last_name' => 'User',
                'email' =>
                'tes2@gmial.com',
                'phone' => '123456789']
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678c',
                'name' => 'Test',
                'last_name' => 'User',
                'email' =>
                'tes3@gmial.com',
                'phone' => '123456789']
        );

        
    }
}