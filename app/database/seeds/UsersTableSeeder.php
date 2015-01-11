<?php

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();

        User::create([
            'first_name' => 'Kristijan',
            'last_name' => 'Jurčić',
            'username' => 'kiki',
            'password' => Hash::make('1q2w3e4r5t'),
            'email' => 'podrska@tempusmedia.hr',
            'phone' => '0959083522',
            'per_hour' => '50'
        ]);

        User::create([
            'first_name' => 'Alen',
            'last_name' => 'Barać',
            'username' => 'alen',
            'password' => Hash::make('alen123'),
            'email' => 'alen@tempusmedia.hr',
            'phone' => '092123456',
             'per_hour' => '30'
        ]);
        
          User::create([
            'first_name' => 'Đuro',
            'last_name' => 'Grobničan',
            'username' => 'dg',
            'password' => Hash::make('dg'),
            'email' => 'djuro@tempusmedia.hr',
            'phone' => '123445',
               'per_hour' => '12'
        ]);
          
          
            User::create([
            'first_name' => 'Matej',
            'last_name' => 'Purgar',
            'username' => 'fuser',
            'password' => Hash::make('fuser123'),
            'email' => 'fuser@tempusmedia.hr',
            'phone' => '092123456',
            'phone' => '3',
        ]);
    }

}
