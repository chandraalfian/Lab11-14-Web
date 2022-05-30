<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'alfanshaabif',
		'useremail' => 'alfansha.a.h@gmail.com',
		'userpassword' => password_hash('alfanshaabif', PASSWORD_DEFAULT),
		]);
	}
}