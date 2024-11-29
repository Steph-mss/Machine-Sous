<?php
namespace Models;

use Controllers\ErrorsController;

class Utils{

  public static function helloWorld(){
    echo "Hello world !";
  }

  public static function returnDatetime(string $date): \Datetime{
    $date = new \Datetime($date);
    return $date;
  }

  public static function launchException(string $message){
    throw new \Exception($message);
  }

  public static function readException(\Exception $e){
    /**
     * To debug, uncomment this die().
     */
    // die("Exception : ". $e->getMessage());
    
    ErrorsController::launchError(404);
  }

}