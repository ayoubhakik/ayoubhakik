<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.1-master-a687bfc/angular-material.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-blue.min.css">
    <link href="../css/invit.css" rel="stylesheet" />
</head>
<body>
@extends('etudiant/layoutEtudiant')
@section('content')
<div class="wrapper">
<div class="container-fluid">

<!-- Begin main container -->


<div class="container-fluid grid">



<!-- begin item -->
    <div class="col-sm-6 col-lg-12 grid-item" data-groups="reward" data-name="Dinner for Two" data-status="pending">

      <div class="mycard pending">
        <!-- <div class="cost-flag">$45</div> -->

        <div class="row inforow">
        <div class="">
          <img class="img-fluid reward-img" src="{{ asset('/images/icon.jpg') }}" style="height:200px;width:200px;border-radius:100px;">
        </div>
        <div class="col-sm">
          <div class="rewardInfo">
            <div class="rewardName">Invitation de Ayoub hakik</div>
            <br>
            <div class="rewardDesc">Ayoub hakik vous invite à rejoindre son groupe.</div>
          </div>
          <div class="bottom-form">
          <form name="approveReward" action="approve-rewards.html" method="get">
            <div class="form-group row justify-content-center">
              <button type="submit" class="btn btn-secondary btn-padding">Reject</button>
              <button type="submit" class="btn btn-primary btn-padding">Approve</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>
    </div>
<!-- end item -->
   <div class="col-sm-6 col-lg-12 grid-item" data-groups="reward" data-name="Jorge Gonzalez" data-status="pending">
      <div class="mycard pending">
      <div class="row inforow">
        <div class="">
          <img class="img-fluid" src="{{ asset('/images/icon.jpg') }}" style="height:200px;width:200px;border-radius:100px;">
        </div>
        <div class="col-sm">
          <div class="rewardInfo">
            <div class="rewardName">Invitation de Asmae briouya</div>
            <br>
            <div class="rewardDesc">Asmae briouya vous invite à rejoindre son groupe.</div>
          </div>
          <div class="bottom-form">
          <form name="approveReward" action="approve-rewards.html" method="get">
            <div class="form-group row justify-content-center">
              <button type="submit" class="btn btn-secondary btn-padding">Reject</button>
              <button type="submit" class="btn btn-primary btn-padding">Approve</button>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
    </div>
<!-- end item -->



</div> <!-- end main container -->

  </div> <!-- End of container -->

</div>
@endsection

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/bootstrap-colorpicker.min.js"></script>
<script src="js/draggabilly.pkgd.min.js"></script>
<script src="https://unpkg.com/packery@2/dist/packery.pkgd.min.js"></script>
<script src="js/shuffle.min.js"></script>


<script>



// dont allow inputs more than 26 characters
// if input length is more than 13 characters, then class= valbox; if 13 or less, class=catbox


// on click icon get id of this, get value of data-row-value store in var. #user1 td :nth-child(3).innerHMTL store in var=fullName, #userFullName.val(fullName)



$(document).ready(function() {
    $('a').on('click', function() {
    var fullName = $(this).data("name-value");
    var rowValue = $(this).data("row-value");
    $('#userFullName').html(fullName);

    $("#deleteGet").on('click', function() {
        var getText = "manage-users.aspx?deleteid=" + rowValue;
        $('#deleteGet').attr('href', getText);
    });
});

});


/*
$(document).ready(function () {
    var orderDate = new Date();
var dd = orderDate.getDate();
var mm = orderDate.getMonth()+1; //January is 0!
var yyyy = orderDate.getFullYear();
if(dd<10) {
    dd = '0'+dd
}
if(mm<10) {
    mm = '0'+mm
}
orderDate = mm + '/' + dd + '/' + yyyy;
    $('#orderDate').html(orderDate)
})
*/

// $('.filter-button-group').on( 'click', 'button', function() {
//   var filterValue = $(this).attr('data-filter');
//   $grid.isotope({ filter: filterValue });
// });



// // store filter for each group
// var filters = {};

// $demo.on( 'click', '.button', function() {
//   var $this = $(this);
//   // get group key
//   var $buttonGroup = $this.parents('.button-group');
//   var filterGroup = $buttonGroup.attr('data-filter-group');
//   // set filter for group
//   filters[ filterGroup ] = $this.attr('data-filter');
//   // combine filters
//   var filterValue = concatValues( filters );
//   $grid.isotope({ filter: filterValue });
// });

// // flatten object by concatting values
// function concatValues( obj ) {
//   var value = '';
//   for ( var prop in obj ) {
//     value += obj[ prop ];
//   }
//   return value;
// }




// // Filling bar for money and raffle eligibility

// // on page load...
//     moveProgressBar();
//     // on browser resize...
//     $(window).resize(function() {
//         moveProgressBar();
//     });

//     // SIGNATURE PROGRESS
//     function moveProgressBar() {
//       console.log("moveProgressBar");
//         var getPercent = ($('.progress-wrap').data('progress-percent') / 100);
//         var getProgressWrapWidth = $('.progress-wrap').width();
//         var progressTotal = getPercent * getProgressWrapWidth;
//         var animationLength = 1500;

//         // on page load, animate percentage bar to data percentage length
//         // .stop() used to prevent animation queueing
//         $('.progress-bar').stop().animate({
//             left: progressTotal
//         }, animationLength);
//     };

// // end filling bar for money and raffle eligibility

$(document).ready(function() {

        $("label").on('click', function() {
            var currentLabel = $(this).attr('id');
            $('#'+currentLabel).toggleClass("label-selected");
        });

    });



// Remove activity feed items from feed
$(document).ready(function () {
   $('.remove-item').on('click', function() {
      var colDiv = $(this).parent();
      var rowDiv = $(colDiv).parent();
      var deleteItem = $(rowDiv).attr('id');
      console.log(deleteItem);
      $("#"+deleteItem).css('display', 'none');
   })
});


// Like function

// on click

$(document).ready(function () {
   $('.like-btn').on('click', function() {
      var thisLike = $(this).children();
      $(thisLike).toggleClass('icon-thumbs-up-alt');
   })
});



// if data-poster = data-user then blank. data-user could be on the body tag or something

// jQuery.ajax({
//        type: "POST",
//        url: url,
//        data: {
//           userID: $(this).find('.userID'),
//           commentID: $(this).find('.commentID')
//           }
//         });

// Pass the back end the rewardID


// on submit of filters, when tag.checked, toggleClass show on entries with that tag

$('#submit-filters').on('click', function () {
  if($('.unexpected-check').checked == false) {
    $('.entry').attr('data-cat').toggleClass('hidden');
  }
});


// var $draggable = $('.draggable').draggabilly({
//   // options...
// })

  var $grid = $('.grid').packery({
  itemSelector: '.grid-item'
});

// $grid.find('.grid-item').each( function( i, gridItem ) {
//   var draggie = new Draggabilly( gridItem );
//   // bind drag events to Packery
//   $grid.packery( 'bindDraggabillyEvents', draggie );
// });


// $(document).ready(function() {
//     $('.remove-user').on('click', function() {
//     var fullName = $(this).parent().attr('data-name');
//     $('#userFullName').html(fullName);

// });

// });





// search function for Manage Users page
function myFunction() {
var input = document.getElementById('rewardSearchInput');
var filter = input.value.toUpperCase();

$('.grid-item').each(function () {
  a = $(this).attr('data-name');

  if (a.toUpperCase().indexOf(filter) > -1) {
    $(this).css('display', 'inline-block');
  } else {
    $(this).css('display', 'none');
  }
});
  $grid.packery('layout'); // trigger packery re-layout
};


// filter by status function for Manage Users page
function myFilterFunction() {

$('.grid-item').each(function () {
  var optId = $('select option:selected').text().toLowerCase();

  if (optId == 'all') {
    $('.grid-item').css('display', 'inline-block');
  } else if ($(this).attr('data-status') !== optId) {
    $(this).css('display', 'none');
  } else {
    $(this).css('display', 'inline-block');
  };
});
  $grid.packery('layout'); // trigger packery re-layout
};

// get id for whatever option is selected, if id=all, do nothing, else match data-status to option id, display matching, display:none others

// filter by type function for approve rewards page
function myFilterFunction2() {

$('.grid-item').each(function () {
  var optId = $('select option:selected').text().toLowerCase();

  if (optId == 'all') {
    $('.grid-item').css('display', 'inline-block');
  } else if ($(this).attr('data-groups') !== optId) {
    $(this).css('display', 'none');
  } else {
    $(this).css('display', 'inline-block');
  };
});
  $grid.packery('layout'); // trigger packery re-layout
};


</script>
<script src="js/index.js"></script>
</html>
