<?php 

require_once "TeamMember.php";
namespace App\Models;

class Tester extends TeamMember {
    public function canCreateProject() {
        return false;
    }
    public function canAssignTasks() {
        return false;
    }
    public function getRolePermissions() {
        return ["test", "review"];
    }
}
