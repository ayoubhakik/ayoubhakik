<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/Etudiant.css" rel="stylesheet" />
    </head>
  <body>
<div class="cont">
  <div class="form sign-in">
<form method="POST">
@csrf
    <h2>Welcome student,</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email" required/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" required/>
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="submit" class="submit ">Sign In</button>
    <label style="font-size:10px" class="popup-btn" style=" text-decoration: none;color:black">si vous etes d'ENSA SAFI et non pas encore inscrit cliquez ici</label>
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

<!--inscription-->
<div class="popups-cont">
  <div class="popups-cont__overlay"></div>
  <div class="popup">
    <div class="popup__pieces"></div>
    <div class="popup__content">
      <div class="popup__close"></div>
      <div class="row">
        <div class="col l12 m12 s12">
      <form method="GET">
            <!-- Champ prénom !-->

            <div class="input-field col s6">
            <label for="prenom">Prénom</label>
            <input class="validate" name="prenom" type="text" value="" id="prenom" placeholder="François" required>
            </div>

            <!-- Champ nom !-->

            <div class="input-field col s6">
            <label for="nom">Nom de famille</label>
            <input class="validate" type="text" value="" name="nom" id="nom" placeholder="Pignon" required text-capitalize>
            </div>

            <!-- Champ code postal !-->

            <div class="input-field col s6">
            <label for="code_postal">Code postal</label>
            <input class="validate" type="number" value="" name="code_postal" id="code_postal" placeholder="69000" minlength="5" maxlength="5" required>
            </div>

            <!-- Champ ville !-->

            <div class="input-field col s6">
            <label for="ville">Ville</label>
            <input class="validate" type="text" value="" name="ville" id="ville" minlength="3" placeholder="Lyon" required>
            </div>

            <!-- Champ date de naissance !-->
            <div class="input-field col s12">
            <label for="naissance">Date de naissance</label>
            <input type="text" class="datepicker" name="naissance" placeholder="10/02/1980" class="validate" required>
            </div>

            <!-- Champ email !-->

            <div class="input-field col s12">
            <label for="email">Email</label>
            <input class="validate" type="email" value="" name="email" id="p1" placeholder="lediner@decon.fr" required>
            <input class="validate" type='email' placeholder="lediner@decon.fr" onfocus="validateMail(document.getElementById('p1'), this);" oninput="validateMail(document.getElementById('p1'), this);" required>
            </div>

            <!-- Champ CGV !-->


            <!-- Bouton envoyer !-->

            <div class="input-field col s12">
            <button class="btn waves-effect waves-light pulse" type="submit" name="action">Valider
            <i class="material-icons right">send</i>
            </button>
            </div>

          </form>
</div>
    </div>
  </div>
</div>
<script src="../js/Etudiant.js"></script>
<script type="text/javascript">
var numOfPieces = 6 * 6;

var frag = document.createDocumentFragment();

function insertInnerPieces($el, innerPieces) {
  for (var i = 0; i < innerPieces; i++) {
    var $inner = document.createElement('div');
    $inner.classList.add('popup__piece-inner');
    $el.appendChild($inner);
  }
};

for (var i = 1; i <= numOfPieces; i++) {
  var $piece = document.createElement('div');
  $piece.classList.add('popup__piece');

  insertInnerPieces($piece, 3);
  frag.appendChild($piece);
}

document.querySelector('.popup__pieces').appendChild(frag);

var $popupsCont = document.querySelector('.popups-cont');
var $popup = document.querySelector('.popup');
var popupAT = 900;

document.querySelector('.popup-btn').addEventListener('click', function() {
  $popupsCont.classList.add('s--popup-active');
  $popup.classList.add('s--active');
});

function closeHandler() {
  $popupsCont.classList.remove('s--popup-active');
  $popup.classList.remove('s--active');
  $popup.classList.add('s--closed');

  setTimeout(function() {
    $popup.classList.remove('s--closed');
  }, popupAT);
}

document.querySelector('.popup__close').addEventListener('click', closeHandler);

document.querySelector('.popups-cont__overlay').addEventListener('click', closeHandler);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
