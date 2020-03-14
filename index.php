<?php
    $path = './';
    $title = "Chicago";
    $html_url = "https://validator.w3.org/nu/?doc=https%3A%2F%2Fiste240-project.herokuapp.com%2F";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "index";

    include $path."assets/inc/header.php";
?>

    <div id="banner-wrapper">
        <div id="homepage-banner">
            <h1 id="banner-title">Chicago</h1>
        </div>
    </div>

    <p id="homepage-description">
        In the American midwest stands the Windy City of Chicago. Being the third most populous 
        city in the U.S., Chicago remains as one of the most well-known American cities and 
        rightfully so. There are so many things to do and sights to see. Even beyond the 
        metropolitan area of Chicago, the community areas that surround it possess tons of 
        experiences that you can't miss!
    </p>

    <!-- Slideshow code -->
    <figure class="slide">
        <img class="slide-image" src="assets/images/chicago-sunset.jpeg" alt="Chicago Sunset" title="Chicago Sunset" />
        <figcaption class="slide-caption">Chicago Sunset</figcaption>
    </figure>

    <figure class="slide">
        <img class="slide-image" src="assets/images/marina-towers.jpeg" alt="Marina Towers" title="Marina Towers" />
        <figcaption class="slide-caption">Marina Towers</figcaption>
    </figure>

    <figure class="slide">
        <img class="slide-image" src="assets/images/aon-center-fountain.jpeg" alt="Aon Center Fountain" title="Aon Center Fountain" />
        <figcaption class="slide-caption">Aon Center Fountain</figcaption>
    </figure>

    <figure class="slide">
        <img class="slide-image" src="assets/images/wrigley-field.jpeg" alt="Wrigley Field" title="Wrigley Field" />
        <figcaption class="slide-caption">Wrigley Field</figcaption>
    </figure>

<?php
    include $path."assets/inc/footer.php";
?>
