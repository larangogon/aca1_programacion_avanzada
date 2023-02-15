<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestNum;
use Illuminate\Http\RedirectResponse;
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
}
