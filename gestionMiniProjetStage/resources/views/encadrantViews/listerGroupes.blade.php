@extends('encadrantViews/layouts/layout')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h1 class="display-4 sansserif" >Liste des Groupes</h1>
        </div>
        <div class="row">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; text-align: center">
            <p class="text-muted" style="font-family:Century gothic">Cick on the ID to access the group, or on its members to show them</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Responsible</th>
                        <th scope="col">Group members</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Due date</th>
                    </tr>
                </thead>


                <!-- dummydata for the view-->
                <tbody style="color : #192965;">
                    <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Ayoub HAKIK</td>
                        <td>
                            <!-- Button trigger modal -->
                            <a type="button" style="color:dodgerblue" data-toggle="modal" data-target="#exampleModalCenter">
                                Show Members
                            </a>
                        </td>
                        <td>Something</td>
                        <td>GI</td>
                        <td>14/10/2016</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Group members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul>
              <li>Asmae BRIOUYA</li>
              <li>Hasnae BRIOUYA</li>
              <li>Mouad SIFANE</li>
              <li>Rachid RL ADNANI</li>
            </ul>
      </div>

    </div>
  </div>
</div>


@endsection
