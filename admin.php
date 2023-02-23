<?php
include('./templates/head.php');
include('./connect.php');
$sql = 'SELECT answer_Id,choice1 ,comment1 ,choice2,comment2 choice3 ,choice4 ,choice5,choice6 ,choice7 ,comment7 ,choice8 ,choice9,choice10 ,choice11 ,choice12 ,choice13 ,choice14,choice15 ,comment15,choice16 ,comment16 ,choice17,comment17 FROM survey_answers ';

$result = mysqli_query($link, $sql);
$survey_answers = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link)
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

    <div id="creams">
        <div class="boxes2">
            <?php foreach ($survey_answers as $answer) : ?>
                <div class="boxes">
                    <h4><?php echo htmlspecialchars($answer['Answer_Id']); ?></h4>
                    <h5><?php echo htmlspecialchars($answer['Choice1']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment1']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice2']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment2']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice3']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment3']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice4']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['choice5']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice6']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice7']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment7']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice8']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice9']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice10']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice11']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice12']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice13']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice14']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice15']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment15']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice16']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment16']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Choice17']); ?></h5>
                    <h5><?php echo htmlspecialchars($answer['Comment17']); ?></h5>
                </div>
            <?php endforeach ?>
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