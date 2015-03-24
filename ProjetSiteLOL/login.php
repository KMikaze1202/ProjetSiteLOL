<?php 
session_start();
include_once 'functions.inc.php';
dbConnect();

$Email = trim(filter_input(INPUT_POST, "email"));
$Password = trim(filter_input(INPUT_POST, "password"));
if (filter_has_var(INPUT_POST, "login")) {
    if (!empty($Email) && !empty($Password)) {
        $userId = checkIfEmailAndPwdOk($Email, sha1($Password));
        if ($userId != 0) {
            $_SESSION['UserConnect'] = TRUE;
            $_SESSION['idUserConnected'] = $userId['UserId'];
            $_SESSION['UserFirstName'] = $userId['FirstName'];
            $_SESSION['UserLastName'] = $userId['LastName'];
            $_SESSION['UserEmail'] = $Email;
            $_SESSION['IsAdmin'] = $userId['IsAdmin'];
            $_SESSION['IsModerator'] = $userId['IsModerator'];            
            header('Location: index.php');
            $_SESSION['message'] = "<div class='alert alert-success' role='alert'>Connecté</div>";
            exit();
        } else {
            $_SESSION['message'] = "<div class='alert alert-danger' role='alert'>Login ou password erroné</div>";
        }
    } else {
        $_SESSION['message'] = "<div class='alert alert-warning' role='alert'>Vous devez remplire l'email et le mot de passe</div>";
    }
}
include './header.php';
?>
<section id="ccr-main-section">
	<div class="container">
          <form enctype="multipart/form-data" method="post">
          <h2>Connexion</h2>          
            <table class="form">
              <tbody>
                <tr>
                  <td>E-Mail:</td>
                  <td><input type="email" value="<?php echo $Email ?>" name="email"></td>
                </tr>
                <tr>
                  <td>Mot de passe:</td>
                  <td><input type="password" value="" name="password"></td>
                </tr>                
              </tbody>
            </table>
              <input type="submit" value="Se connecter" name="login">
        </form>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>