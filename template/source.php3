<?php

  if (preg_match("/^[a-z0-9\.-_]*$/i",$QUERY_STRING)) {

    if (file_exists($QUERY_STRING) && !is_dir($QUERY_STRING)) {
      show_source($QUERY_STRING);
    } else {
      print "File not found: $QUERY_STRING\n";
    }
  } else {
    print "Bad file referenced: $QUERY_STRING\n";
  }
?> 

