<?php

namespace AppBundle\Model\Util\Persian\DateTime;

class Diff
{

    private $interval;
    private $n = array(
        0 => "",
        1 => "یک", 2 => "دو", 3 => "سه", 4 => "چهار", 5 => "پنج",
        6 => "شش", 7 => "هفت", 8 => "هشت", 9 => "نه", 10 => "ده",
        11 => "یازده",
        12 => "دوازده",
        13 => "سیزده",
        14 => "چهارده",
        15 => "پانزده",
        16 => "شانزده",
        17 => "هفده",
        18 => "هجده",
        19 => "نوزده",
        20 => "بیست",
        21 => "بیست و یک",
        22 => "بیست و دو",
        23 => "بیست و سه",
        24 => "بیست و چهار",
        25 => "بیست و پنج",
        26 => "بیست و شش",
        27 => "بیست و هفت",
        28 => "بیست و هشت",
        29 => "بیست و نه",
        30 => "سی",
        40 => "چهل",
        50 => "پنجاه",
    );

    /**
     * 
     * @param string $datetime
     * @return \DateTimeDiffToNow
     */
    static public function fromString($datetime)
    {
        if (is_null($datetime)) {
            return "";
        }
        $dt = DateTime::createFromFormat("Y-m-d H:i:s", $datetime);

        return new DateTimeDiffToNow($dt);
    }

    public function __construct(\DateTime $datetime)
    {
        $this->interval = $datetime->diff(new \DateTime());
    }

    public function __toString()
    {
//        var_dump($this->interval);
        if ($this->interval->invert) {
            $str = $this->intervalToText() . " دیگر ";
        } else {
            $str = $this->intervalToText() . " پیش ";
        }

        return (string) $str;
    }

    function dd($n)
    {
        if ($n < 30) {
            return $n;
        } else {
            return ((int) ($n / 10)) * 10;
        }
    }

    function intervalToText()
    {
        if ($this->interval->days == 0) {
            $s = $this->lessThanDay();
        } elseif ($this->interval->days < 30) {
            $s = $this->day();
        } elseif ($this->interval->m < 12 && $this->interval->y == 0) {
            $s = $this->month();
        } else {
            $s = $this->year();
        }
        return $s;
    }

    function year()
    {
        return $this->n[$this->interval->y] . " سال ";
    }

    function month()
    {
        return $this->n[$this->interval->m] . " ماه ";
    }

    function day()
    {
        return $this->n[$this->interval->d] . " روز ";
    }

    function lessThanDay()
    {
        if ($this->interval->h == 0) {
            return $this->minute();
        } else {
            return $this->hour();
        }
    }

    function hour()
    {
        if ($this->interval->i > 30) {
            $i = 1;
        } else {
            $i = 0;
        }
        $s = $this->n[$this->interval->h + $i] . " ساعت ";
        return $s;
    }

    function minute()
    {
        if ($this->interval->i == 0) {
            return "لحظاتی ";
        } else {
            return $this->n[$this->dd($this->interval->i)] . " دقیقه ";
        }
    }

}
