<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TTTController extends Controller
{
    public function check(Request $request)
    {
        $mas[0] = $request->m_0;
        $mas[1] = $request->m_1;
        $mas[2] = $request->m_2;
        $mas[3] = $request->m_3;
        $mas[4] = $request->m_4;
        $mas[5] = $request->m_5;
        $mas[6] = $request->m_6;
        $mas[7] = $request->m_7;
        $mas[8] = $request->m_8;

        /*for ($i = 0; $i < 9; $i++) {
            if ($mas[$i] == 1) {
                $mas[$i] = "◯";
            } elseif ($mas[$i] == -1) {
                $mas[$i] = "×";
            } else {
                $mas[$i] = "-";
            }
        }*/

        return view("game", [
          'mas0' => $mas[0],
          'mas1' => $mas[1],
          'mas2' => $mas[2],
          'mas3' => $mas[3],
          'mas4' => $mas[4],
          'mas5' => $mas[5],
          'mas6' => $mas[6],
          'mas7' => $mas[7],
          'mas8' => $mas[8]
        ]);
    }

    public function set()
    {
        $mas[0] = 0;
        $mas[1] = 0;
        $mas[2] = 0;
        $mas[3] = 0;
        $mas[4] = 0;
        $mas[5] = 0;
        $mas[6] = 0;
        $mas[7] = 0;
        $mas[8] = 0;

        /*for ($i = 0; $i < 9; $i++) {
            if ($mas[$i] == 1) {
                $mas[$i] = "◯";
            } elseif ($mas[$i] == -1) {
                $mas[$i] = "×";
            } else {
                $mas[$i] = "-";
            }
        }*/

        return view("game", [
          'mas0' => $mas[0],
          'mas1' => $mas[1],
          'mas2' => $mas[2],
          'mas3' => $mas[3],
          'mas4' => $mas[4],
          'mas5' => $mas[5],
          'mas6' => $mas[6],
          'mas7' => $mas[7],
          'mas8' => $mas[8]
        ]);
    }
}
