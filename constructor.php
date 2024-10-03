<?php

class ArrayStats {
    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
        $this->bubbleSort();
    }

    // Bubble sort function
    private function bubbleSort() {
        $n = count($this->numbers);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($this->numbers[$j] > $this->numbers[$j + 1]) {
                    
                    $temp = $this->numbers[$j];
                    $this->numbers[$j] = $this->numbers[$j + 1];
                    $this->numbers[$j + 1] = $temp;
                }
            }
        }
    }

    // Get the largest number
    public function getLargest() {
        return end($this->numbers); 
    }

    // Get the median number
    public function getMedian() {
        $n = count($this->numbers);
        if ($n % 2 == 0) {
            return ($this->numbers[$n / 2 - 1] + $this->numbers[$n / 2]) / 2;
        } else {
            return $this->numbers[floor($n / 2)];
        }
    }
}

class StatsUser {
    private $arrayStats;

    public function __construct($numbers) {
        $this->arrayStats = new ArrayStats($numbers);
    }

    // Show the largest and median values
    public function displayStats() {
        $largest = $this->arrayStats->getLargest();
        $median = $this->arrayStats->getMedian();
        echo "Largest Value: $largest\n";
        echo "Median Value: $median\n";
    }
}

$numbers = [5, 3, 8, 1, 2];
$statsUser = new StatsUser($numbers);
$statsUser->displayStats();
?>