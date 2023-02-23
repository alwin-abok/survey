<?php
include('./templates/head.php')
?>

<body>
    <div id="main">
        <h5 style="color:yellow">Inscrivez-vous pour continuer</h5>
        <div>
            <!-- banner form -->
            <form action="" name="submit" method="post">

                <div>
                    <label style="color:yellow">Prénom</label><br>
                    <input name="FirstName" type="text"><br>
                    <label style="color:yellow">NomNom</label><br>
                    <input name='LastName' type="text"><br>
                    <label for="" style="color:yellow">Nom d’utilisateur</label><br>
                    <input type="text" name="UserName"><br>
                    <label style="color:yellow"> Contact</label><br>
                    <input name='Contact' type="text"><br>
                    <label style="color:yellow">Messagerie électronique </label><br>
                    <input name="Email" type="email"><br>
                    <label style="color:yellow">Mot de passe</label><br>
                    <input name="Password" type="password"><br>
                    <button style="background-color:green" type="submit" name="submit"> Démarrer</button><br>
                    <span style="color:blue">En vous inscrivant, vous acceptez notre<a href="#">Termes et conditions*</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include('./templates/foot.php')
?>
<?php

include("connect.php");

$success = "You have successfully registered";
$error = "Error while registering";

$FirstName = $LastName = $UserName = $Contact = $Email = $Password = '';
$errors = array('FirstName' => '', 'LastName' => '', 'UserName' => '', 'Contact' => '', 'Email' => '', 'Password' => '');

if (isset($_POST['submit'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if (array_filter($errors)) {
        # code...
    } else {

        $FirstName = mysqli_real_escape_string($link, $_POST['FirstName']);
        $LastName = mysqli_real_escape_string($link, $_POST['LastName']);
        $UserName = mysqli_real_escape_string($link, $_POST['UserName']);
        $Contact = mysqli_real_escape_string($link, $_POST['Contact']);
        $Email = mysqli_real_escape_string($link, $_POST['Email']);
        $Password = mysqli_real_escape_string($link, $_POST['Password']);

        $sql = "INSERT INTO users(FirstName,LastName,UserName,Contact,Email,Password) VALUES ('$FirstName','$LastName','$UserName','$Contact','$Email','$Password')";
    }


    if (mysqli_query($link, $sql)) {
        echo ($success);
    } else {
        echo ($error);
    }
    header('Location: survey.php');
    mysqli_close($link);
};
?>