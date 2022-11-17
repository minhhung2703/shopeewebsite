<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cong1Controller extends Controller
{
    //
    public function cong($a, $b)
    {
        return $a + $b;
    }

    public function tinhtong(Request $request)
    {
        $sum = $request->soA + $request->soB;
        return view('sum', compact('sum'));
    }
}
