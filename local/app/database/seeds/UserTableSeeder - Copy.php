<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(array('name' => 'Dr Rehman Ali','title'=>"Passionate about research", "email"=>"abc@gmail.com", "phone"=>"123", "address"=>"some address", "about_me"=>"some text about me", "image"=>"default.gif", "summary"=>"summary goes here", "website" =>"some website"));
    }
}
?>