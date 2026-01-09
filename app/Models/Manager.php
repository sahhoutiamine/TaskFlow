<?php 

require_once "TeamMember.php";
namespace App\Models;

class Manager extends TeamMember {
    public function canCreateProject() {
        return true;
    }
    public function canAssignTasks() {
        return true;
    }
    public function getRolePermissions() {
        return ["create", "assign"];
    }
}

