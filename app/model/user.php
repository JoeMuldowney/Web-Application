<?php
class User {
    private int $UserID;
    
    public function __construct(
        private string $username,
        private string $hashedPwd     
        
    ) { }

    public function getUserID() {
        return $this->UserID;
    }

    public function getUserName() {
        return $this->username;
    }

    public function getHashedPwd() {
        return $this->hashedPwd;
    }
   
    public function setUserID($val) {
        $this->UserID = $val;
    }

    public function setName($val) {
        $this->username = $val;
    }
}
?>