<?php

require 'vendor/autoload.php';

/* DARBO EIGA:

dirbam su HTML formoje ivestais duomenimis:
    ivestus formoje duomenis nuskaitome ir priskiriame kintamajam - HTMLInputReader
    kiekviena ivesta 'input' saugome JSON faile - InputToJsonEncode

dirbam su uzpildytu JSON failu (kuriame issaugoti HTML formos ivesti duomenys):
    READ json file - ElektraFileReader
    DECODE json file - JsonDecoder
    CONVERT json file - ElektraFileConverter
    apjungiame visas 3 klases (READ, DECODE ir CONVERT) i viena bendra - ElektraFileGetter
*/



