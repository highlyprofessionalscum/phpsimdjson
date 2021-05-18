<?php

\FFI::load(__DIR__ . "/simdjson.h");

$ffi = \FFI::scope("simdjson");

$ffi->printf("Привет, %s!\n", "мир");