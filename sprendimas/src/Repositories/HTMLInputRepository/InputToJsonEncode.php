<?php

//cia gauta masyva is HTMLInputReader idedame i JSON faila

namespace Repositories\HTMLInputRepository;

use Repositories\HTMLInputRepository\HTMLInputReader;

class InputToJsonEncode {
    public function __construct(private HTMLInputReader $inputReader) {}
    public function inputToJson(array $HTMLInputArray):void {
        $inputArray = $this->inputReader->readInput();
        $array = json_encode($inputArray, JSON_PRETTY_PRINT);
        $HTMLInputArray = file_put_contents('deklElektra.json', $array);
    }
}