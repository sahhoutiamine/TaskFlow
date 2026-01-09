<?php 

namespace App\Interfaces;

interface Prioritizable {
    public function addPriority($priority): int;
    public function getPriority(): string;
}
