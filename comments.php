<?php
	$path = './';
	$title = "Comments";
    $html_url = "https://validator.w3.org/check?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fcomments.php";
    $css_url = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fiste240-project.herokuapp.com%2Fcomments.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en";
    $filename = "comments";

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);

	$conn = new mysqli($server, $username, $password, $db);

    include $path."assets/inc/header.php";
?>

    <!-- Create form to submit comment -->
    <div id="form-div">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" onsubmit="return validateFields();">
            <h1 id="form-header">Comment Blog</h1>	
            <div class='input'>
				<input type="text" id="name" class="required-field" name="name" placeholder="Name">
				<span class="required-message">This field must be filled in.</span> <br />
            </div>

            <div class='input'>
				<input type="text" id="comment" class="required-field" name="comment" placeholder="Comment">
				<span class="required-message">This field must be filled in.</span> <br />
            </div>

            <div>
                <input type="submit" class="button" value="Submit">
            </div>
        </form>
    </div>

<?php
	/**
     * Cleans user input to prevent injections and enhance site security
     * @param string $data String of user input
     * @return string String of user input that has been cleaned
     */
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

	// Send user input to DB
	if ($mysqli) {
		if (isset($_GET['name']) && isset($_GET['comment'])) {
			if($_GET['name'] != '' && $_GET['comment'] != '') {
				$stmt=$mysqli->prepare("INSERT INTO chicagoComments (name, comment) VALUES (?, ?)");
				$stmt->bind_param("ss", $name, $comment);

				$name = sanitize($_GET['name']);
				$comment = sanitize($_GET['comment']);
				$stmt->execute();
				$stmt->close();
			} //end of if to make sure data is sent using $_GET
		} //end of isset
		$sql = 'SELECT name, comment FROM chicagoComments';
		$res=$mysqli->query($sql);

		// Display comments returned from query in a HTML table
		if($res) {
			echo "<h2>Comments</h2>";
			echo "<table id='comment-table'>";
			echo "<tr>";
			echo "<th class='comment-table-header'>Name</th>";
			echo "<th class='comment-table-header'>Comment</th>";
			echo "</tr>";
			while ($row = $res->fetch_assoc()) {
				echo "<tr>";
				echo "<td class='comment-table-def'>".$row['name']."</td>";
				echo "<td class='comment-table-def'>".$row['comment']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>

<?php
    include $path . 'assets/inc/footer.php';
?>
