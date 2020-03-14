<?php
    $path = './';
    $title = "Attractions";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fattractions.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fattractions.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "attractions";

    include $path."assets/inc/header.php";
?>

        <div id="banner-wrapper">
            <div id="attractions-banner">
                <h1 id="banner-title">Attractions</h1>
            </div>
        </div>

        <div>
            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Navy Pier</h2>
                    <p class="description">
                        A very popular attraction of Chicago is Navy Pier in the Near North Side community area. It is 
                        essentially a hybrid of restaurants, shops, exhibitions, and venues combined into one area. What stands 
                        out at Navy Pier is the many different types of food you can eat there. There is Chicago deep dish pizza 
                        at Giordano's, seafood at Bubba Gump's (for Forrest Gump fans), and several dessert shops to try out 
                        after dinner. There is the common but delicious Ben &amp; Jerry's ice cream but if you want something more 
                        exclusive to Chicago, there is FRÍO Gelato and their argentine gelato and sorbet desserts. Other interesting 
                        venues at Navy Pier include Crystal Gardens, an indoor botanical garden and Pier Park, a mini amusement park. 
                        During summers, there is a free fireworks show biweekly on Wednesdays and Saturdays.
                    </p>
                    <a class="map" href="https://www.google.com/maps/place/Navy+Pier/@41.8918673,-87.6072831,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2b4d91f12edb:0xd0acdb96b088a4dc!8m2!3d41.8918633!4d-87.6050944?hl=en&authuser=0" target="_blank">Navy Pier Map</a>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/crystal-gardens.jpeg" alt="Crystal Gardens" title="Crystal Gardens" />
                    <figcaption>Entrance to Crystal Gardens</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Millennium Park</h2>
                    <p class="description">
                        Millennium Park is considered one of Chicago's main highlights and landmarks. Located in The Loop, 
                        It holds a multitude of attractions such as the Jay Pritzker Pavilion, Cloud Gate (aka The Bean), 
                        Crown Fountain, and Lurie Garden. It also connects to the adjacent Maggie Daley Park via 
                        the BP Bridge that provides tourists with an amazing closeup of the Chicago skyline. Events 
                        are held almost daily at Millennium Park. Many different festivals, concerts, and 
                        performances occur over the year so not even Chicago locals get bored.
                    </p>
                    <a class="map" href="https://www.google.com/maps/place/Millennium+Park,+Chicago,+IL/@41.8826572,-87.6237821,16z/data=!3m1!4b1!4m5!3m4!1s0x880e2ca70b00f081:0xcbf62372ee30a12b!8m2!3d41.8827024!4d-87.6193938?hl=en&authuser=0" target="_blank">Millenium Park Map</a>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/the-bean.jpeg" alt="The Bean" title="The Bean" />
                    <figcaption>The Bean</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Lincoln Park Zoo</h2>
                    <p class="description">
                        An attraction that exists outside the metropolitan area is the Lincoln Park Zoo. It is a 
                        free admission zoo that houses plenty of species from all over the world. It has the animals that 
                        are common in most zoos such as polar bears, African penguins, and lions. However, it also holds more exotic 
                        animals such as snow monkeys, sugar gliders, and laughing kookaburras.
                    </p>
                    <a class="map" href="https://www.google.com/maps/place/Lincoln+Park+Zoo/@41.921106,-87.6356629,17z/data=!3m1!4b1!4m5!3m4!1s0x880fd36b093a9a07:0x940cc06f90294db!8m2!3d41.921102!4d-87.6334742?hl=en&authuser=0" target="_blank">Lincoln Park Zoo</a>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/zoo-giraffe.jpeg" alt="Lincoln Park Zoo Giraffe" title="African Giraffe" />
                    <figcaption>African Giraffe</figcaption>
                </figure>
            </div>
        </div>

    <?php
        include $path."assets/inc/footer.php";
    ?>
