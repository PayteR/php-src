<?php

function zend_test_array_return(): array {}

function zend_test_nullable_array_return(): ?array {}

function zend_test_void_return(): void {}

function zend_test_deprecated(): void {}

function zend_create_unterminated_string(string $str): string {}

function zend_terminate_string(string &$str) {}

/** @param mixed $variable */
function zend_leak_variable($variable): void {}

function zend_leak_bytes(int $bytes = 3): void {}
