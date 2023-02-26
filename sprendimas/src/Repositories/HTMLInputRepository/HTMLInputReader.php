<?php

//cia nuskaitome HTML input duomenis ir paverciam juos i MASYVA
//cia gauname MASYVA

namespace Repository\HTMLInputRepository;

require __DIR__.'Exam/sprendimas/views/page.php';

class HTMLInputReader {
    /*
     * turime tuscia masyva
     * i ji idedame formos input duomenis
     */
    private int $inputKiekis;
    private int $inputTarifas;
    private string $inputDienaNaktis;
    private string $inputData;
    public function __construct(int $inputKiekis, int $inputTarifas, $inputDienaNaktis, string $inputData) {
        $this->inputKiekis = $inputKiekis;
        $this->inputTarifas = $inputTarifas;
        $this->inputDienaNaktis = $inputDienaNaktis;
        $this->inputData = $inputData;
    }

    public function readInput(): array {
        $kiekis = $this->inputKiekis = $_POST['deklKiekis'];
        $tarifas = $this->inputTarifas = $_POST['tarifas'];
        $diena = $this->inputDienaNaktis = $_POST['diena']; //cia dar reikia apsirasyti ka vartotojas pasirinko
                                                    //ar DIENA ar NAKTIS
        $data = $this->inputData = $_POST['data'];

        $masyvas[] = [
            'kiekis' => $kiekis,
            'tarifas' => $tarifas,
            'diena' => $diena,
            'data' => $data
        ];
        return $masyvas;
    }

}