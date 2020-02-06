<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Competence;

class SkillsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('skills', compact('user'));
    }

   public function create(Request $request)
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $skill = new Competence();
        $skill->id = $request->input('id');
        $skill->nom = $request->input('nom');
        $skill->description = $request->input('description');
        $skill->src = $request->input('src');
        $skill->save();
        return redirect()->route('skills.index');
    }
    
    public function edit($id)
      {
          $comp = Competence::find($id);
          return view('edit');
      }
      
     public function update(Request $request)
      {
          $comp = Competence::find($request->input('id'));
          $comp->name = $request->input('name');
          $comp->description = $request->input('description');
          $comp->niveau = $request->input('niveau');
          $comp->save();
          return redirect()->route('skills.index');
      }
    public function destroy($id)
      {
          $comp = User::find($id);
          $comp->delete();
          return redirect()->route('skills.index');
      }
}