<?php

namespace design_patterns\behavioral\observer\login;

class Logging implements \SplObserver {

    /**
     * @param \SplSubject $SplSubject
     */
    public function update(\SplSubject $SplSubject ) {
 
        $status = $SplSubject->getStatus();
 
        switch ( $status[0] ) {
 
            case Login::INCORRECT_PWD:
                echo __CLASS__ . ": Logging incorrect password attempt to error file.";
                break;
 
            case Login::UNKNOWN_USER:
                echo __CLASS__ . ": Logging unknown user attempt to error file.";
                break;
 
            case Login::ALREADY_LOGGED_IN:
                echo __CLASS__ . ": Logging already logged in to error file.";
		break;

            case Login::ALLOW:
                echo __CLASS__ . ": Logging to access file.";
 
        }
 
    }
 
}
