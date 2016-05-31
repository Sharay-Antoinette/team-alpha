<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Team Alpha To Do List</title>
<link href='https://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="style.css">
<script src="jquery.min.js"></script>
</head>
<body>

    <header>
        <img src="heroImage.png" alt="Floral Border">
    </header>

    <div id="calendar_div">
	   <?php echo getCalender(); ?>
    </div>
    
    <footer>
        <p>Designed and coded by Team Alpha</p>
        <p>&copy; 2016</p>
    </footer>

</body>
</html>
