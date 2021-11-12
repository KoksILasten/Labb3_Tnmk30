<?php include "Menu.txt"; ?>

<div id="nform">
  <form method="POST" action=Submit.php>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" size="50"><br>

    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" size="50"><br>

    <label for="bpost">Blog post:</label><br>
    <textarea name="bpost" rows="20" cols="100"></textarea><br>

    <input type="submit" value="Submit">
  </form>
</div>


</body>

</html>