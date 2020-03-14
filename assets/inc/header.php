<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php
            echo "<title>$title</title>"
        ?>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="assets/js/main.js"></script>
    </head>

    <?php
        // Run required JavaScript functions on proper pages 
        if ($filename == "main") {
            echo "<body onload='runSlideshow()'>";            
        }
        else if ($filename == "survey") {
            echo "<body onload='setMaxDate()'>";
        }
        else {
            echo "<body>";
        }
    ?>
        <header>
            <img id="flag" src="assets/images/illinois-flag.png" alt="Chicago Flag" title="Chicago's City Flag" />

            <div class="topnav" id="topnav">
                <a href="javascript:void(0);" class="icon" onclick="onHamburgerClick()">
                    <i class="fa fa-bars"></i>
                </a>
                <?php
                    if ($filename == "main") {
                        echo "<a href='#'>Home</a>";
                    }
                    else {
                        echo "<a href='main.php'>Home</a>";
                    }

                    if ($filename == "attractions") {
                        echo "<a href='#'>Attractions</a>";
                    }
                    else {
                        echo "<a href='attractions.php'>Attractions</a>";
                    }

                    if ($filename == "dining") {
                        echo "<a href='#'>Dining</a>";
                    }
                    else {
                        echo "<a href='dining.php'>Dining</a>";
                    }

                    if ($filename == "shopping") {
                        echo "<a href='#'>Shopping</a>";
                    }
                    else {
                        echo "<a href='shopping.php'>Shopping</a>";
                    }

                    if ($filename == "events") {
                        echo "<a href='#'>Events</a>";
                    }
                    else {
                        echo "<a href='events.php'>Events</a>";
                    }

                    if ($filename == "gallery") {
                        echo "<a href='#'>Gallery</a>";
                    }
                    else {
                        echo "<a href='gallery.php'>Gallery</a>";
                    }

                    if ($filename == "comments") {
                        echo "<a href='#'>Comments</a>";
                    }
                    else {
                        echo "<a href='comments.php'>Comments</a>";
                    }
                ?>
            </div>
        </header>
