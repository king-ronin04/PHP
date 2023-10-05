<html>

<body>
    <h2>Global Example </h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_REQUEST['username'];
        echo "<p>Username Submitted: $username</p>";
    }
    ?>

</body>

</html>