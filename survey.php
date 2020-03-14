<?php
    $path = './';
    $title = "Survey";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fsurvey.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fsurvey.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "survey";

    include $path."assets/inc/header.php";
?>
        
        <!-- Survey form that will redirect to thank_you.php file after valid submission -->
        <form method="post" name="visit-form" action="process.php" onsubmit="return validate('favorite')">
            <h1 id="form-header">Please tell us about your visit</h1>
            
            Enter your name: <input class="required-field" type="text" name="name" /> <span class="required">*</span>
            <span class="required-message">This field must be filled in.</span> <br />
            <br />

            How many people were in your group? <input class="required-field" type="number" name="num-people" /> <span class="required">*</span>
            <span class="required-message">This field must be filled in.</span> <br />
            <br />

            <!-- Date field has a validation warning. -->
            When did you visit? <input class="required-field" id="visit-date" type="date" name="visit-date" /> <span class="required">*</span>
            <span class="required-message">This field must be filled in.</span> <br />
            <br />

            <div id="rating">
                Please rate Chicago, IL: <br />
                <br />
                <div id="rating-slider">0 <input type="range" min="0" max="10" list="ratings" name="rating" /> 10</div>
                <datalist id="ratings">
                    <option value="0"></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                    <option value="7"></option>
                    <option value="8"></option>
                    <option value="9"></option>
                    <option value="10"></option>
                </datalist>
            </div>
            <br />
            <br />

            <fieldset>
                <legend id="favorite-place">Favorite Place - Must select one</legend>
                <label>
                    <input type="radio" name="favorite" value="Millennium Park" />
                    Millennium Park
                </label> <br />
                <label>
                    <input type="radio" name="favorite" value="Navy Pier" />
                    Navy Pier
                </label> <br />
                <label>
                    <input type="radio" name="favorite" value="The Art Institute of Chicago" />
                    The Art Institute of Chicago
                </label> <br />
                <label>
                    <input type="radio" name="favorite" value="Willis Tower" />
                    Willis Tower
                </label> <br />
                <label>
                    <input type="radio" name="favorite" value="Lincoln Park Zoo" />
                    Lincoln Park Zoo
                </label> <br />
                <label>
                    <input type="radio" name="favorite" value="Other" />
                    Other
                </label> <br />
            </fieldset>
            <br />

            <fieldset>
                <legend id="transportation">Which of the following modes of transportation did you use during your visit?</legend>
                <label>
                    <input type="checkbox" name="transportation[]" value="Car" />
                    Car
                </label> <br />
                <label>
                    <input type="checkbox" name="transportation[]" value='CTA "L"' />
                    CTA "L"
                </label> <br />
                <label>
                    <input type="checkbox" name="transportation[]" value="CTA Bus" />
                    CTA Bus
                </label> <br />
                <label>
                    <input type="checkbox" name="transportation[]" value="Bike/Scooter" />
                    Bike/Scooter
                </label> <br />
                <label>
                    <input type="checkbox" name="transportation[]" value="Water Taxi" />
                    Water Taxi
                </label> <br />
                <label>
                    <input type="checkbox" name="transportation[]" value="Carriage" />
                    Carriage
                </label> <br />
            </fieldset>
            <br />

            <input type="submit" value="Submit" />
        </form>

    <?php
        include $path."assets/inc/footer.php";
    ?>
