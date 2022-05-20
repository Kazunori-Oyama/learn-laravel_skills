<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SkillController extends Controller
{
    //
    public function index()
    {
        // $skills = Skill::select('id','skill_status','skill_name','experience_years', DB::raw('LEFT(remarks, 20) as remarks'))->paginate(15);
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
    
    public function new( )
    {
        return view('skill.new');
    }
    
    public function create(Request $request )
    {
        $skill = new Skill();
        $skill->skill_name = $request -> input('skill_name');
        $skill->skill_status = $request->input('skill_status');
        $skill->experience_years = $request->input('experience_years');
        $skill->remarks = $request->input('remarks');
        $skill->save();
        
        
        return redirect('skill')->with('status','スキルを登録しました。');
    }
    
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skill.edit',[
            'skill' => $skill
        ]);
    }
    
    public function update(Request $request )
    {
        $validated = $request->validate([
        'skill_name' => 'required|max:255',
        'skill_status' => ['required', Rule::in(SKILL::SKILL_STATUS_ARRAY)],
        'remarks' => 'max:1000',
        'experience_years' => 'numeric|max:100',
        ]);
        
        if($validated->false()){
            return redirect('skill')->withErrors($validated)->withIinput();
        }
        
        $skill = Skill::find($request->input('id'));
        $skill->skill_name = $request -> input('skill_name');
        $skill->skill_status = $request->input('skill_status');
        $skill->experience_years = $request->input('experience_years');
        $skill->remarks = $request->input('remarks');
        $skill->save();
        
        
        return redirect('skill')->with('status','スキルを更新しました。');
    }
    
    public function remove($id)
    {
        $skill = Skill::find($id)->delete();
        return redirect('skill')->with('status','スキルを削除しました。');
    }
    
}
