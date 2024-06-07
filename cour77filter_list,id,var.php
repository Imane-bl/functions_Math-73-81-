<?php

  /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */

  echo "<pre>";
  print_r(filter_list());
  echo "</pre>";

  echo filter_id("boolean") . "<br>"; // 258
  echo filter_id("int") . "<br>"; // 257

  $val = "on"; // True || 1 || "yes" || "on"
  //"3" thus is false 

  if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258" in play of FILTER8VALIDATE_BOOL

    echo "This Is True";

  } else {

    echo "This Is False";

  }