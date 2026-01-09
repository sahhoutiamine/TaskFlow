<?php

namespace App\Models;


abstract class TeamMember {
    protected $id;
    protected $username;
    protected $email;
    protected $pw;
    protected $teamId; 
    protected $createdAt;




    public function __construct($id, $username, $email, $pw, $teamId, $createdAt) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->pw = $pw;
        $this->teamId = $teamId;
        $this->createdAt = $createdAt;
    }


    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->pw;
    }
    public function getTeamId() {
        return $this->teamId;
    }
    public function getCreatedAt() {
        return $this->createdAt;
    }
    


    abstract public function canCreateProject() : bool;
    abstract public function canAssignTasks() : bool;
    abstract public function getRolePermissions() : array;

    public function verifyPassword($pw) {
        if ($this->pw === $pw) {
            return true;
        }
        return false;
    };
    public function setPassword($newPw) {
        $this->pw->$newPw;
    }
}

