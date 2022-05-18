<?php
session_start();
include '../head.php'; 
?>
<title>About</title>
<link rel="stylesheet" type="text/css" href="about.css"/>

</head>
<body style="background-color: #000;">
<?php include '../Home/navbar.php' ?> 

    <div class="jumbotron mb-0" style="background-color: #000;">
    <a><h2>About</h2></a>
        <div class="container avatar text-center ">
             <?php

                $fh = fopen('about.txt','r');
                while ($line = fgets($fh)) {
                    echo "<p style='color:white;'>".$line."</p>";
                }
                fclose($fh);
            ?>
        </div>
    </div>
    <?php include '../end.php'; ?>

</body>
</html>