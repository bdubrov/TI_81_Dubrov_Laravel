<?php


namespace App;


class UsersRegistration {
    private $user_data;

    public function __construct($request) {
        $name = $request->name;
        $surname = $request->surname;
        $phone = $request->phone;
        $email = $request->email;
        $this->user_data = ['name'=>$name, 'surname'=>$surname, 'phone'=>$phone, 'email'=>$email];
    }

    public function getUserData() {
        return $this->user_data;
    }
}
