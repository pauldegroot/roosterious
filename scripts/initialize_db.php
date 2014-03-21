<?php
  require_once(dirname(__FILE__) . "/../inc/commons.inc.php");
  
  $oMysqli = getMysqli();

  echo "Creating building table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS building (id INT, name varchar(32), PRIMARY KEY (id));");
	echo "OK!\n";

	echo "Creating building part table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS buildingpart (id CHAR(1), building_id INT, name varchar(32), PRIMARY KEY (id));");
	echo "OK!\n";

	echo "Creating buildingfloor table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS buildingfloor (id CHAR(1), buildingpart_id CHAR(1), PRIMARY KEY (id, buildingpart_id));");
	echo "OK!\n";
	
	echo "Creating room table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS room (id VARCHAR(6), buildingfloor_id CHAR(1), buildingpart_id CHAR(1), fullname VARCHAR(8), PRIMARY KEY (id, buildingfloor_id, buildingpart_id));");
	echo "OK!\n";
	
	echo "Creating class table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS class (id VARCHAR(6), PRIMARY KEY (id));");
	echo "OK!\n";
	  
  echo "Creating lecturer table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS lecturer (id VARCHAR(5), name VARCHAR(64), PRIMARY KEY (id));");
	echo "OK!\n";
	
	echo "Creating activitytype table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS activitytype (id VARCHAR(128), PRIMARY KEY (id));");
	echo "OK!\n";
	
	echo "Creating activity table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS activity (id VARCHAR(128), PRIMARY KEY (id));");
	echo "OK!\n";
	
  echo "Creating lesson rooms table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS lessonrooms (lesson_id INT, room_id VARCHAR(6), PRIMARY KEY (lesson_id, room_id));");
	echo "OK!\n";
	
  echo "Creating lesson classes table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS lessonclasses (lesson_id INT, class_id VARCHAR(6), PRIMARY KEY (lesson_id, class_id));");
	echo "OK!\n";
	
	echo "Creating lessonlectures table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS lessonlecturers (lesson_id INT, lecturer_id VARCHAR(5), PRIMARY KEY (lesson_id, lecturer_id));");
	echo "OK!\n";
	
	echo "Creating lesson table...";
	$oMysqli->query("CREATE TABLE IF NOT EXISTS lesson (id INT AUTO_INCREMENT, date DATE, starttime TIME, endtime TIME, activity_id VARCHAR(128), activitytype_id VARCHAR(128), rooms VARCHAR(256), classes VARCHAR(256), lecturers VARCHAR(256), description VARCHAR(512), summary VARCHAR(512), location VARCHAR(512), PRIMARY KEY (id), CONSTRAINT uc_lessonunique UNIQUE (date, starttime, endtime, location));");
	echo "OK!\n";
?>