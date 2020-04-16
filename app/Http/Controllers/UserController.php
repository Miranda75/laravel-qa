<?php


namespace App\Http\Controllers;


class UserController extends Controller
{
    public $users;
    public function __construct(DBUserRepository $users) {
        $this->users = $users;
    }
...//code continues


}
