<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creo un usuario administrador con mis datos
        User::create([
            'names'    => 'Julian Niño',
            'identification' => '246810',
            'email'    => 'frelian@gmail.com',
            'password' => bcrypt('123'),
        ]);

        factory(User::class, 19)->create();
    }
}
