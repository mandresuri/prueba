<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds of user and profile for an administrator
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'admin1',
            'email' => 'admin@admin.co',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/default.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, eaque quaerat. Cumque, assumenda adipisci. Magnam officia unde, facere earum laudantium harum ipsam cum vel! Delectus atque perferendis soluta iste accusamus?',
            
        ]);
    }
}
