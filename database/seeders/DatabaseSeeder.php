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
        Department::insert([
            [
                'name' => json_encode([
                    'en' => 'Cardiology',
                    'ar' => 'طب القلب',
                ], JSON_UNESCAPED_UNICODE),
                'address' => json_encode([
                    'en' => '123 Heart St.',
                    'ar' => 'شارع القلب 123',
                ], JSON_UNESCAPED_UNICODE),
                'description' => json_encode([
                    'en' => 'Department of Cardiology, specializing in heart diseases and treatments.',
                    'ar' => 'قسم طب القلب، متخصص في أمراض وعلاجات القلب.',
                ], JSON_UNESCAPED_UNICODE),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode([
                    'en' => 'Neurology',
                    'ar' => 'طب الأعصاب',
                ], JSON_UNESCAPED_UNICODE),
                'address' => json_encode([
                    'en' => '456 Brain Ave.',
                    'ar' => 'شارع الدماغ 456',
                ], JSON_UNESCAPED_UNICODE),
                'description' => json_encode([
                    'en' => 'Department of Neurology, treating neurological disorders and brain diseases.',
                    'ar' => 'قسم طب الأعصاب، يعالج اضطرابات الجهاز العصبي وأمراض الدماغ.',
                ], JSON_UNESCAPED_UNICODE),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode([
                    'en' => 'Orthopedics',
                    'ar' => 'طب العظام',
                ], JSON_UNESCAPED_UNICODE),
                'address' => json_encode([
                    'en' => '789 Bone Rd.',
                    'ar' => 'طريق العظام 789',
                ], JSON_UNESCAPED_UNICODE),
                'description' => json_encode([
                    'en' => 'Department of Orthopedics, specializing in bone and joint treatments.',
                    'ar' => 'قسم طب العظام، متخصص في علاج مشاكل العظام والمفاصل.',
                ], JSON_UNESCAPED_UNICODE),
                'created_at' => now(),
                'updated_at' => now(),
            ],
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
