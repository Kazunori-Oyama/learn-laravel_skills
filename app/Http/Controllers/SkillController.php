<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::paginate(15);
        return view('skill.index',[
            'skills' => $skills
        ]);
    }
    
    public function detail($id)
    {
        $skill = Skill::find($id);
        return view('skill.detail',[
            'skill' => $skill
        ]);
    }
}
