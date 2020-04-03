<?php

class SamsBookFactory extends AbstractBookFactory {

  private $context = "Sams";

  public function makePHPBook() {
    return new SamsPHPBook();
  }

  public function makeMySQLBook() {
    return new SamsMySQLBook();
  }

}