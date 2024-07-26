<?php
// Input filter function
function filterInput($input)
{
    $input = trim($input); // Remove whitespace
    $input = stripslashes($input); // Remove backslashes
//    $input = htmlspecialchars($input, ENT_QUOTES); // Convert special characters to HTML entities
    return $input;
}

// Function to execute user-inputted code
function executeCode($code)
{
    $code = filterInput($code);
    $result = eval("return $code;");
    return $result;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <input type="text" name="code" id="code" value="<?= isset($_GET['code']) ? $_GET['code'] : null ?>">
    <input type="submit" value="Submit">
</form>
<?php
// Handle user input
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $result = executeCode($code);
    echo "<h1>Result:</h1>";
    echo $result;
}
?>
</body>
</html>