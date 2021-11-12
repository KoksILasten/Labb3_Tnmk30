<?php include "Menu.txt";

date_default_timezone_set('Europe/Stockholm');
$name = $_POST['username'];
$pwd = $_POST['pwd'];
$maintext = $_POST['bpost'];
$timestamp = date("Y-m-d H:i:s");
$blogfile = fopen("blog.txt", "ab");


if ($_POST["pwd"] != "123") {
    print("<p>Incorrect password, try again!</p>");
} else {

    fwrite($blogfile,   "<h3>$timestamp</h3>\n");
    fwrite($blogfile,   "<h1>$name</h1>\n");
    fwrite($blogfile,   "<p>$maintext</p>\n");
    fclose($blogfile);
}
include("blog.txt");
?>
</body>

</html>