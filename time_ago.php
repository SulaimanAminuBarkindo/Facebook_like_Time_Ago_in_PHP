<?php
date_default_timezone_set("Africa/Niamey");
echo timeAgo("2018-08-01 21:24:00")."<br>";

// function for getting time ago just like facebook

function timeAgo($timestamp){
	$timeago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $timeago;
	$seconds = $time_difference;
	$minutes = round($seconds/60);			// 60 seconds make a minute;
	$hours = round($seconds/ 3600);   		// 60*60 = 3600 no of seconds in an hour;
	$days = round($seconds/ 86400);   		// 24*60*60 = 86400 no of seconds in a day;
	$weeks = round($seconds/ 604800); 		// 7*24*60*60 = 604800 no of seconds in a week;
	$months = round($seconds/ 2629440); 	// (365+365+365+365+366)/5/12 *24*60*60 = 2629440 no of seconds in a month;
	$years = round($seconds/ 31553280);  	// (365+365+365+365+366)/5 *24*60*60 = 31553280 no of seconds in a year;

	if ($seconds<=60) {
		return "just now";
	}elseif ($minutes <= 60) {

		if ($minutes == 1) {
			return "a minute ago";
		}else{
			return "$minutes minutes ago";
		}

	}elseif ($hours<=24) {
		if ($hours == 1) {
			return "an hour ago";
		}else{
			return "$hours hrs ago";
		}
	}elseif($days<=7){
		if ($days == 1) {
			return "yesterday";
		}else{
			return "$days days ago";
		}

	}
	 elseif($weeks<=4.3){
		if ($weeks == 1) {
			return "a week ago";
		}else{
			return "$weeks weeks ago";
		}

	}
	elseif ($months<=12) {
		if ($months == 1) {
			return "a month ago";
		}else{
			return "$months months ago";
		}
	}

	else{
		if ($years==1) {
			return "one year ago";
		}else{
			return "$years years ago";
		}
	}
}

?>