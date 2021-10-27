<?php
namespace App;

use SplSubject;
use SplObserver;

class User implements SplObserver {

  private int $id;
  private string $name;
  private $id_generator = 0;

  public function __construct($name)
  {
      $id = $this->id_generator++;
      $this->id = $id;
      $this->name = $name;
  }


  /**
   * Get the value of id
   *
   * @return  int
   */
  public function getId()
  {
    return $this->id;
  }


  /**
   * Get the value of name
   *
   * @return  string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param  string  $name
   *
   * @return  self
   */
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }
  public function update(SplSubject $subject)
  {
      echo __METHOD__ . " " . $subject->user_name . " got a new message  " . $subject->text_message . " from ". $this->name ."\n";
  }
}