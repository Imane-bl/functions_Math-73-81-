<?php

  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP CEIL
    ------ PHP_ROUND_HALF_DOWN FLOOR

    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */

  echo round(5.99) . "<br>";//6
  echo round(5.50) . "<br>";//6
  echo round(5.49) . "<br>";//5
  echo round(5.10) . "<br>";//5

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";//6
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";//5

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";//5 DOWN MEME SI ?50 TAHT

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//6 a9RB 3ADDED PAIRE
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//4 ICI LE PLUS PROVHE NMBRE PAIRE 5 NON 

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5 LE PLUS PROCHE NMBR IMPAIRE 
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5