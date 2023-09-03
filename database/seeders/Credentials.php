<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employee;
use App\Models\Organization;

class Credentials extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
       ])->assignRole('super-admin');
        
       $user = User::create([
            'name' => 'employee',
            'email' => 'emp@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ])->assignRole('employee');

        $user = User::create([
            'name' => 'org',
            'email' => 'org@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ])->assignRole('organization');

        Organization::create([
            'user_id' => $user->id,
            'organization_name' => 'designzeros',
            'website' => 'designzeros.com',
        ]);

        Employee::create([
            'user_id' => $user->id,
            'gender' => 'male',
            'phone_number' => 7765645,
        ]);

           }
}
