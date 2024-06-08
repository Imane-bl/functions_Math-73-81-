<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */

  $email = "o@n  ¥   n.sa";

  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

  echo "<br>";//string(7) "o@nn.sa"

  $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";

  var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
//100+100== string 100+100 il efface pas le deigit + - 
  echo "<br>";//string(8)100+-100

  $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";

  var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  ));//allow thousned la virgule de mille . | /

  echo "<br>"; //string(14) "1,950,150.6541"

  $url = "https://el         zer¥¥¥¥¥o.org";

  var_dump(filter_var($url, FILTER_SANITIZE_URL));

  echo "<br>";//string(18) "https://elzero.org"