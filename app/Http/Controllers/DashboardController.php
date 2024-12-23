<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
            ->selectRaw("users.*, faculties.name as 'faculty_name',  majors.name as 'major_name'")
            ->join('faculties', 'users.faculty_id', '=', 'faculties.id')
            ->join('majors', 'users.major_id', '=', 'majors.id')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        // dd($user);
        // $user = DB::table('users')
        //     ->selectRaw("users.*, faculties.name as 'faculty_name',  majors.name as 'major_name'")
        //     ->join('faculties', 'users.faculty_id', '=', 'faculties.id')
        //     ->join('majors', function (JoinClause $join) {
        //         $join->on('users.major_id', '=', 'majors.id')->where('users.id', '=', Auth::user()->id);
        //     })
        //     ->get();
        // $user = $user[0];
        return view('dashboard.index', ['user' => $user[0]]);
    }
}