<!DOCTYPE html>
<html>
<head>
    <title>PHP Form DATABASE</title>
</head>
<body>
    <h1>Student Information Form DATABASE</h1>
    <form style="border: 2px solid black; padding: 10px; width: 400px" action="process_form_lpu.php" method="post">
        <label for="database">Database:</label>
        <input type="text" id="database" name="database_name" required><br><br>

        <label for="table">Table:</label>
        <input type="text" id="table" name="table_name" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="student_name" required><br><br>

        <label for="mail">Mail:</label>
        <input type="email" id="mail" name="student_mail" required><br><br>

        <label for="marks">Marks:</label>
        <input type="number" id="marks" name="student_marks" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
