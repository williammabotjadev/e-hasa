<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class InstructorsController extends Controller
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
            $instructor_users = [];

            if($user->user_role == "Instructor") {
                array_push($instructor_users, $user);    
            } 

            $this->instructors = $instructor_users;
        }
    }
}
