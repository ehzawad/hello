<?php

class User extends Model
{
    public static function tableName(){
        return "users";
    }

//    PHP >= 5.5
    public function setPassword($password){
        $this->data["password"] = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password){
        if (password_verify($password, $this->data["password"])) {
            return true;
        } else {
            return false;
        }
    }

    public static function registerUser($name,$email,$password,$role,$phone=null){
         $user = new User();
         $user->data["name"] = $name;
         $user->data["email"] = $email;
         $user->setPassword($password);
         $user->save();

         return $user;
    }

        //Create Example
        // $user = new User();
        // $user->data["name"] = "OKI DOKI";
        // $user->data["age"] = "6";
        // $user->data["bio"] = "lajd;l sl;d jsal;";
        // $user->save();



        //Get All example
        //$users = User::getAll();


        //GET ONE
        // $u = User::find(5);

        //EDIT example
        // $u = User::find(5);
        // $u->data["name"] = "CHANGED";
        // $u->data["age"] = "999";
        // $u->data["bio"] = "Hello World";
        // $u->save();

        // dd($u);


        //DELETE EXAMPLE
        // $u = User::find(5);
        // $u->delete();

    
}