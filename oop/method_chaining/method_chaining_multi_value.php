<?php
class Calculator {
    private $result = 0;

    public function multiply($a, $b) {
        $this->result = $a * $b;
        return $this;
    }

    public function summ($a, $b) {
        $this->result += $a + $b;
        return $this;
    }

    public function multi() {
        $this->result *= 2;
        return $this;
    }

    public function sum() {
        return $this->result;
    }
}

$cal = new Calculator();
$result = $cal->multiply(4, 6)->multi()->summ(10, 15)->sum();
echo "Result: " . $result; // Outputs: Result: 73
