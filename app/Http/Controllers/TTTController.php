<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TTTController extends Controller
{
    function a()
    {
        $mas[0] =  1;
        $mas[1] =  1;
        $mas[2] = -1;
        $mas[3] = -1;
        $mas[4] = -1;
        $mas[5] =  1;
        $mas[6] =  1;
        $mas[7] = -1;
        $mas[8] =  1;

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
