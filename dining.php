<?php
    $path = './';
    $title = "Dining";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fdining.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fdining.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "dining";

    include $path."assets/inc/header.php";
?>

        <div id="banner-wrapper">
            <div id="dining-banner">
                <h1 id="banner-title">Dining</h1>
            </div>
        </div>

        <div>
            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Au Cheval</h2>
                    <p>
                        The West Loop area contains many of Chicago's most popular and affluent restaurants 
                        and bars. Although there are several amazing burger joints in Chicago, Au Cheval is one of the 
                        more familiar names who some consider to have the best burger in America. Their highlight 
                        cheeseburger is stacked with two 5 oz. beef patties, American cheese, onions, maple glazed bacon, 
                        a sunnyside egg and topped off with a dijon-mayo sauce and chives. On paper, it might not seem too 
                        special but the experience of tasting it says otherwise. The waiting time for a seat here can be as 
                        long as 3 hours but nevertheless, it is still worth going at least once! Additionally, you are free 
                        to hang out at a nearby bar and have a drink or two while you wait with your friends. 
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/au-cheval.jpeg" alt="Au Cheval Burger" title="Au Cheval's Burger" />
                    <figcaption>Au Cheval's Famous Burger</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Wildberry's</h2>
                    <p>
                        One of the most popular breakfast/brunch restaurants is Wildberry's. They have many different styles 
                        of various breakfast foods including egg benedicts, omelettes, skillets, and pancakes. Additional breakfast 
                        items on their menu include Belgian waffles, crepes, and French toast. If you are not in the mood for 
                        breakfast, they also have a selection of sandwiches and paninis to choose from for lunch. On the weekends, 
                        it is guaranteed that there will be a waiting list so it is highly suggested to get there when it opens. 
                        There are also two locations with one being next to Millenium Park and another in Near North Side. The latter 
                        is less popular (despite being next to a Ritz-Carlton) so go to that location if you are unable to wait!
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/wildberrys.jpg" alt="Wildberry's" title="Wildberry's" />
                    <figcaption>Wildberry's</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Crisp</h2>
                    <p>
                        A small but decently popular restaurant up in the Lake View community area is Crisp where they specialize 
                        in Korean fried chicken. Their main sauce of choice is called Seoul Sassy which is a sweet sauce that 
                        pairs very well with fried chicken. A single order of fries at Crisp holds an enormous amount of fries 
                        so it is highly suggested to come here with another person or two so you can share. If you do not want comfort 
                        food, Crisp also offers a healthier option with their Buddha Bowls which mainly consists of rice, sauteed 
                        vegetables, and a fried egg.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/crisp.jpg" alt="Crisp" title="Crisp's Fried Chicken" />
                    <figcaption>Crisp's Fried Chicken</figcaption>
                </figure>
            </div>
        </div>

    <?php
        include $path."assets/inc/footer.php";
    ?>
