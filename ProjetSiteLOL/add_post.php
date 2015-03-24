<?php 
session_start();
include 'functions.inc.php';
dbConnect();

/**
 * Vérifie que les champs sont définie et les attribue à une variable
 */

$Titre = trim(filter_input(INPUT_POST, "Tite"));
$Vignette = trim(filter_input(INPUT_POST, "Vignette"));
$Abstract = trim(filter_input(INPUT_POST, "Abstract"));
$Description = trim(filter_input(INPUT_POST, "Description"));
$Tags = trim(filter_input(INPUT_POST, "Tags"));


if (filter_has_var(INPUT_POST, "add")) {
    if (!empty($Titre) && !empty($Vignette) && !empty($Abstract) && !empty($_FILES["Image"]["name"])
            && !empty($Description) && !empty($Tags)) {
            /**
             * Attribue les champs au tableau à inserer dans la base de donnée
             * et les ajoute à la base de de donnée en affichant un message de réussite
             */
            $aarticle = array();
            $aarticle["Titre"] = $Titre;
            $aarticle["Vignette"] = $Vignette;
            $aarticle["Abstact"] = $Abstract;
            $aarticle['Image'] = 'img/'.$_FILES["Avatar"]["name"];
            $aarticle["Desription"] = $Description;
            $aarticle["Tags"] = $Tags;
            addUser($auser);
            add_picture();
            header('Location: login.php');
            $_SESSION['message'] = "Congratulation, you are register on our website";
            $_SESSION['MessageType'] = "information";
            exit;
        }
    else {
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
                          <input type="radio" name="Tags" value="<?php echo $keyword['Keyword']; ?>"/><?php echo $keyword['Keyword']; ?><br />
                     <?php } ?>
                        </td>
              </tbody>
          </table>
              <input type="submit" class="button" value="Ajouter" name="add">
        </form>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>