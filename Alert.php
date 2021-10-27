<?php

class Alert implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Emailing the author of post id: " . $subject->user_id . " that someone commented with : " . $subject->text_message . "\n";
    }
}