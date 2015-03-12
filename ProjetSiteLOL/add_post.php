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
          <h2>Ajout d'un article</h2> 
          <table class="form">
              <tbody>
                  <tr>
                      <td>Titre:</td>
                      <td><input name="Title" type="text" placeholder="Titre" value="" required></td>
                  </tr>
                  <tr>
                      <td>Vignette:</td>
                      <td><input name="Vignette" type="text" placeholder="Vignette" value="" required></td>
                  </tr>
                  <tr>
                      <td>Image:</td>
                      <td><input name="Image" type="file" placeholder="Image" value="" required></td>
                  </tr>
                  <tr>
                      <td>Abstract:</td>
                      <td><textarea name="Abstract" type="text" placeholder="Description" rows="3" cols="50" required></textarea></td>
                  </tr>
                  
                  <tr>
                      <td>Description:</td>
                      <td><textarea name="Description" type="text" placeholder="Description" rows="5" cols="50" required></textarea></td>
                  </tr>
                  <tr>
                      <td>Tags:</td>
                      <td>
                          <?php
                $keywords = get_all_keywords();
                foreach ($keywords as $keyword) {
                    ?>
                            <input type="checkbox" name="q4_lausanne" /><?php echo $keyword['Keyword']; ?><br />
                     <?php } ?>
                        </td>
              </tbody>
          </table>
              <input type="submit" class="button" value="Ajouter" name="add">
        </form>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>