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

            // 14 past
            [new \DateTime("00:14:00"), "🕛"],
            [new \DateTime("01:14:00"), "🕐"],
            [new \DateTime("02:14:00"), "🕑"],
            [new \DateTime("03:14:00"), "🕒"],
            [new \DateTime("04:14:00"), "🕓"],
            [new \DateTime("05:14:00"), "🕔"],
            [new \DateTime("06:14:00"), "🕕"],
            [new \DateTime("07:14:00"), "🕖"],
            [new \DateTime("08:14:00"), "🕗"],
            [new \DateTime("09:14:00"), "🕘"],
            [new \DateTime("10:14:00"), "🕙"],
            [new \DateTime("11:14:00"), "🕚"],
            [new \DateTime("12:14:00"), "🕛"],
            [new \DateTime("13:14:00"), "🕐"],
            [new \DateTime("14:14:00"), "🕑"],
            [new \DateTime("15:14:00"), "🕒"],
            [new \DateTime("16:14:00"), "🕓"],
            [new \DateTime("17:14:00"), "🕔"],
            [new \DateTime("18:14:00"), "🕕"],
            [new \DateTime("19:14:00"), "🕖"],
            [new \DateTime("20:14:00"), "🕗"],
            [new \DateTime("21:14:00"), "🕘"],
            [new \DateTime("22:14:00"), "🕙"],
            [new \DateTime("23:14:00"), "🕚"],

            // quarter past
            [new \DateTime("00:15:00"), "🕧"],
            [new \DateTime("01:15:00"), "🕜"],
            [new \DateTime("02:15:00"), "🕝"],
            [new \DateTime("03:15:00"), "🕞"],
            [new \DateTime("04:15:00"), "🕟"],
            [new \DateTime("05:15:00"), "🕠"],
            [new \DateTime("06:15:00"), "🕡"],
            [new \DateTime("07:15:00"), "🕢"],
            [new \DateTime("08:15:00"), "🕣"],
            [new \DateTime("09:15:00"), "🕤"],
            [new \DateTime("10:15:00"), "🕥"],
            [new \DateTime("11:15:00"), "🕦"],
            [new \DateTime("12:15:00"), "🕧"],
            [new \DateTime("13:15:00"), "🕜"],
            [new \DateTime("14:15:00"), "🕝"],
            [new \DateTime("15:15:00"), "🕞"],
            [new \DateTime("16:15:00"), "🕟"],
            [new \DateTime("17:15:00"), "🕠"],
            [new \DateTime("18:15:00"), "🕡"],
            [new \DateTime("19:15:00"), "🕢"],
            [new \DateTime("20:15:00"), "🕣"],
            [new \DateTime("21:15:00"), "🕤"],
            [new \DateTime("22:15:00"), "🕥"],
            [new \DateTime("23:15:00"), "🕦"],
            


            // quarter to
            [new \DateTime("00:45:00"), "🕐"],
            [new \DateTime("01:45:00"), "🕑"],
            [new \DateTime("02:45:00"), "🕒"],
            [new \DateTime("03:45:00"), "🕓"],
            [new \DateTime("04:45:00"), "🕔"],
            [new \DateTime("05:45:00"), "🕕"],
            [new \DateTime("06:45:00"), "🕖"],
            [new \DateTime("07:45:00"), "🕗"],
            [new \DateTime("08:45:00"), "🕘"],
            [new \DateTime("09:45:00"), "🕙"],
            [new \DateTime("10:45:00"), "🕚"],
            [new \DateTime("11:45:00"), "🕛"],
            [new \DateTime("12:45:00"), "🕐"],
            [new \DateTime("13:45:00"), "🕑"],
            [new \DateTime("14:45:00"), "🕒"],
            [new \DateTime("15:45:00"), "🕓"],
            [new \DateTime("16:45:00"), "🕔"],
            [new \DateTime("17:45:00"), "🕕"],
            [new \DateTime("18:45:00"), "🕖"],
            [new \DateTime("19:45:00"), "🕗"],
            [new \DateTime("20:45:00"), "🕘"],
            [new \DateTime("21:45:00"), "🕙"],
            [new \DateTime("22:45:00"), "🕚"],
            [new \DateTime("23:45:00"), "🕛"],
        ];
    }
}
