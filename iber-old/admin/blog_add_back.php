<?php
// Include database configuration file
include("root/db.php");

if (!empty($_FILES["img1"]['tmp_name'])) {
    $temp1 = explode(".", $_FILES["img1"]["name"]);
    $newfilename1 = rand() . "_" . date('m-d-Y_hia') . '.' . end($temp1);
    move_uploaded_file($_FILES['img1']['tmp_name'], "gallery/" . $newfilename1);
    $img1 = $newfilename1;
    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $description = mysqli_real_escape_string($mysqli, $_POST['description']);
    $name = mysqli_real_escape_string($mysqli, $_POST['p_name']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $url = mysqli_real_escape_string($mysqli, $_POST['url']);

// Convert to lowercase
$url = strtolower($url);

// Replace spaces with hyphens
$url = str_replace(' ', '-', $url);

// Remove specific special characters using regular expression
$url = preg_replace('/[?!.,+=%&*()$#@^\/;:"\'{}\[\]|]/', '', $url);

// Now, $url contains the sanitized, formatted, and special-character-free URL


    $content = mysqli_real_escape_string($mysqli, $_POST['content']);
    $page_title = mysqli_real_escape_string($mysqli, $_POST['page_title']);
    $keyword = mysqli_real_escape_string($mysqli, $_POST['keyword']);
    $meta_description = mysqli_real_escape_string($mysqli, $_POST['meta_description']);

    // Check if the 'url' column is null, if so, set it to the title
    if (empty($url)) {
      $url = strtolower(str_replace(' ', '-', $title));
      

// Remove specific special characters using regular expression
$url = preg_replace('/[?!.,+=%&*()$#@^\/;:"\'{}\[\]|]/', '', $url);
    }

    $sql = "INSERT INTO blog(url, image, title, description, author, date, content, pg_tlt, keyword, meta_dcr)
            VALUES ('$url', '$img1', '$title', '$description', '$name', '$date', '$content', '$page_title', '$keyword', '$meta_description')";

    if (!mysqli_query($mysqli, $sql)) {
        die('Error: ' . mysqli_error($mysqli));
    }

    header("location:blog.php?pro=$menu");
}
?>
