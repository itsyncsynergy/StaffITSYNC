<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('time_elapsed_string')) {

  function time_elapsed_string($datetime, $full = false) {
     //type cast, current time, difference in timestamps
     $timestamp = strtotime($datetime);
     $timestamp      = (int) $timestamp;
     $current_time   = time();
     $diff           = $current_time - $timestamp;
     $myFormatForView = 'about';
     //intervals in seconds
     $intervals      = array (
         'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
     );

     //now we just find the difference
     if ($diff == 0)
     {
         return 'just now';
     }

     if ($diff < 60)
     {
         return $diff == 1 ? $myFormatForView .' '. $diff . ' second ago' : $diff . ' seconds ago';
     }

     if ($diff >= 60 && $diff < $intervals['hour'])
     {
         $diff = floor($diff/$intervals['minute']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' minute ago' : $diff . ' minutes ago';
     }

     if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
     {
         $diff = floor($diff/$intervals['hour']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' hour ago' : $diff . ' hours ago';
     }

     if ($diff >= $intervals['day'] && $diff < $intervals['week'])
     {
         $diff = floor($diff/$intervals['day']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' day ago' : $diff . ' days ago';
     }

     if ($diff >= $intervals['week'] && $diff < $intervals['month'])
     {
         $diff = floor($diff/$intervals['week']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' week ago' : $diff . ' weeks ago';
     }

     if ($diff >= $intervals['month'] && $diff < $intervals['year'])
     {
         $diff = floor($diff/$intervals['month']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' month ago' : $diff . ' months ago';
     }

     if ($diff >= $intervals['year'])
     {
         $diff = floor($diff/$intervals['year']);
         return $diff == 1 ? $myFormatForView .' '. $diff . ' year ago' : $diff . ' years ago';
     }
 }
}


 ?>
