<?php


$message = 'Line 1\r\nLine 2\r\nLine 3';

// $message = wordwrap($message, 70, "\r\n");

// $return = mail('xaxa@mailcatch.com', 'My Subject', $message);
// if ($return === false) {
//     echo "false";
// } else {
//     echo "true";
// }
mail('xaxa@mailcatch.com', 'My Subject', $message);
