<form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>


Name:
<input type="text" name="name"/>
Age:
<input type="text" name="age"/>
E-Mail:
<input type="text" name="email"/>
<input type="submit" name="submit" value="Submit"/>

</form>

<?php
$filters=array("name" => FILTER_SANITIZE_STRING,
            "age"=>FILTER_VALIDATE_INT,
            "email"=>FILTER_VALIDATE_EMAIL
);

print_r(filter_input_array(INPUT_POST,$filters));
?>