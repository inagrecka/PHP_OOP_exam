<?php

//kontroleris paima duomenis iš Repositories

namespace Controller;

use Repository\CheckerRepository\MonthChecker;
use Repositories\HTMLInputRepository\InputToJsonEncode;
use Repository\JsonFileRepository\ElektraFileGetter;

class ElektraSubmitController {
    //paspaudus SKAIČIUOTI mygtuka, nurodysim atlikti reikalinga metoda

    public function submitElektra() {

        /*
         * patikrina ar ivestas menuo atitinka nurodytas salygas MonthChecker
         * jeigu atitinka (be error):
         *      - tada JSON faila is InputToJsonEncode praleidziame per ElektraFileGetter
         *      - gauname sutvarkyta masyva
         */
    }
}