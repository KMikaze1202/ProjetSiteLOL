<?php 
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
                  <td><input type="email" value="" name="email"></td>
                </tr>
                <tr>
                  <td>Password:</td>
                  <td><input type="password" value="" name="pwd"></td>
                </tr>                
              </tbody>
            </table>
              <input type="submit" value="Se connecter" name="login">
        </form>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>