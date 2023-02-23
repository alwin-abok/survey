<?php
include('./templates/head.php');
include('./connect.php');
?>

<body>
    <div id="login">
        <form action="" method="post" name="form2">
            <label>Username</label><br>
            <input type="text" name="Userame" required><br>
            <label>Password</label><br>
            <input type="password" name="Password" required><br>
            <button type="submit" name="admin">Login</button>


    </div>
    </form>

    <button type="submit" name="questions">post Survey</button>
    </form>
</body>
<?php
include('./templates/foot.php');
?>

</html>

<?php

if (isset($_POST['form2'])) {
    $count = 0;
    $Username = mysqli_real_escape_string($link, $_POST['Username']);
    $Password = mysqli_real_escape_string($link, $_POST['Password']);

    $res = mysqli_query($link, "SELECT * FROM admin_login WHERE Username='$_POST[Username]' && Password ='$_POST[Password]'");
    $count = mysqli_num_rows($res);

    if ($count == 0) {
?>
        <script>
            document.getElementById('errormsg').style.display = 'block'
        </script>
<?php
    } else {
        if (mysqli_query($link, $sql)) {

            header('Location: survey.php');
            mysqli_close($link);
        }
    }
}
?>