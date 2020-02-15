<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Competence;


class AdminController extends Controller
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
        $user = Auth::user();
        $comp = $user->competences;
        return view('admin.admin', compact('user', 'comp'));
    }
    
    public function add(Request $request)
    {
      $user = Auth::user();
      $skills = $user->competences;
      $comp = Competence::all();
      DB::table('competence_user')->insert(['competence_id'=>$request->input('competence'),'niveau'=>$request->input('niveau'),'user_id'=>$user->id]);
      return redirect()->route('admin');
    }
    
    public function edit(Request $request)
    {
      $user = Auth::user();
      $skills = $user->competences;
      $comp = Competence::all();
      DB::table('competence_user')->where('user_id',$user->id)->where('competence_id',$request->input('competence'))->update(['niveau'=>$request->input('niveau')]);
      return redirect()->route('admin');
    }
    
    public function destroy($id)
    {
      $user = Auth::user();
      $skills = $user->competences;
      $comp = Competence::all();
      DB::table('competence_user')->where('user_id', $user->id)->where('competence_id', $id)->delete();
      return redirect()->route('admin');
    }
    
}