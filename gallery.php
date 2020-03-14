<?php
    $path = './';
    $title = "Gallery";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fgallery.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fgallery.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "gallery";

    include $path."assets/inc/header.php";
?>

    <div id="gallery-wrapper">
        <div class="row">
            <div class="column">
                <img id="grant-park" class="gallery-image" src="assets/images/grant-park.jpeg" alt="Grant Park" title="Grant Park" onclick="openImageModal('grant-park')">
                <img id="pier-park" class="gallery-image" src="assets/images/pier-park.jpeg" alt="Pier Park" title="Pier Park" onclick="openImageModal('pier-park')">
                <img id="over-easy-cafe" class="gallery-image" src="assets/images/over-easy-cafe.jpeg" alt="Over Easy Cafe" title="Over Easy Cafe" onclick="openImageModal('over-easy-cafe')">
            </div>
            <div class="column">
                <img id="rogers-park" class="gallery-image" src="assets/images/rogers-park.jpeg" alt="Rogers Park" title="Rogers Park" onclick="openImageModal('rogers-park')">
                <img id="jay-pritzker-pavilion" class="gallery-image" src="assets/images/jay-pritzker-pavilion.jpeg" alt="Jay Pritzker Pavilion" title="Jay Pritzker Pavilion" onclick="openImageModal('jay-pritzker-pavilion')">
                <img id="buckingham-fountain" class="gallery-image" src="assets/images/buckingham-fountain.jpeg" alt="Buckingham Fountain" title="Buckingham Fountain" onclick="openImageModal('buckingham-fountain')">
            </div>
        </div>
    </div>

    <div id="modal">
        <span id="close-modal" onclick="closeImageModal()">&times;</span>
        <img id="modal-image" />
        <div id="caption"></div>
    </div>

<?php
    include $path."assets/inc/footer.php";
?>
