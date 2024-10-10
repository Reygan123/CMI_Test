<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiabetesRiskController extends Controller
{
    public function calculateRisk(Request $request)
    {
        // Validasi input
        $request->validate([
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'familyHistory' => 'required|string',
        ]);

        // Ambil data dari form
        $age = $request->input('age');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $familyHistory = $request->input('familyHistory');

        // Hitung BMI (Body Mass Index)
        $bmi = $weight / (($height / 100) ** 2);

        // Logika perhitungan risiko
        $riskLevel = 'Rendah';

        if ($age >= 45 || $bmi > 25 || $familyHistory === 'one' || $familyHistory === 'more') {
            $riskLevel = 'Tinggi';
        } elseif ($age >= 35 || $bmi > 23) {
            $riskLevel = 'Sedang';
        }

        // Kembalikan view dengan hasil risiko
        return view('service.diabetes.result', compact('riskLevel'));
    }
}
