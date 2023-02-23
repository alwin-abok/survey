
<?php
$link = mysqli_connect('localhost', 'nijji', '', 'survey2023');

if (!$link) {
    echo 'connection error' . mysqli_connect_error();
}
?>