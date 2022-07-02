<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
		'username' => 'farafara',
		'useremail' => 'farafara@gmail.com',
		'userpassword' => password_hash('fara123', PASSWORD_DEFAULT),
		]);
    }
}
