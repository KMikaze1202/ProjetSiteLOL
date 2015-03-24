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
    if (!empty($FirstName) && !empty($LastName) && !empty($Email) && !empty($_FILES["Avatar"]["name"])
            && !empty($BirthDate) && !empty($Password) && !empty($PasswordConf)) {
        
        if (strlen($Password) < 8) {
                $errorPwd = "<div class='alert alert-warning' role='alert'>Votre mot de passe doit contenir plus de 7 caractères</div>";
        }
        else if ($Password != $PasswordConf) {
                    $errorPwdConf = "<div class='alert alert-warning' role='alert'>Les mots de passe ne sont pas identiques</div>";
                }
        else if (trim(!filter_input(INPUT_POST, "Email", FILTER_VALIDATE_EMAIL))) {
                    $errorEmail = 
                            "<div class='alert alert-danger' role='alert'>
                            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                            <span class='sr-only'>Error:</span>
                            Entrer un email valide
                            </div>";
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
            $auser['Avatar'] = 'img/'.$_FILES["Avatar"]["name"];
            $auser["BirthDate"] = $BirthDate;
            $auser["Password"] = sha1($Password);
            addUser($auser);
            add_picture();
            header('Location: login.php');
            $_SESSION['message'] = "Congratulation, you are register on our website";
            $_SESSION['MessageType'] = "information";
            exit;
        }
    } else {
        $_SESSION['message'] = "Please filling all fields";
        $_SESSION['MessageType'] = "error";
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
                  <td><input name="FirstName" type="text" placeholder="Prénom" value="<?php echo $FirstName ?>" required></td>
                </tr>
                <tr>
                  <td>Nom:</td>
                  <td><input name="LastName" type="text" placeholder="Nom" value="<?php echo $LastName ?>" required></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><input name="Email" type="email" placeholder="Email" value="<?php echo $Email ?>" required></td>
                  <td><?php echo $errorEmail ?></td>
                </tr>
                <tr>
                  <td>Avatar:</td>
                  <td><input name="Avatar" type="file" placeholder="Avatar" value="" required></td>
                </tr>
                <tr>
                  <td>Date de naissance:</td>
                  <td><input name="BirthDate" type="date" value="<?php echo $BirthDate ?>" required></td>
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