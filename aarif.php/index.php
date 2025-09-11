c<?php
// Fetch a random dog image from Dog CEO API
$url = "https://dog.ceo/api/breeds/image/random";

// Check if data is fetched correctly
$response = @file_get_contents($url);
if ($response === FALSE) {
    $dogImage = "https://via.placeholder.com/500x300?text=Dog+Not+Found";
} else {
    $data = json_decode($response, true);
    $dogImage = $data['message'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Dog Viewer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1> Random Dog Viewer</h1>
        <p>Click the button to see a new dog!</p>
    </header>

    <main>
        <div class="dog-box">
            <img src="<?php echo $dogImage; ?>" alt="Random Dog" class="dog-img">
        </div>
        <form method="post">
            <button type="submit">Show Another Dog </button>
        </form>
    </main>

    <footer>
        <p>Created by Aarif | Powered by Dog CEO API</p>
    </footer>
</body>
</html>