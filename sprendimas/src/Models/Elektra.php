<?php

namespace Models;

class Elektra {
    private int $deklKiekis;
    private int $tarifas;
    private string $dienaNaktis;
    private string $deklData;
    public function __construct(int $deklKiekis,
                                int $tarifas,
                                string $dienaNaktis,
                                string $deklData)
    {
        $this->deklKiekis = $deklKiekis;
        $this->tarifas = $tarifas;
        $this->dienaNaktis = $dienaNaktis;
        $this->deklData = $deklData;
    }

    /**
     * @return int
     */
    public function getDeklKiekis(): int
    {
        return $this->deklKiekis;
    }

    /**
     * @return int
     */
    public function getTarifas(): int
    {
        return $this->tarifas;
    }

    /**
     * @return string
     */
    public function getDienaNaktis(): string
    {
        return $this->dienaNaktis;
    }

    /**
     * @return string
     */
    public function getDeklData(): string
    {
        return $this->deklData;
    }
}