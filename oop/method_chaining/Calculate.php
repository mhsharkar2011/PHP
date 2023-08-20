<?php
class Calculate {
    private $result = 0;

    public function multiply($a, $b) {
        $this->result = $a * $b;
        return $this;
    }
    public function multi() {
        return $this->result;
    }

    public function add($a, $b) {
        $this->result = $a + $b;
        return $this;
    }
    public function sum() {
        return $this->result;
    }
}