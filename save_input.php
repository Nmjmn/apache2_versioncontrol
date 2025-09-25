?php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the user input
    $user_input = htmlspecialchars($_POST['user_input']);

    // Define the path to the file
    $file_path = 'sisendid.txt';

    // Open the file in append mode ('a')
    // This creates the file if it doesn't exist
    $file_handle = fopen($file_path, 'a');

    // Write the input to the file, followed by a new line
    fwrite($file_handle, $user_input . "\n");

    // Close the file handle
    fclose($file_handle);

    // Provide user feedback
    echo "Sisend on salvestatud.";
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Sisendi salvestamine</title>
</head>
<body>

    <h1>Salvesta sisend</h1>

    <form method="POST" action="">
        <label for="user_input">Sisesta tekst:</label><br>
        <textarea id="user_input" name="user_input" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Salvesta">
    </form>

</body>
</html>
