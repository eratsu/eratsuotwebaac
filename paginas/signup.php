<div class="page-header">
  <h1>
    <?= $language[$_SESSION['idioma']]['menu']['signup']; ?> <small><?= $language[$_SESSION['idioma']]['page']['signup']; ?></small>
  </h1>
</div>

<form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="inputAccountname" class="col-sm-2 control-label"><?= $language[$_SESSION['idioma']]['page']['account']; ?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAccountname" placeholder='<?= $language[$_SESSION['idioma']]['page']['account']; ?>' name="account">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label"><?= $language[$_SESSION['idioma']]['page']['password']; ?></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder='<?= $language[$_SESSION['idioma']]['page']['passwordinfo']; ?>' name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label"><?= $language[$_SESSION['idioma']]['page']['email']; ?></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder='<?= $language[$_SESSION['idioma']]['page']['emailinfo']; ?>' name="email">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">      
      <button type="submit" class="btn btn-primary" name="register"><?= $language[$_SESSION['idioma']]['button']['signup']; ?></button>     
    </div>
  </div>
</form>



<?php 

  if(isset($_POST['register'])){
      if ($database->has("accounts", [        
          "OR" => [
            "name" => $_POST['account'],
            "email" => $_POST['email']
          ]
      ]))
      {
        echo '<div class="alert alert-danger" role="alert">Opa essa conta ou email já está em uso, por favor registre outra conta ou email!</div>';
      } else { 

            $createaccount = $database->insert("accounts", [
              "name" => $_POST['account'],
              "password" => sha1($_POST['password']),
              "email" => $_POST['email'],
              "premdays" => 65535,
              "group_id" => 1

            ]);

      ?>   
      
      <div class="col-sm-12">
        <div class="alert alert-success">
            <div class="row">
                <div class="col-md-9 cta-contents">
                    <h1 class="cta-title">Welcome to Oldera!</h1>
                    <div class="cta-desc">
                        <p>Your account information:</p>
                        <p>
                          <b>Account Name:</b> <?= $_POST['account']; ?> <br />
                          <b>Password:</b> <?= $_POST['password']; ?> <br />
                          <b>E-mail:</b> <?= $_POST['email']; ?> <br />
                        </p>
                        <p>Now you can create your character by clicking on the right button.</p>
                    </div>
                </div>
                <div class="col-md-3 cta-button">
                    <a href="#" class="btn btn-lg btn-block btn-success"  style="margin-top: 40%;">Create Character</a>
                </div>
             </div>
        </div>
      </div> 

    <?php }} ?>

<!-- <blockquote>
  <p><small>If your Tibia Account is already connected to an authenticator, click on "Use Authenticator". A field will be displayed which allows you to provide your authenticator token along with your account data upon login. Otherwise, you will be asked for your authenticator token in the next step.
An authenticator is a security feature which helps to prevent any unauthorised access to your Tibia account! You can connect your account to an authenticator via your account management page.</small></p>
</blockquote> -->