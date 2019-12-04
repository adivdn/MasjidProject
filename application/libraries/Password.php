<?php
    class Password{
        public function hash($password){
            $hash = password_hash($password,PASSWORD_BCRYPT);
        }
        public function verify($password){
            
            if(password_verify($password,$hash)){
                return true;
            }
            return false;
        }
    }

?>