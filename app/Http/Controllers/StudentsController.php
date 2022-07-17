<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {

    }

    public function edit()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function destroy()
    {

    }

    public function __construct(UserRepository $users)
    {
        foreach($users as $user) 
        {
            $student_users = [];

            if($user->user_role == "Student") {
                array_push($student_users, $user);    
            } 

            $this->student = $student_users;
        }
    }
}
