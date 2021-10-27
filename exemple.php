<?php
interface SplSubject {
/* Methods */
public function attach ( SplObserver $observer );
public function detach ( SplObserver $observer );
public function notify (  );
}

interface SplObserver {
/* Methods */
public function update ( SplSubject $subject );
}