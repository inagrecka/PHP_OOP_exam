<?php

namespace Repository\JsonFileRepository;

class ElektraFileGetter {
    private ElektraFileReader $reader;
    private JsonDecoder $decoder;
    private ElektraFileConverter $converter;
    public function __construct(ElektraFileReader $reader, JsonDecoder $decoder, ElektraFileConverter $converter) {
        $this->reader = $reader;
        $this->decoder = $decoder;
        $this->converter = $converter;
    }

    public function getElektraFile(): array {
        $elektraJson = $this->reader->readElektra(); //nuskaitome JSON faila
        $elektraUnstructured = $this->decoder->decodeJson($elektraJson); // gausim masyva su nesutvarkytais masyvais viduje
        return $this->converter->fileConverter($elektraUnstructured); //gausime sutvarkyta masyva pagal musu nurodytas taisykles
    }
}