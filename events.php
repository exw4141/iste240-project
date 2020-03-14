<?php
    $path = './';
    $title = "Events";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fevents.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fevents.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "events";

    include $path."assets/inc/header.php";
?>

        <div id="banner-wrapper">
            <div id="events-banner">
                <h1 id="banner-title">Events</h1>
            </div>
        </div>

        <div>
            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Chicago Ducky Derby</h2>
                    <p>
                        Chicago hosts an annual Ducky Derby where they dump thousands of rubber ducks into the Chicago River 
                        that runs through the whole city. Each duck belongs to a donor who buys the duck for charity. Donors 
                        can buy multiple ducks to increase their chances of winning the race. If one of their ducks win, they 
                        will earn awesome prices. The previous Duck Derby occurred in August of 2019 where over 63,000 rubber ducks 
                        were used. If you are worried about the environment, do not fret as the ducks are picked up before they exit 
                        the river and are reused for next year's derby.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/ducky-derby2.jpg" alt="Ducky Derby 2019" title="Ducky Derby 2019" />
                    <figcaption>Ducky Derby 2019</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Lollapalooza</h2>
                    <p>
                        Every summer, Chicago hosts a music festival called Lollapalooza where many musical artists are 
                        invited to perform during its 4-day duration. Famous artists who performed this past Lollapalooza 
                        included Ariana Grande, Childish Gambino, and Twenty One Pilots. Tickets are quite expensive as general 
                        admission can cost as much as $350. Despite this, many Chicagoans believe Lollapalooza is an event you 
                        should try at least for one day.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/lollapalooza.jpg" alt="Lollapalooza" title="Lollapalooza" />
                    <figcaption>Lollapalooza</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Taste of Chicago</h2>
                    <p>
                        Taste of Chicago has been established as the world's largest food festival. It is 5 days long 
                        held during July in Grant Park. While the different kinds of food there are the center of attention, 
                        there are also live performances to accompany the atmosphere. As each community area in Chicago has developed 
                        their own culture, they are able to come together during this event to display the vast diversity the city 
                        contains.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/taste-of-chicago.png" alt="Taste of Chicago" title="Taste of Chicago" />
                    <figcaption>Taste of Chicago Gate</figcaption>
                </figure>
            </div>
        </div>

    <?php
        include $path."assets/inc/footer.php";
    ?>
