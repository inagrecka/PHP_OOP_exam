<?php

namespace Repository\JsonFileRepository;

use Models\Elektra;

class ElektraFileConverter {
    public function fileConverter(array $jsonDecoderInput): array {
        $result = [];
        foreach ($jsonDecoderInput as $singleInput) {
            $result[] = new Elektra(
                $singleInput['deklKiekis'],
                $singleInput['tarifas'],
                $singleInput['dienaNaktis'],
                $singleInput['deklData']
            );
        }
        return $result;
    }
}