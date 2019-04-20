<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TTTController extends Controller
{
    function a(Request $request)
    {
        $mas0 =  $request->m_0;
        $mas1 =  $request->m_1;
        $mas2 =  $request->m_2;
        $mas3 =  $request->m_3;
        $mas4 =  $request->m_4;
        $mas5 =  $request->m_5;
        $mas6 =  $request->m_6;
        $mas7 =  $request->m_7;
        $mas8 =  $request->m_8;

        for ($i = 0; $i < 9; $i++) {
            if ($mas[$i] == 1) {
                print " ◯ ";
            } elseif ($mas[$i] == -1) {
                print " × ";
            } else {
                print "   ";
            }
            if ($i == 2 || $i == 5 || $i == 8) {
                print "\n";
            }
        }
    }
}
