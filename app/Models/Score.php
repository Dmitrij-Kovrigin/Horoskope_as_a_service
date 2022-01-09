<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function monthNames()
    {
        return $monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    }

    public function getColors()
    {
        return $colors = [
            1 => 'rgb(255,0,0)',
            3 => 'rgb(255,92,83)',
            4 => 'rgb(255,41,9)',
            5 => 'rgb(255,228,213)',
            6 => 'rgb(244,255,206)',
            7 => 'rgb(192,255,144)',
            8 => 'rgb(163,255,110)',
            9 => 'rgb(129,255,71)',
            2 => 'rgb(255,49,46)',
            10 => 'rgb(0,255,0)',
        ];
    }

    public function getMonths()
    {
        $january = Score::where('date', 'like', '2022-01' . '%')->get();
        $feb = Score::where('date', 'like', '2022-02' . '%')->get();
        $mar = Score::where('date', 'like', '2022-03' . '%')->get();
        $apr = Score::where('date', 'like', '2022-04' . '%')->get();
        $may = Score::where('date', 'like', '2022-05' . '%')->get();
        $june = Score::where('date', 'like', '2022-06' . '%')->get();
        $july = Score::where('date', 'like', '2022-07' . '%')->get();
        $aug = Score::where('date', 'like', '2022-08' . '%')->get();
        $sep = Score::where('date', 'like', '2022-09' . '%')->get();
        $oct = Score::where('date', 'like', '2022-10' . '%')->get();
        $nov = Score::where('date', 'like', '2022-11' . '%')->get();
        $dec = Score::where('date', 'like', '2022-12' . '%')->get();

        return $months = [$january, $feb, $mar, $apr, $may, $june, $july, $aug, $sep, $oct, $nov, $dec];
    }

    public function happiestMonth($zodiac)
    {
        $allMonths = [];
        $mon = 0;
        $months = $this->getMonths();

        foreach ($months as $value) {
            foreach ($value as $val) {
                $mon += $val->$zodiac;
            }
            $allMonths[] = $mon;
            $mon = 0;
        }

        $happiestMonth = max($allMonths);
        $monthName = "";
        switch ($happiestMonth) {
            case $happiestMonth == $allMonths[0]:
                return $monthName = 'January';
                break;
            case $happiestMonth == $allMonths[1]:
                return $monthName = 'February';
                break;
            case $happiestMonth == $allMonths[2]:
                return $monthName = 'March';
                break;
            case $happiestMonth == $allMonths[3]:
                return $monthName = 'April';
                break;
            case $happiestMonth == $allMonths[4]:
                return $monthName = 'May';
                break;
            case $happiestMonth == $allMonths[5]:
                return $monthName = 'June';
                break;
            case $happiestMonth == $allMonths[6]:
                return $monthName = 'July';
                break;
            case $happiestMonth == $allMonths[7]:
                return $monthName = 'August';
                break;
            case $happiestMonth == $allMonths[8]:
                return $monthName = 'September';
                break;
            case $happiestMonth == $allMonths[9]:
                return $monthName = 'October';
                break;
            case $happiestMonth == $allMonths[10]:
                return $monthName = 'November';
                break;
            case $happiestMonth == $allMonths[11]:
                return $monthName = 'December';
                break;
        }
        return $monthName;
    }
    private function getColumn($zod)
    {
        return array_sum($this->pluck($zod)->all());
    }

    public function bestYear()
    {
        $zodiacYears = [
            $this->getColumn('aquarius_score'),
            $this->getColumn('aries_score'),
            $this->getColumn('cancer_score'),
            $this->getColumn('capricorn_score'),
            $this->getColumn('gemini_score'),
            $this->getColumn('leo_score'),
            $this->getColumn('libra_score'),
            $this->getColumn('pisces_score'),
            $this->getColumn('sagittarius_score'),
            $this->getColumn('scorpio_score'),
            $this->getColumn('taurus_score'),
            $this->getColumn('virgo_score')
        ];
        $bestYear = max($zodiacYears);
        $zodiac = '';

        switch ($bestYear) {
            case $bestYear == $zodiacYears[0]:
                return $zodiac = 'Aquarius';
                break;
            case $bestYear == $zodiacYears[1]:
                return $zodiac = 'Aries';
                break;
            case $bestYear == $zodiacYears[2]:
                return $zodiac = 'Cancer';
                break;
            case $bestYear == $zodiacYears[3]:
                return $zodiac = 'Capricorn';
                break;
            case $bestYear == $zodiacYears[4]:
                return $zodiac = 'Gemini';
                break;
            case $bestYear == $zodiacYears[5]:
                return $zodiac = 'Leo';
                break;
            case $bestYear == $zodiacYears[6]:
                return $zodiac = 'Libra';
                break;
            case $bestYear == $zodiacYears[7]:
                return $zodiac = 'Pisces';
                break;
            case $bestYear == $zodiacYears[8]:
                return $zodiac = 'Sagittarius';
                break;
            case $bestYear == $zodiacYears[9]:
                return $zodiac = 'Scorpio';
                break;
            case $bestYear == $zodiacYears[10]:
                return $zodiac = 'Taurus';
                break;
            case $bestYear == $zodiacYears[11]:
                return $zodiac = 'Virgo';
                break;
        }
        return $zodiac;
    }
}
