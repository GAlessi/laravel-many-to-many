<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;
use App\Task;

class MainController extends Controller
{
    public function home()
    {
        $employees = Employee::all();
        // $employees = Employee::with(['location, task'])->get();

        return view('pages.home', compact('employees'));
    }
}
