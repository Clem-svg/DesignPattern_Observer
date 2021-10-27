<?php
namespace App;

use SplSubject;
use SplObserver;

class Alert implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " " . $subject->user_name . " got a new message  " . $subject->text_message . "\n";
    }
}