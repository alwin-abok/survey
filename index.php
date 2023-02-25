<?php
include('./templates/head.php');
?>
<body>
    <div id="main">
        <div>
            <h3 style="color:yellow">Connectez-vous ou inscrivez-vous pour répondre à notre dernier sondage sur l’IA! </h3>
        </div>
        <div>
            <select style="width:250px" style="margin-right:200px" ,color="lightgreen">
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
    </div>
</body>
<?php
include('./templates/foot.php');
?>



<?Php
include('connect.php');
error_reporting(0);
$sql = 'SELECT * from users';
if (isset($_POST['login'])) {
    $count = 0;
    $UsernName = mysqli_real_escape_string($link, $_POST['UserName']);
    $Password = mysqli_real_escape_string($link, $_POST['Password']);

    $res = mysqli_query($link, "SELECT * FROM users WHERE UserName='$_POST[UserName]' && Password ='$_POST[Password]'");
    $count = mysqli_num_rows($res);

    if ($count == 0) {
        echo 'incorrect username or password';
    } else {
        if (mysqli_query($link, $sql)) {
            header('Location: survey.php');
        }
    }
}
?>
<?php


if ($_POST['action'] = "insert") {
    insert();
}

function insert()
{
    global $link;

    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13'];
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];
    $q16 = $_POST['q16'];
    $q17 = $_POST['q17'];

    $choice1 = $_POST["choice1"];
    $comment1 = $_POST["comment1"];
    $choice2 = $_POST["choice2"];
    $comment2 = $_POST["comment2"];
    $choice3 = $_POST["choice3"];
    $comment3 = $_POST["comment3"];
    $choice4 = $_POST["choice4"];
    $choice5 = $_POST["choice5"];
    $choice6 = $_POST["choice6"];
    $choice7 = $_POST["choice7"];
    $comment7 = $_POST["comment7"];
    $choice8 = $_POST["choice8"];
    $choice9 = $_POST["choice9"];
    $choice10 = $_POST["choice10"];
    $choice11 = $_POST["choice11"];
    $choice12 = $_POST["choice12"];
    $choice13 = $_POST["choice13"];
    $choice14 = $_POST["choice14"];
    $choice15 = $_POST["choice15"];
    $comment15 = $_POST["comment15"];
    $choice16 = $_POST["choice16"];
    $comment16 = $_POST["comment16"];
    $choice17 = $_POST["choice17"];
    $comment17 = $_POST["comment17"];

    $query = "INSERT INTO survey_questions(Question_Body) VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17',)";


    $query = "INSERT INTO survey_answers (Answer_Body) VALUES ('$choice1','$comment1','$choice2','$comment2','$choice3','$comment3','$choice4','$choice5','$choice6','$choice7','$comment7','$choice8','$choice9','$choice10','$choice11','$choice12','$choice13','$choice14','$choice15','$comment15','$choice16','$comment16','$choice17','$comment17')";


    mysqli_query($link, $query);

    mysqli_close($link);
}
?>