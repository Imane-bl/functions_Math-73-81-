<?php

  /*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

  //echo $_GET["num"];// va me doone un warninng apres au dessous le botton pour envoyer 

  echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
                                    //si jecrit 1223EE66 il donnra 122366
?>

<form action="" method="GET">
  <input type="text" name="num">
  <input type="submit" value="Send">
</form>