


<!DOCTYPE>
<?php include( '../savegame.php' ); ?>
<html>
    <head>
        <title>Level 1</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            body
            {
                overflow: hidden;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
        	<center><img id = "image" src="level1.png" usemap="#Map" /></center>
        	<map name="Map" id="Map">
                <area shape="poly" coords="119,190,161,188,163,237,122,237" href="level2.php">
            </map>
        	<!-- <a href="level2.html" style="position: absolute; margin-left: -270px; margin-top:220px; width:30px; height: 30px;">
        	
        	</a> -->
        </div>
        <h6 style="color:white; text-align: center"><br><br>The door is closed, open it. Dont relax too much, there is no such message from next level onwards</h6>
    </body>
</html>
