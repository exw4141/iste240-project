<?php
    $path = './';
    $title = "Shopping";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fshopping.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fshopping.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "shopping";

    include $path."assets/inc/header.php";
?>

        <div id="banner-wrapper">
            <div id="shopping-banner">
                <h1 id="banner-title">Shopping</h1>
            </div>
        </div>

        <div>
            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Magnificent Mile</h2>
                    <p>
                        The main shopping hub of Chicago stretches along Michigan Avenue and is commonly known as "The 
                        Magnificent Mile" It contains many shopping malls that carry a plethora of mainstream stores. There is 
                        the 900 North Michigan Shops which holds stores such as Gucci, J. Crew, Michael Kors, and lululemon. The Water 
                        Tower Place is another shopping mall that has Macy's, LaCoste, Sephora, and much more. Bloomingdale's and Nordstrom 
                        are two more department stores that can be found on the Magnificent Mile.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/900-michigan-building.jpg" alt="900 North Michigan Shops" title="900 North Michigan Shops" />
                    <figcaption>900 North Michigan Shops Building</figcaption>
                </figure>
            </div>

            <div class="whole-entry">
                <div class="description-wrapper">
                    <h2>Eataly</h2>
                    <p>
                        Many U.S. cities have a district devoted to Italian culture named "Little Italy" Now imagine that being centralized 
                        into a single multi-story building. This is essentially Eataly. It is an Italian marketplace where visitors 
                        can buy many Italian ingredients, food, and drinks. There are also many Italian restaurants to wine and dine at such as 
                        La Pizza &amp; La Pasta. The marketplace also has a vast selection of wine and spirits to choose from. Their drinks cover a wide 
                        range of prices so customers are able to purchase drinks that fit their budget no how much it may be.
                    </p>
                </div>

                <figure class="description-figure">
                    <img class="description-img" src="assets/images/eataly.jpg" alt="Eataly" title="Eataly" />
                    <figcaption>Eataly</figcaption>
                </figure>
            </div>
        </div>

    <?php
        include $path."assets/inc/footer.php";
    ?>
