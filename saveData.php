<?php

  $file_title = "answer.txt";

  $entries_from_file = file_get_contents($file_title);

  $entries = json_decode($entries_from_file);

  if(isSet($_GET["phone"]) && isSet($_GET["question"]) && isSet($_GET["answer"]) ){

    if(!empty($_GET["phone"]) && !empty($_GET["question"]) && !empty($_GET["answer"])){

      $object = new StdClass();
      $object->phone = $_GET["phone"];
      $object->question = $_GET["question"];
      $object->answer = $_GET["answer"];

      array_push($entries, $object);

      $json_string = json_encode($entries);

      file_put_contents($file_title, $json_string);
    }
  }

  echo(json_encode($entries));

?>
