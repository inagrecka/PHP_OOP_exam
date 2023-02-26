<?php

namespace Interfaces;

interface RouterProcessInterface {
    public function process(string $path, string $method);
}