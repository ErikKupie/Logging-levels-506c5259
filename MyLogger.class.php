<?php

class MyLogger 
{

    public function log ($message, $a){
        $a =  strtoupper($a);
        switch($a){
            case "WARNING":
                $this->warning ($message);
            break;
            case "ERROR":
                $this->error ($message);
            break;
            case "INFO":
                $this->info ($message);
            break;
            case "DEBUG":
                $this->debug ($message);
            break;
            default:
                echo $message;
        }
    }
    public function warning ($message){
        echo "WARNING: " . $message .  PHP_EOL;
    }
    public function error ($message){
        echo "ERROR: " . $message .  PHP_EOL;
    }
    public function info ($message){
        echo "INFO: " . $message .  PHP_EOL;
    }
    public function debug ($message){
        echo "DEBUG: " . $message .  PHP_EOL;
    }

}

$logger = new MyLogger();
$logger->error('dit is een error');
$logger->log('hello world', 'INFO');