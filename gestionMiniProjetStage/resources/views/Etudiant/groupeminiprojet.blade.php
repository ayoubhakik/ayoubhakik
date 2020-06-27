<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Espace groupe</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.1-master-a687bfc/angular-material.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-blue.min.css">
    <link href="../css/list.css" rel="stylesheet" />

</head>
<body>


@extends('etudiant/layoutEtudiant')
@section('content')
<div layout="column" layout-fill style="margin-left:40px;">
    <md-content layout-padding layout="row" layout-align="center">
        <div flex-gt-md="30" flex-md="30" flex-xs="30">

            <hr>
                <div>
                    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th  class="sortable mdl-data-table__cell--non-numeric">
                                <span>membre 1</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>membre 2</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>Encadrant de stage</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>Encadrant universitaire</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>sujet</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>note</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>Appréciation</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>Appréciation de stage</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr grid-item>
                            <td class="sortable mdl-data-table__cell--non-numeric">
                               Briouya hasnae
                            </td>
                            <td  class="sortable mdl-data-table__cell--non-numeric"></td>
							<td  class="sortable mdl-data-table__cell--non-numeric">
                                M.elouafi hicham
                            </td>
                            <td class="sortable mdl-data-table__cell--non-numeric">
                            M.echchadi said
                            </td>
                            <td class="sortable mdl-data-table__cell--non-numeric">
                            Gestion de stage
                            </td>
                            <td class="sortable mdl-data-table__cell--non-numeric">
                               17
                           </td>
                           <td class="sortable mdl-data-table__cell--non-numeric">
                           très bon travail
                           </td>
                          <td class="sortable mdl-data-table__cell--non-numeric">
                              Ambétieuse ,travailleuse
                           </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div id="content" class="m2">

                    <header id="header" class=" pink darken-1">
                        Envoyer email à encadrant
                    </header>

                    <form id="send-mail" action="" class="col s10 offset-s1">
                        <div class="row">
                                <div class="input-field col s12">
                                    <div></div>
                                    <input id="subject" type="file">
                                </div>
                        </div>

                        <div class="row">
                                <div class="input-field col s12">
                                    <label for="message">Message: </label>
                                    <textarea id="message" class="materialize-textarea"></textarea>
                                </div>
                        </div>

                        <div class="row" id="loaders">
                                <img id="spinner" src="https://www.dropbox.com/s/wfsji06m6jfe0yl/spinner.gif?raw=1" width="150">
                        </div>

                        <div class="row">
                                <div class="col s6">
                                    <button id="send" class="btn waves-effect waves-light  pink darken-2" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                    </button>
                                </div>
                                <div class="col s6">
                                    <button id="resetBtn" class="btn waves-effect waves-light light-blue darken-2" type="submit">Reset
                                            <i class="material-icons right">delete</i>
                                    </button>
                                </div>
                        </div>
                    </form>

                </div> <!--.contenido-->
            </div>
        </div>
    </div>

                </div>
    </md-content>
</div>

</body>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
<script src="https://angular-data-grid.github.io/dist/pagination.js"></script>
<script src="https://angular-data-grid.github.io/dist/dataGrid.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/Etudiant.js"></script>

<script type="text/javascript">
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const sendBtn = document.getElementById('send');
const form = document.getElementById('send-mail');
const resetBtn = document.getElementById('resetBtn');

//////////////////////////Event Listeners///////////////////////////

(function eventListeners(){

    //Beginning of the application and disables the button.
    document.addEventListener('DOMContentLoaded', startApp);

    //Form camps
    email.addEventListener('blur', validateData);
    subject.addEventListener('blur', validateData);
    message.addEventListener('blur', validateData);

    //Submit button or submit action.
    sendBtn.addEventListener('click', sendEmail);
    //send.addEventListener('submit', sendEmail);

    //Reset button or submit action.
    resetBtn.addEventListener('click', resetForm);

})();


///////////////////////Function////////////////////////////////////////

function startApp(){

    // disables the send.
    sendBtn.disabled = true;
}

//Checks if something is written.

function validateData(){

    //Validates the text.
    validateLength(this);

    //Validates the email
    if(this.type == 'email'){

      validateEmail(this);
    }

    let errors = document.querySelectorAll('.error');

    if(email.value !== '' && subject.value !== '' && message.value!==''){
        if(errors.length === 0){
            sendBtn.disabled = false;
        }
    }else{
        sendBtn.disabled = true;
    }

    }

    //When reset button is clicked.
    function resetForm(e){
        e.preventDefault();
        form.reset();
    }

    //When send button is clicked.

    function sendEmail(e){
     e.preventDefault();
     const spinnerGif = document.querySelector('#spinner');
     spinnerGif.style.display = 'block';

     const sent = document.createElement('img');
     sent.src = 'https://www.dropbox.com/s/0g5h91zyozcbenc/mail.gif?raw=1';
     sent.style.display = 'block';
      var link = `mailto:${email.value}&subject=${escape(subject.value)}&body=${escape(message.value)}`;

     // timer for the spinner and mail.
     setTimeout(function(){
       spinnerGif.style.display = 'none';
       document.querySelector('#loaders').appendChild(sent);
       setTimeout(function(){
          sent.remove();
          form.reset();
          sendBtn.disabled = true;
          window.location.href = link;
       },1500);
     },3000);
    }

    //Check the lenght in the form inputs.
    function  validateLength(campo){

        if(campo.value.length > 0){
            campo.style.borderBottomColor = 'green';
            campo.classList.remove('error');
        }else{
            campo.style.borderBottomColor = 'red';
            campo.classList.add('error');
        }

    }

    function validateEmail(campo){
        const message = campo.value;
        if(message.indexOf('@') !==-1){
            campo.style.borderBottomColor = 'green';
            campo.classList.remove('error');
        }else{
            campo.style.borderBottomColor = 'red';
            campo.classList.add('error');
        }
    }
</script>
</body>
