<?php
session_start();
if (!isset($_SESSION['onlyone'])) {
    header("Location:psearch.php");
};
if (!isset($_SESSION['onlytwo'])) {
    header("Location:psearch.php");
};
if (!isset($_SESSION["plogin"])) {
    header("Location:plogin.php?error=pnotloggedin");
};
unset($_SESSION['onlytwo']);
echo "<h2>Student found, but no grades!</h2>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Update Professor</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Assign grades:</h2>
            <form method="post" action="pupdateindex.php">
            <input type="number" name="subjectone" placeholder="Subject One" max="10" min="0" required>
            <input type="number" name="subjecttwo" placeholder="Subject Two" max="10" min="0" required>
            <input type="number" name="subjectthree" placeholder="Subject Three" max="10" min="0" required>
            <input type="number" name="subjectfour" placeholder="Subject Four" max="10" min="0" required>
            <input type="submit" value="Assign" name="submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php echo '<h2><a href="plogout.php">Log out</a> or <a href="Start.php">Switch</a></h2>'; ?>