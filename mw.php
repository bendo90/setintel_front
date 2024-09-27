<?php
$url = $_POST["url"];
$delete = $_GET["delete"];
if($url) {
    echo "OK";
    echo "<br>";
    echo $url;

    $myfile = fopen("url.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $url);
    fclose($myfile);
}

if($delete) {
    echo "Delete OK";

    $myfile = fopen("url.txt", "w") or die("Unable to open file!");
    fwrite($myfile, "0");
    fclose($myfile);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="icon" type="image/png" href="assets/fav.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <div class="m-10">
<form method="post" action="mw.php">

    <div class="mb-6">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large input</label>
        <input type="text" name="url" id="url" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg w-full">
            GO
        </button>
    </div>

</form>


<form method="post" action="mw.php?delete=1">
        <div class="mb-6">
            <button name="delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg w-full">
                DELETE
            </button>
        </div>
    </div>
</form>
  </div>

  </body>
</html>
