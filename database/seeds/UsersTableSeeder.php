<?php

use App\Entities\Admin\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $root = new User();
        $root->email = 'root@ticket.com';
        $root->username = 'root';
        $root->firstname = 'Root';
        $root->password = 'password';
        $root->create_by = 1;
        $root->update_by = 1;
        $root->save();

        $user = new User();
        $user->email = 'eranet1973@hotmail.com';
        $user->username = 'eroman';
        $user->firstname = 'Emilio';
        $user->lastname = 'Emilio';
        $user->password = bcrypt('password');
        $user->create_by = $root->id;
        $user->update_by = $root->id;
        $user->save();

        factory(User::class,100)->create([
            'create_by' => $user->id,
            'update_by' => $user->id,
        ]);
    }
}

