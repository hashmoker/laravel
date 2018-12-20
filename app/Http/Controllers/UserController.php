<?php

namespace App\Http\Controllers;

use App\User;


class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function index() {
        // Вытащить все продукты из БД
        $users = User::all();
        // вернуть представление и передаем туда переменную products
        return view('users.index', compact('users'));
    }
}