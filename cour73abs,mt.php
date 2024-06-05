<?php

  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  echo abs(10) . "<br>";//10 /x/
  echo abs(0) . "<br>";//0
  echo abs(-20) . "<br>";//20

  echo rand() . "<br>";//167947010
  echo mt_getrandmax() . "<br>";//2147483647
  echo rand(50, 60) . "<br>";//56

  echo 10 / 5 . "<br>";//2
  echo gettype(10 / 5) . "<br>";//integer

  echo 11 / 5 . "<br>";//2.2
  echo gettype(11 / 5) . "<br>";//double

  echo intdiv(11, 5) . "<br>";//2
  echo gettype(intdiv(11, 5)) . "<br>";//integer

  echo 11.5 % 5 . "<br>";//1
  echo gettype(11 % 5) . "<br>";//inte

  echo fmod(11.5, 5) . "<br>";//1.5
  echo gettype(fmod(11.5, 5)) . "<br>";//double 