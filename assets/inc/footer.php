        <footer>
            <?php
                echo "<div id='footer-links'>";

                if ($filename == "survey") {
                    echo "<a href='#'>Survey</a>";
                }
                else {
                    echo "<a href='survey.php'>Survey</a>";
                }

                echo " | ";

                if ($filename == "references") {
                    echo "<a href='#'>References</a>";
                }
                else {
                    echo "<a href='references.php'>References</a>";
                }

                echo "</div>";
                echo "<a class='validator' href='$html_url' target='_blank'><img src='assets/images/html.png' alt='HTML Logo' title='HTML Validator' /></a>";
                echo "<a class='validator' href='$css_url' target='_blank'><img src='assets/images/css.png' alt='CSS Logo' title='CSS Validator' /></a>";
                echo "<br />";
                echo "<span id='update-time'>Last updated: ".date("F d Y H:i:s", filemtime($filename.".php")).' UTC</span>';
            ?>
        </footer>
    </body>
</html>
