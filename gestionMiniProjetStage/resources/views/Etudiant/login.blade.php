<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/Etudiant.css" rel="stylesheet" />
    </head>
  <body>
<div class="cont">
  <div class="form sign-in">
<form method="post">
@csrf
    <h2>Welcome student,</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email"/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="submit" class="submit">Sign In</button>
  </div>
</form>

  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Teacher?</h2>
        <p>If you're a teacher, just sign in!</p>
      </div>
      <div class="img__text m--in">
        <h2>Student?</h2>
        <p>If you're a student, just sign in!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign In as teacher</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>

    <div class="form sign-up">
    <form action="">
      <h2>Welcome teacher,</h2>
      <label>
        <span>Username</span>
        <input type="text" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" />
      </label>
      <button type="button" class="submit">Sign In</button>
</form>
    </div>

  </div>
</div>
<script src="../js/Etudiant.js"></script>
