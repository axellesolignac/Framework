<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Competence;

class UsersController extends Controller
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
        return view('users', compact('user', 'comp'));
    }
    
    public function add(Request $request)
    {
      $user = Auth::user();
      $skills = $user->competences;
      $comp = Competence::all();
      DB::table('competence_user')->insert(['competence_id'=>$request->input('competence'),'niveau'=>$request->input('niveau'),'user_id'=>$user->id]);
      return view('users', compact('user','skills','comp'));
    }
    
    public function destroy($id)
    {
      $user = Auth::user();
      $skills = $user->competences;
      $comp = Competence::all();
      DB::table('competence_user')->where('user_id', $user->id)->where('competence_id', $id)->delete();
    }
    
}