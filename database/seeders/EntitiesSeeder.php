<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use App\Models\UserModel;
use App\Models\ContactModel;
use App\Models\TeamModel;
use App\Models\OrganizationModel;
use App\Models\LocationModel;

class EntitiesSeeder extends Seeder
{
    // Создание контактов и логинов (стрестест 482, по быстрому 100)
    public function initContactsWithLogins(){
        // sparrko
        DB::table('users')->insert(array(
            'name' => 'Егор',
            'surname' => 'Демин',
            'login' => 'sparrko',
            'password' => '$2y$10$65hFcfmZGyn9YNp7MmEkOO50LJFCPv2JV/bdqEokBjb0ZxEOv/yQO', // zasada1234
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        // Остальные записи создаются случайно
        // for ($i = 1; $i <= 482; $i++) {
        //     try {
        //         // Vars
        //         $gender = fake()->randomElement(['male', 'female']);

        //         $name = fake()->firstName($gender);
        //         $surname = fake()->lastName($gender);
        //         $username = \Str::slug("{$surname} {$name}", '.', 'ru');

        //         $emails = ['@yandex.ru', '@mail.ru', '@gmail.com'];

        //         // Contact
        //         $contact = new ContactModel;
        //         $contact->fill([
        //             'name' => $name,
        //             'surname' => $surname,
        //             'organization_id' => random_int(1, 9),
        //             'location_id' => random_int(1, 18),
        //             'email' => $username . $emails[array_rand($emails)],
        //             'phone' => '89' . strval(random_int(100000000, 999999999))
        //         ]);
        //         $contact->save();

        //         // User
        //         $contact->user = new UserModel;
        //         $contact->user->fill([
        //             'login' => $username,
        //             'password' => Hash::make($username),
        //             'contact_id' => $contact->id
        //         ]);
        //         $contact->user->save();
        //     } catch(\Exception $e){ $i--; }
        // }
    }

    public function run()
    {
        // Создание пользователей
        echo "\n\n  Создание пользователей...\n";
        $this->initContactsWithLogins();
    }
}