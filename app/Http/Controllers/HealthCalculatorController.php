<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthCalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.health-calculator');
    }

    public function calculateBmi(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $weight = $request->input('weight');
        $height = $request->input('height') / 100;
        $bmi = $weight / ($height * $height);

        return back()->with('bmi', $bmi);
    }
}
