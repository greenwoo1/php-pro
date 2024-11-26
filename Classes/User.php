<?php

namespace Classes;

class User {
    private $name;
    private $age;
    private $email;

    private function setName($name) {
        $this->name = $name;
    }

    private function setAge($age) {
        $this->age = $age;
    }

    private function setEmail($email) {
        $this->email = $email;
    }

    public function getAll() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => ''
        ];
    }

    public function __call($method, $args) {
        if (substr($method, 0, 3) === 'set') {
            $property = lcfirst(substr($method, 3));

            if (property_exists($this, $property)) {
                $this->$property = $args[0];
            } else {
                throw new MethodNotFoundException($method);
            }
        } else {
            throw new MethodNotFoundException($method);
        }
    }
}