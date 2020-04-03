<?php

class Security implements SplObserver {

    /**
     * @param SplSubject $SplSubject
     */
    public function update( SplSubject $SplSubject ) {
 
        $status = $SplSubject->getStatus();
 
        switch ( $status[0] ) {
 
            case Login::INCORRECT_PWD:
                echo __CLASS__ . ": Incorrect password. Storing attempt, and emailing admin on third attempt.";
            break;
 
            case Login::UNKNOWN_USER:
                echo __CLASS__ . ": Unknown user. Storing attempt, and block IP on tenth try.";
            break;
 
            case Login::ALREADY_LOGGED_IN:
                echo __CLASS__ . ": User is already logged in, check to see if IP addresses are the same.";
            break;
 
        }
 
    }
 
}
