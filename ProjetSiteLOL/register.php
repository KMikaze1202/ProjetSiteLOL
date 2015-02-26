<?php 
session_start();
include 'functions.inc.php';
dbConnect();

/**
 * Vérifie que les champs sont définie et les attribue à une variable
 */

$FirstName = trim(filter_input(INPUT_POST, "FirstName"));
$LastName = trim(filter_input(INPUT_POST, "LastName"));
$Email = trim(filter_input(INPUT_POST, "Email"));
$BirthDate = trim(filter_input(INPUT_POST, "BirthDate"));
$Password = trim(filter_input(INPUT_POST, "Password"));
$PasswordConf = trim(filter_input(INPUT_POST, "PasswordConf"));
$userExist = user_exist($Email);
$errorPwd = "";
$errorPwdConf = "";
$errorEmail = "";

if (filter_has_var(INPUT_POST, "register")) {
    if (!empty($FirstName) && !empty($LastName) && !empty($Email)
            && !empty($BirthDate) && !empty($Password) && !empty($PasswordConf)) {
        
        if (strlen($Password) < 8) {
                $errorPwd = "Choose a password longer then 7 character";
        }
        else if ($Password != $PasswordConf) {
                    $errorPwdConf = "Passwords are not identical";
                }
        else if (trim(!filter_input(INPUT_POST, "Email", FILTER_VALIDATE_EMAIL))) {
                    $errorEmail = "Email is not valid";
                }        
        else if ($userExist != 0){
                    $errorEmail = "Email is already use";
        }
        else {
            /**
             * Attribue les champs au tableau à inserer dans la base de donnée
             * et les ajoute à la base de de donnée en affichant un message de réussite
             */
            $auser = array();
            $auser["FirstName"] = $FirstName;
            $auser["LastName"] = $LastName;
            $auser["Email"] = $Email;
            $auser["BirthDate"] = $BirthDate;
            $auser["Password"] = sha1($Password);
            addUser($auser);
            header('Location: login.php');
            $_SESSION['message'] = "Congratulation, you are register on our website";
            $_SESSION['MessageType'] = "information";
            exit;
        }
    } else {
        $_SESSION['message'] = "Please filling all fields";
        $_SESSION['MessageType'] = "error";
        echo "salut";
    }
}

include './header.php';


?>
<section id="ccr-main-section">
	<div class="container">
          <form enctype="multipart/form-data" method="post">
          <h2>Inscription</h2>          
            <table class="form">
              <tbody>
                <tr>
                  <td>Prénom:</td>
                  <td><input name="FirstName" type="text" placeholder="Prénom" value="" required></td>
                </tr>
                <tr>
                  <td>Nom:</td>
                  <td><input name="LastName" type="text" placeholder="Nom" value="" required></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><input name="Email" type="email" placeholder="Email" value="" required></td>
                  <td><?php echo $errorEmail ?></td>
                </tr>
                <tr>
                  <td>Date de naissance:</td>
                  <td><input name="BirthDate" type="date" value="" required></td>
                </tr>
                <tr>
                  <td>Mot de passe:</td>
                  <td><input name="Password" type="password" placeholder="Mot de passe" value="" required></td>
                  <td><?php echo $errorPwd ?></td>
                </tr>
                <tr>
                  <td>Confirmation du mot de passe:</td>
                  <td><input name="PasswordConf" type="password" placeholder="Confirmation" value="" required></td>
                  <td><?php echo $errorPwdConf ?></td>
                </tr>                  
              </tbody>
            </table>
              <input type="submit" class="button" value="S'enregistrer" name="register">
        </form>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>