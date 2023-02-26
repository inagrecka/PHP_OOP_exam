<?php

namespace Repository\JsonFileRepository;

class JsonDecoder {
    public function decodeJson(string $input): array {
        return json_decode($input, true);
    }
}