<?php 

require_once "TeamMember.php";
namespace App\Models;

class Administrator extends TeamMember {
    public function canCreateProject() {
        return false;
    }
    public function canAssignTasks() {
        return false;
    }
    public function getRolePermissions() {
        return ["manage_teams", "manage_members"];
    }
}
