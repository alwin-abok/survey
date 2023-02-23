<?Php
session_start();
include('./templates/head.php');
include('connect.php');

$sql = 'SELECT * from users';
if (isset($_POST['login'])) {
    $count = 0;
    $UsernName = mysqli_real_escape_string($link, $_POST['UserName']);
    $Password = mysqli_real_escape_string($link, $_POST['Password']);

    $res = mysqli_query($link, "SELECT * FROM users WHERE UserName='$_POST[UserName]' && Password ='$_POST[Password]'");
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
        }
    }
}
?>
<?php
if (isset($_POST['answer'])) {

    $optradio = $_POST['choice'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO survey_answers(choice,comment)VALUES('$optradio','$comment')";

    $query_run = mysqli_query($link, $query);

    if ($query_run) {
        $_SESSION['status'] = 'post success';
        header('location:index.php');
    } else {
        $_SESSION['status'] = 'post success';
        header('location:index.php');
    }
}

?>

<body>
    <div>
        <h3>Connectez-vous ou inscrivez-vous pour répondre à notre dernier sondage sur l’IA! </h3>
    </div>
    <div>
        <select style="width:250px"style="margin-right=200px",color="lightgreen">
            <option selected>Sélectionner une langue</option>
            <option value="1">English</option>
            <option value="2">Francais</option>
            <option value="3">Arabe'</option>
        </select>
    </div>
    <div id="login">
        <form action="" method="post" name="login">
            <label>Nom d’utilisateur</label><br>
            <input type="text" name="UserName"><br>
            <label>Mot de passe</label><br>
            <input type="password" name="Password"><br>
            <button type="submit" name="login">s'identifier</button>

        </form>
    </div>
    <br>
    <h4>ou</h4> <br>
    <div id="signup">
        <a href="register.php"> <button type="submit">S’enregistrer</button></a>
    </div>

</body>
<?php
include('./templates/foot.php')
?>

</html>