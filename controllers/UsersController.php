<?php

class UsersController
{
  public function index()
  {
    $users = App::get('database')->selectAll('users');
    return view('users', compact('users')); //compactでusersの配列を作る
  }

  public function store()
  {
    App::get('database')->insert('users', [
      'name' => $_POST['name']
    ]);

    return redirect('users');
  }
}