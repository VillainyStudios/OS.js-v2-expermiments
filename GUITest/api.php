<?php

class ApplicationTester
{
  public static function call($method, $arguments) {
    return Array(
      "message" => "You called the Application API (backend)",
      "requestMethod" => $method,
      "requestArguments" => $arguments
    );
  }
}

?>
