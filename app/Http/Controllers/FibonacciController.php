<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestNum;
use Illuminate\View\View;

class FibonacciController extends Controller
{
    public function index(): View
    {
        return view('fibonacci.index', ['fibonacci' => []]);
    }

    public function store(RequestNum $request): View
    {

        $fibonacci = [0, 1];

        $num = $request->input('num');

        for($i = 2; $i < $num; $i++) {
            $fibonacci[] = $fibonacci[$i -1] + $fibonacci[$i -2];
        }

        return view('fibonacci.show', ['fibonacci' => $fibonacci, 'num' => $num]);
    }

    public function otherOption(RequestNum $request): View
    {
        $fibonacci = [];

        $num = $request->input('num');

        $num1 = 0;
        $num2 = 1;

        $counter = 0;
        while ($counter < $num){
            $fibonacci[] = $num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        }

        return view('fibonacci.show', ['fibonacci' => $fibonacci, 'num' => $num]);
    }
}
