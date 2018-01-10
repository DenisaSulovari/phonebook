<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('contacts')->insert(
            [
                'name' => 'Alfred',
                'surname' => 'Spencer',
                'type' => 'Mobile',
                'number' => '066854976',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('contacts')->insert(
            [
                'name' => 'Josh',
                'surname' => 'Mence',
                'type' => 'Mobile',
                'number' => '066854856',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('contacts')->insert(
            [
                'name' => 'Kim',
                'surname' => 'Besinger',
                'type' => 'Home',
                'number' => '066411976',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
