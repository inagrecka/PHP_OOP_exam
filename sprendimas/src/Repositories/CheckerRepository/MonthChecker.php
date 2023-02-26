<?php

namespace Repository\CheckerRepository;

class MonthChecker {
    /*
     * apsirasom ar teisingai pasirinktas deklaravimo menuo:
     *          LEISTI moketi tik uz praeita menesi pasirinkus einamaji menesi (vasari moki uz sausi ir t.t.)
     *          ERROR jei pasirenki praeita ar sekanti menesius
     *
     * KLAUSIMAS??? ar reiketu tikrinti tik menesi ar dar kartu ir metus?
     */

    public function checkMonth()
    {
        if ($inputMonth === $thisMonth) { //pasirinktas menuo === einamajam menesiui
            //ok
        } //jei pasirenkam PRAEITA menesi:
        elseif ($inputMonth === $lastMonth) { //pasirinktas menuo !=== einamajam menesiui
            //echo 'ERROR: veluojat moketi'
        } //jei pasirenkam menesi I PRIEKI:
        elseif ($inputMonth === $nextMonth) { //pasirinktas menuo !=== einamajam menesiui
            // echo 'ERROR: mokejimas atliekamas per anksti'
        }
    }
}