function onHamburgerClick() {
    var nav = document.getElementById("topnav");
    if (nav.className === "topnav") {
        nav.className += " responsive";
    }
    else {
        nav.className = "topnav";
    }
}

/**
 * Set the latest date a user can select
 */
function setMaxDate() {
    var today = new Date();
    var day = today.getDate() - 1;
    var month = today.getMonth() + 1;
    var year = today.getFullYear();

    if (day < 10) {
        day = '0' + day;
    }
    if (month < 10) {
        month = '0' + month;
    }

    today = year + '-' + month + '-' + day;
    document.getElementById('visit-date').setAttribute('max', today);
}

/**
 * Validates required text fields and radio buttons and does not allow the form to be sent if a field 
 * is not valid
 * @param {String} radioButtonName name of the radio button group
 */
function validate(radioButtonName) {
    var validFields = validateFields();
    var validRadioButtons = validateRadioButtons(radioButtonName);

    if (validFields === false || validRadioButtons === false) {
        return false;
    }
    return true;
}

/**
 * Validates form text and date input fields
 */
function validateFields() {
    var inputs = document.getElementsByClassName('required-field');
    var errorMessages = document.getElementsByClassName('required-message');

    var field;
    var errorMessage;
    var numInvalidFields = 0;
    for (var i = 0; i < inputs.length; i++) {
        field = inputs[i];
        errorMessage = errorMessages[i];

        if (field.value === "") {
            field.style.border = "2px solid red";
            errorMessage.style.display = "inline";

            numInvalidFields++;
        }
        else {
            field.style.border = "";
            errorMessage.style.display = "none";
        }
    }

    if (numInvalidFields > 0) {
        return false;
    }
    return true;
}

/**
 * Validates radio button group
 * @param {String} name name of the radio button group to validate
 */
function validateRadioButtons(name) {
    var favoriteButtons = document.getElementsByName(name);
    var favoritePlaceText = document.getElementById('favorite-place');

    for (var i = 0; i < favoriteButtons.length; i++) {
        if (favoriteButtons[i].checked) {
            favoritePlaceText.style.color = ""
            return true;
        }
    }
    favoritePlaceText.style.color = "red";
    return false;
}

/**
 * Opens a modal in the Gallery page which will zoom in on the photo clicked
 * @param {String} imageId id attribute of the image clicked on
 */
function openImageModal(imageId) {
    const modal = document.getElementById("modal");
    const image = document.getElementById(imageId);
    const modalImage = document.getElementById("modal-image");
    const caption = document.getElementById("caption");

    modal.style.display = "block";
    modalImage.src = image.src;
    caption.innerHTML = image.alt;
}

function closeImageModal() {
    const modal = document.getElementById("modal");
    modal.style.display = "none";
}

var slideIndex = 0;
function runSlideshow() {
    var i;
    var slides = document.getElementsByClassName("slide");
    console.log(slides);
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    console.log(slides[slideIndex - 1]);
    slides[slideIndex - 1].style.display = "block";
    setTimeout(runSlideshow, 3000);
}
