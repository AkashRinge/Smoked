<?php 

    var_dump($_SESSION['user']);
    //die();
    require("common.php"); 
     
    if($_SESSION['user']==NULL) 
    { 

        header("Location: login.php"); 

        die("Redirecting to login.php"); 
    } 
     
?>
<br>Hello <?php echo $_SESSION['user']['username']?></br> 
<html>
    <head>
        <title> The real homepage</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/tidy.css">
		<link rel="stylesheet" href="css/animate.css">
        <style>
            body
            {
                overflow: hidden;
            }
            .header
            {
                padding: 0;
                margin: 10px;
                height: 100px;
                line-height: 40px;
            }
            .block
            {
                display: inline-block;
                height: 100px;
                width: 24%;
                background: -moz-radial-gradient(#030F11, #033141);
                border-radius: 5px;
                text-align: center;
                color: aliceblue;
            }
            .block a
            {
                text-decoration: none;
                font-family: sans-serif;
                font-size: 18;
                line-height: 100px;
                vertical-align: middle;
                color: inherit;
            }
            .block:hover
            {
                font-weight: bolder;
                color: coral;
                background: black;
            }
            .start
            {
                width: 100%;
                height: 100%;
                max-width: 25%;
                max-height: 07%;
                line-height: 200px;
                color: red;
                border-radius: 17px;
                vertical-align: middle;
                text-align: center;
                background-image: url('images/mist_smoked_crop.png'); /* Not aesthetically appealing but BIHARI approved :D */
                background-size: cover; 
                opacity: 0.8;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
            }

            .start:hover
            {
            	opacity: 1.0;
            }
            #starter
            {
                text-decoration: none;
                font-family:sans-serif;
                font-size: 24;
            }
            .start:hover
            {
                color: yellow;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
	    <div class = "container">
	        <div class="header">
	            <div class="block">
	                <a href = "index.html">Home</a>
	            </div>
	            <div class="block">
	                <a href = "rules.html">Rules/Hints</a>
	            </div>
	            <div class="block">
	                 <a href="endgame.php">Update progress</a>
	            </div>
	            <div class="block">
	                 <a href="logout.php">Logout</a>
	            </div>
	        </div>
	        
	        <a href="level1/level1.html" id="starter"><div class="start"></div></a>
	    
	    </div>



    </body>

</html>
<!-- <a href="memberlist.php">Memberlist</a><br /> 
<a href="edit_account.php">Edit Account</a><br /> 
<a href="logout.php">Logout</a> -->