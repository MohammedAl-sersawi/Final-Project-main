<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Pharmacist;
use App\Models\Pharmacy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {




        Department::create([
            'name' => json_encode([
                'en' => 'Cardiology',
                'ar' => 'طب القلب',
            ], JSON_UNESCAPED_UNICODE),
            'address' => json_encode([
                'en' => '123 Heart St.',
                'ar' => 'شارع القلب 123',
            ], JSON_UNESCAPED_UNICODE),
            'description' => json_encode([
                'en' => 'Department of Cardiology',
                'ar' => 'قسم طب القلب',
            ], JSON_UNESCAPED_UNICODE),
        ]);


        Admin::create([
            'first_name' => json_encode([
                'en' => 'Mohammed',
                'ar' => 'محمد',
            ], JSON_UNESCAPED_UNICODE),

            'last_name' => json_encode([
                'en' => 'Alsersawi',
                'ar' => 'السرساوي',
            ], JSON_UNESCAPED_UNICODE),
            'phone' => '0592324370',
            'image' => 'male.jpg',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'date_of_birth' => '2001-12-26 14:36:00',
        ]);

        Doctor::create([
            'first_name' => json_encode([
                'en' => 'Afaf',
                'ar' => 'عفاف',
            ], JSON_UNESCAPED_UNICODE),

            'last_name' => json_encode([
                'en' => 'Mohammed',
                'ar' => 'محمد',
            ], JSON_UNESCAPED_UNICODE),
            'phone' => '0592325248',
            'image' => 'female.jpg',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password'),
            'date_of_birth' => '2001-11-07',
            'department_id' => '1',
            'gender' => 'female',
        ]);
        Patient::create([
            'first_name' => json_encode([
                'en' => 'Fares',
                'ar' => 'فارس',
            ], JSON_UNESCAPED_UNICODE),
            'last_name' => json_encode([
                'en' => 'Mohammed',
                'ar' => 'محمد',
            ], JSON_UNESCAPED_UNICODE),
            'phone' => '0592325248',
            'image' => 'male.jpg',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('password'),
            'date_of_birth' => '2022-05-20 14:36:00',
            'address' => 'address',
        ]);

        $pharmacyId =  Pharmacy::create([
            'name' => json_encode([
                'en' => 'Internal Pharmacy',
                'ar' =>  'الصيدلية الداخلية',
            ], JSON_UNESCAPED_UNICODE),
            'phone' => '1234567890',
            'location' => 'Hospital Main Building',
            'type' => 'internal',
        ]);



        Pharmacist::create([
            'first_name' => json_encode([
                'en' => 'Alhassan',
                'ar' => 'الحسن',
            ], JSON_UNESCAPED_UNICODE),
            'last_name' => json_encode([
                'en' => 'alshwa',
                'ar' => 'الشوا',
            ], JSON_UNESCAPED_UNICODE),
            'phone' => '9876543210',
            'email' => 'pharmacist@gmail.com',
            'password' => Hash::make('password'),
            'date_of_birth' => '2001-01-01',
            'gender' => 'male',
            'pharmacy_id' => $pharmacyId->id,
        ]);
    }
}
