<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ZodiacScoresController extends Controller
{
    public function main(Request $request)
    {
        $zodiacScores = new Score();
        $months = $zodiacScores->getMonths();
        $monthNames = $zodiacScores->monthNames();
        $colors = $zodiacScores->getColors();
        $happiestYear = $zodiacScores->bestYear();

        if (($request->select && $request->select == 'pisces')) {
            $bestMonth = $zodiacScores->happiestMonth('pisces_score');
            $zodName = 'Pisces';
            return view('zodiacs.pisces', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'aries')) {
            $bestMonth = $zodiacScores->happiestMonth('aries_score');
            $zodName = 'Aries';
            return view('zodiacs.aries', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'aquarius')) {
            $bestMonth = $zodiacScores->happiestMonth('aquarius_score');
            $zodName = 'Aquarius';
            return view('zodiacs.aquarius', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'cancer')) {
            $bestMonth = $zodiacScores->happiestMonth('cancer_score');
            $zodName = 'Cancer';
            return view('zodiacs.cancer', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'capricorn')) {
            $bestMonth = $zodiacScores->happiestMonth('capricorn_score');
            $zodName = 'Capricorn';
            return view('zodiacs.capricorn', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'gemini')) {
            $bestMonth = $zodiacScores->happiestMonth('gemini_score');
            $zodName = 'Gemini';
            return view('zodiacs.gemini', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'leo')) {
            $bestMonth = $zodiacScores->happiestMonth('leo_score');
            $zodName = 'Leo';
            return view('zodiacs.leo', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'libra')) {
            $bestMonth = $zodiacScores->happiestMonth('libra_score');
            $zodName = 'Libra';
            return view('zodiacs.libra', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'sagittarius')) {
            $bestMonth = $zodiacScores->happiestMonth('sagittarius_score');
            $zodName = 'Sagittarius';
            return view('zodiacs.sagittarius', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'scorpio')) {
            $bestMonth = $zodiacScores->happiestMonth('scorpio_score');
            $zodName = 'Scorpio';
            return view('zodiacs.scorpio', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'taurus')) {
            $bestMonth = $zodiacScores->happiestMonth('taurus_score');
            $zodName = 'Taurus';
            return view('zodiacs.taurus', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        } elseif (($request->select && $request->select == 'virgo')) {
            $bestMonth = $zodiacScores->happiestMonth('virgo_score');
            $zodName = 'Virgo';
            return view('zodiacs.virgo', [
                'months' => $months,
                'monthNames' => $monthNames,
                'colors' => $colors,
                'bestMonth' => $bestMonth,
                'zodName' => $zodName,
            ]);
        }
        return view('index', [
            'happiestYear' => $happiestYear
        ]);
    }

    public function daysText(Request $request)
    {
        $score = $request->score;
        $zodScore = new Score;
        $colors = $zodScore->getColors();
        $color = $colors[$score];
        $zodName = $request->zodName;
        $date = $request->date;
        // $color = $request->color;

        return view('astroText', [
            'score' => $score,
            'zodName' => $zodName,
            'date' => $date,
            'color' => $color,
        ]);
    }
}
