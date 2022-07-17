<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumsController extends Controller
{
    public function index()
    {
        $curricumlums = Curriculum::all();
        return view('curriculums.index', ['curriculums' => $curricumlums]);
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

    public function update()
    {
        
    }

    public function show()
    {

    }

    public function destroy()
    {

    }
}
