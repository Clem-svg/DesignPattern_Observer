<?php

class User {

  private int $id;
  private string $name;

  public function __construct($id, $name)
  {
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
}