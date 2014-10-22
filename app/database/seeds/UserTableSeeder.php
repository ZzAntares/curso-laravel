<?php
class UserTableSeeder extends Seeder{
	public function run(){
		User::create(["usuario"=>"root","password"=>Hash::make("root")]);
	}
}
?>