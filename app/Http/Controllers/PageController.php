<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
Use App\User;
use Carbon\Carbon;

class PageController extends Controller
{
    public function Welcome()
    {
        return view('pages.welcome');
    }

    public function Modifiers()
    {
        $day = Carbon::now()->format('d');
        $weekofyear = Carbon::now()->weekOfYear;
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;

        $minute = Carbon::now()->format('i');
        $hour = Carbon::now()->format('G');

        $dayofweek = Carbon::now()->format('w');
        $dayofyear = Carbon::now()->dayOfYear;
        $daysinmonth = Carbon::now()->daysInMonth;
        return view('pages.modifiers', compact('day', 'month', 'year', 'weekofyear', 'minute', 'hour','dayofweek', 'dayofyear', 'daysinmonth'));
    }
}
