<?php

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2, Trait3;
        Trait2::test as testFromTrait2;
        Trait3::test as testFromTrait3;
    }

    public function getSum() {
        return $this->test() + $this->testFromTrait2() + $this->testFromTrait3();
    }
}