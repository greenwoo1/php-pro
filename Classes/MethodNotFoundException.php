<?php

namespace Classes;

class MethodNotFoundException extends \Exception {
    private $methodName;

    public function __construct($methodName, $message = "", $code = 0, \Exception $previous = null) {
        $this->methodName = $methodName;
        if (empty($message)) {
            $message = "Method '$methodName' does not exist." . PHP_EOL;
        }
        parent::__construct($message, $code, $previous);
    }

    public function getMethodName() {
        return $this->methodName;
    }

    public function customErrorMessage() {
        return "Error: " . $this->getMessage() . " (Method: " . $this->getMethodName() . ")" . PHP_EOL;
    }
}