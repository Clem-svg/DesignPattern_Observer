<?php

namespace App;

use SplSubject;

interface SplObserver {
/* Methods */
public function update ( SplSubject $subject );
}