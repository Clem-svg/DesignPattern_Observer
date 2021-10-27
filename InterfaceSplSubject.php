<?php


interface SplSubject {
/* Methods */
public function attach ( SplObserver $observer );
public function detach ( SplObserver $observer );
public function notify (  );
}