<?php

namespace Linnit\Tests;

use PHPUnit\Framework\TestCase;
use Linnit\Twig\Extension\DT2IconExtension;

class DT2IconTest extends TestCase
{
    /**
     * @dataProvider iconProvider
     */
    public function testiconFilter($testDT, $expect)
    {
        $dt2icon = new DT2IconExtension();
        $output = $dt2icon->formatDateTime($testDT);
        $this->assertEquals($output, $expect);
    }
    
    public static function iconProvider()
    {
        return [
            // hours
            [new \DateTime("00:00:00"), "🕛"],
            [new \DateTime("01:00:00"), "🕐"],
            [new \DateTime("02:00:00"), "🕑"],
            [new \DateTime("03:00:00"), "🕒"],
            [new \DateTime("04:00:00"), "🕓"],
            [new \DateTime("05:00:00"), "🕔"],
            [new \DateTime("06:00:00"), "🕕"],
            [new \DateTime("07:00:00"), "🕖"],
            [new \DateTime("08:00:00"), "🕗"],
            [new \DateTime("09:00:00"), "🕘"],
            [new \DateTime("10:00:00"), "🕙"],
            [new \DateTime("11:00:00"), "🕚"],
            [new \DateTime("12:00:00"), "🕛"],
            [new \DateTime("13:00:00"), "🕐"],
            [new \DateTime("14:00:00"), "🕑"],
            [new \DateTime("15:00:00"), "🕒"],
            [new \DateTime("16:00:00"), "🕓"],
            [new \DateTime("17:00:00"), "🕔"],
            [new \DateTime("18:00:00"), "🕕"],
            [new \DateTime("19:00:00"), "🕖"],
            [new \DateTime("20:00:00"), "🕗"],
            [new \DateTime("21:00:00"), "🕘"],
            [new \DateTime("22:00:00"), "🕙"],
            [new \DateTime("23:00:00"), "🕚"],
            [new \DateTime("24:00:00"), "🕛"],

            // half hours
            [new \DateTime("00:30:00"), "🕧"],
            [new \DateTime("01:30:00"), "🕜"],
            [new \DateTime("02:30:00"), "🕝"],
            [new \DateTime("03:30:00"), "🕞"],
            [new \DateTime("04:30:00"), "🕟"],
            [new \DateTime("05:30:00"), "🕠"],
            [new \DateTime("06:30:00"), "🕡"],
            [new \DateTime("07:30:00"), "🕢"],
            [new \DateTime("08:30:00"), "🕣"],
            [new \DateTime("09:30:00"), "🕤"],
            [new \DateTime("10:30:00"), "🕥"],
            [new \DateTime("11:30:00"), "🕦"],
            [new \DateTime("12:30:00"), "🕧"],
            [new \DateTime("13:30:00"), "🕜"],
            [new \DateTime("14:30:00"), "🕝"],
            [new \DateTime("15:30:00"), "🕞"],
            [new \DateTime("16:30:00"), "🕟"],
            [new \DateTime("17:30:00"), "🕠"],
            [new \DateTime("18:30:00"), "🕡"],
            [new \DateTime("19:30:00"), "🕢"],
            [new \DateTime("20:30:00"), "🕣"],
            [new \DateTime("21:30:00"), "🕤"],
            [new \DateTime("22:30:00"), "🕥"],
            [new \DateTime("23:30:00"), "🕦"],
        ];
    }
}
