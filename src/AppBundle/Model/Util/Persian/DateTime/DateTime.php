<?php

namespace AppBundle\Model\Util\Persian\DateTime;

class DateTime extends \DateTime {

    private $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    private $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
    private $weekDayName = array("یک‌شنبه", "دو‌شنبه", "سه‌شنبه", "چهار‌شنبه", "پنج‌شنبه", "آدینه", "شنبه");
    private $monthName = array("فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند");

    public function __toString() {
        return $this->format(DATE_W3C);
    }

    function div($a, $b) {
        return (int) ($a / $b);
    }

    function gregorian_to_jalali($g_y, $g_m, $g_d, $str = false) {
        $gy = $g_y - 1600;
        $gm = $g_m - 1;
        $gd = $g_d - 1;

        $g_day_no = 365 * $gy + $this->div($gy + 3, 4) - $this->div($gy + 99, 100) + $this->div($gy + 399, 400);

        for ($i = 0; $i < $gm; ++$i) {
            $g_day_no += $this->g_days_in_month[$i];
        }
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
        /* leap and after Feb */ {
            $g_day_no++;
        }
        $g_day_no += $gd;

        $j_day_no = $g_day_no - 79;

        $j_np = $this->div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
        $j_day_no = $j_day_no % 12053;

        $jy = 979 + 33 * $j_np + 4 * $this->div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */

        $j_day_no %= 1461;

        if ($j_day_no >= 366) {
            $jy += $this->div($j_day_no - 1, 365);
            $j_day_no = ($j_day_no - 1) % 365;
        }

        for ($i = 0; $i < 11 && $j_day_no >= $this->j_days_in_month[$i]; ++$i)
            $j_day_no -= $this->j_days_in_month[$i];
        $jm = $i + 1;
        $jd = $j_day_no + 1;

        if ($str) {
            if($jm<10)
            {$jm = "0$jm";}
            if($jd<10)
            {$jd = "0$jd";}
            return "$jy/$jm/$jd";
        }

        return array($jy, $jm, $jd);
    }

    function jalali_to_gregorian($j_y, $j_m, $j_d) {
        $jy = $j_y - 979;
        $jm = $j_m - 1;
        $jd = $j_d - 1;

        $j_day_no = 365 * $jy + $this->div($jy, 33) * 8 + $this->div($jy % 33 + 3, 4);
        for ($i = 0; $i < $jm; ++$i) {
            $j_day_no += $this->j_days_in_month[$i];
        }

        $j_day_no += $jd;

        $g_day_no = $j_day_no + 79;

        $gy = 1600 + 400 * $this->div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
        $g_day_no = $g_day_no % 146097;

        $leap = true;
        if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ {
            $g_day_no--;
            $gy += 100 * $this->div($g_day_no, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */
            $g_day_no = $g_day_no % 36524;

            if ($g_day_no >= 365) {
                $g_day_no++;
            } else {
                $leap = false;
            }
        }

        $gy += 4 * $this->div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
        $g_day_no %= 1461;

        if ($g_day_no >= 366) {
            $leap = false;

            $g_day_no--;
            $gy += $this->div($g_day_no, 365);
            $g_day_no = $g_day_no % 365;
        }

        for ($i = 0; $g_day_no >= $this->g_days_in_month[$i] + ($i == 1 && $leap); $i++) {
            $g_day_no -= $this->g_days_in_month[$i] + ($i == 1 && $leap);
        }
        $gm = $i + 1;
        $gd = $g_day_no + 1;

        return array($gy, $gm, $gd);
    }

    function JalaliDate(\DateTime $date, $withTime = true, $breaked = false) {
//        $d = $date->format("w");

        $time = $date->format("H:i:s");
        if ($time == "00:00:00" || !$withTime) {
            $time = "";
        }

        list($year, $month, $day) = $this->gregorian_to_jalali($date->format("Y"), $date->format("m"), $date->format("d"));
        $month--;
        if ($breaked) {
            return "$day $this->monthName[$month] $year<br />$time";
        } else {
            return "$day {$this->monthName[$month]} $year  $time";
        }
    }

    function JalaliDateDayMount($date) {
        $timestamp = $date;

        $day = strftime("%d", $timestamp);
        $month = strftime("%m", $timestamp);
        $year = strftime("%Y", $timestamp);


        list($year, $month, $day) = gregorian_to_jalali($year, $month, $day);
        $month--;
        return "$day $this->monthName[$month]";
    }

    function persian_datetime_format($date, $breaked = false, $DayMountOnly = false) {
        if ($date === null) {
            return "";
        }
        return $this->JalaliDate($date, true, $breaked);
    }

    function persian_date_format($date) {
        if ($date === null) {
            return "";
        }
        return $this->JalaliDate($date, false);
    }

}
