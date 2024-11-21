<?php

class ValueObject
{
    private int $red;
    private int $green;
    private int $blue;


    public function __construct(int $red, int $green, int $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function setRed(int $red): void
    {
        if ($red < 0 || $red > 255) {
            throw new Exception("Red must be between 0 and 255");
        }
        $this->red = $red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255) {
            throw new Exception("Green must be between 0 and 255");
        }

        $this->green = $green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function setBlue(int $blue): void
    {
        if ($blue < 0 || $blue > 255) {
            throw new Exception("Blue must be between 0 and 255");
        }

        $this->blue = $blue;
    }

    public function equals(ValueObject $object): bool
    {
        return $this->getRed() === $object->getRed() && $this->getGreen() === $object->getGreen();
    }

    public static function random(): ValueObject {
        return new ValueObject(rand(0,255), rand(0,255), rand(0,255));
    }

    public function mix(ValueObject $object): ValueObject {
        $mixedRed = (int)(($this->red + $object->getRed()) / 2);
        $mixedGreen = (int)(($this->green + $object->getGreen()) / 2);
        $mixedBlue = (int)(($this->blue + $object->getBlue()) / 2);

        return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
    }


}