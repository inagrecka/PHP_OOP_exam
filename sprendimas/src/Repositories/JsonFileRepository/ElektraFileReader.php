<?php

namespace Repository\JsonFileRepository;

class ElektraFileReader {
    public function readElektra(): string {
        return file_get_contents('deklElektra.json');
    }
}