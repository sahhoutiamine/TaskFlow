<?php 

namespace App\Interfaces;

interface Assignable {
    public function assignToTeam($task, $member): int;
    public function isAssigned(int $assigneId): bool;
    public function getAssignedTasks(): array;
    public function getAssignedTasksCount(): int;
}

