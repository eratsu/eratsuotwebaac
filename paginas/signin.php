<div class="page-header">
        <h1>
          <?= $language[$_SESSION['idioma']]['menu']['signin'] ?> <small><?= $language[$_SESSION['idioma']]['page']['signin']; ?></small>
        </h1>
      </div>

<form class="form-horizontal" action="accountmanagement.php" method="post">
  <div class="form-group">
    <label for="inputAccountname" class="col-sm-2 control-label">Account Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAccountname" placeholder="Insert  your account name" name="account">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Insert your password" name="password">
    </div>
  </div>  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
      <button type="submit" class="btn btn-default">Sign Up</button>
      <button type="submit" class="btn btn-default">Account Lost?</button>
    </div>
  </div>
</form>

<!-- <blockquote>
  <p><small>If your Tibia Account is already connected to an authenticator, click on "Use Authenticator". A field will be displayed which allows you to provide your authenticator token along with your account data upon login. Otherwise, you will be asked for your authenticator token in the next step.
An authenticator is a security feature which helps to prevent any unauthorised access to your Tibia account! You can connect your account to an authenticator via your account management page.</small></p>
</blockquote> -->