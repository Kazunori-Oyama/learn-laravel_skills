<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class UsuallyController extends Controller
{
    public function index()
    {
        return view('usually.index');
    }
    
    public function template()
    {
        $str = 1;
        $skills = Skill::all();
        return view('usually.template',['str' => $str,'skills'=>$skills]);
        
    }
}
