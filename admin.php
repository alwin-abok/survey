<?php
include('./templates/head.php');
include('./connect.php');
error_reporting(0);
$sql = 'SELECT * FROM survey_answers ';

$result = mysqli_query($link, $sql);
$survey_answers = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link)
?>

<body>
    <div id="main">
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

        <div id="creams">
            <div class="boxes2">
                <?php foreach ($survey_answers as $answer) : ?>
                    <div class="boxes">
                        <h4><?php echo $answer?> ;</h4>
                        <!-- <h5><?php echo $answer['Choice1']; ?></h5>
                        <h5><?php echo $answer['Comment1']; ?></h5>
                        <h5><?php echo $answer['Choice2']; ?></h5>
                        <h5><?php echo $answer['Comment2']; ?></h5>
                        <h5><?php echo $answer['Choice3']; ?></h5>
                        <h5><?php echo $answer['Comment3']; ?></h5>
                        <h5><?php echo $answer['Choice4']; ?></h5>
                        <h5><?php echo $answer['choice5']; ?></h5>
                        <h5><?php echo $answer['Choice6']; ?></h5>
                        <h5><?php echo $answer['Choice7']; ?></h5>
                        <h5><?php echo $answer['Comment7']; ?></h5>
                        <h5><?php echo $answer['Choice8']; ?></h5>
                        <h5><?php echo $answer['Choice9']; ?></h5>
                        <h5><?php echo $answer['Choice10']; ?></h5>
                        <h5><?php echo $answer['Choice11']; ?></h5>
                        <h5><?php echo $answer['Choice12']; ?></h5>
                        <h5><?php echo $answer['Choice13']; ?></h5>
                        <h5><?php echo $answer['Choice14']; ?></h5>
                        <h5><?php echo $answer['Choice15']; ?></h5>
                        <h5><?php echo $answer['Comment15']; ?></h5>
                        <h5><?php echo $answer['Choice16']; ?></h5>
                        <h5><?php echo $answer['Comment16']; ?></h5>
                        <h5><?php echo $answer['Choice17']; ?></h5>
                        <h5><?php echo $answer['Comment17']; ?></h5> -->
                    </div>
                <?php endforeach ?>
            </div>


        </div>
    </div>
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