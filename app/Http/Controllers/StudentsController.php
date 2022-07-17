<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.index');
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

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function __construct()
    {
        // foreach($users as $user) 
        // {
        //     $student_users = [];

        //     if($user->user_role == "Student") {
        //         array_push($student_users, $user);    
        //     } 

        //     $this->student = $student_users;
        // }
    }
}
