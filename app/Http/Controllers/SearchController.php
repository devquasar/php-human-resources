<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request){
        $query = $request->input('query');

        if (!$query) {
            redirect()->route('home');
        }

        $users = Employee::where(DB::raw("CONCAT (first_name, ' ' , second_name)"),
                            'LIKE', "%{$query}%")
                        ->get();


        return view('search.results')->with('users', $users);
    }
}
