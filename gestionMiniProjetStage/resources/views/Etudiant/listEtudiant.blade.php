
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Liste etudiant</title>
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
            <div layout-gt-xs="row" layout-xs="column" layout-align="stretch center">
                <div  layout="row" layout-align="center start">
                    <md-input-container md-no-float md-is-error="false" class="md-block flex-gt-xs flex-xs">
                        <input ng-model="code"
                               class="md-input"
                               ng-change="gridActions.filter()"
                               id="order"
                               placeholder="Search"
                               filter-by="code"
                               filter-type="text"
                               aria-invalid="false">
                    </md-input-container>
                </div>
                <div  layout="row" layout-align="start center">
                    <md-datepicker ng-model="dateFrom"
                                   flex="100"
                                   md-placeholder="From Date"
                                   is-open="dateFromOpened"
                                   ng-click="dateFromOpened = true"
                                   filter-by="placed"
                                   filter-type="dateFrom"
                                   ng-change="gridActions.filter()"></md-datepicker>
                </div>
                <div  layout="row" layout-align="start center">
                    <md-datepicker ng-model="dateTo"
                                   flex="100"
                                   md-placeholder="To Date"
                                   is-open="dateToOpened"
                                   ng-click="dateToOpened = true"
                                   filter-by="placed"
                                   filter-type="dateTo"
                                   ng-change="gridActions.filter()"></md-datepicker>
                </div>
            </div>
            <div grid-data id='test' grid-options="gridOptions" grid-actions="gridActions">
                <div layout-gt-sm="row" layout-sm="column" layout-align="center">
                    <div flex-gt-sm="25" flex-sm="100" layout="row" layout-align="start center">
                        <span>{{count($etudiants)}} element(s)</span>
                    </div>
                    <div flex-gt-sm="75" flex-xs="100">
                        <div layout-xs="column" layout="row" layout-align-xs="end end" layout-align="end center">
                            <grid-pagination max-size="5"
                                             boundary-links="true"
                                             class="pagination mdl-shadow--2dp"
                                             ng-if="paginationOptions.totalItems  > paginationOptions.itemsPerPage"
                                             total-items="paginationOptions.totalItems"
                                             ng-model="paginationOptions.currentPage"
                                             ng-change="reloadGrid()"
                                             items-per-page="paginationOptions.itemsPerPage"></grid-pagination>
                            <md-input-container flex-offset-gt-xs="5" class="items-per-page">
                                <md-select ng-init="paginationOptions.itemsPerPage = '10'" ng-model="paginationOptions.itemsPerPage" ng-change="reloadGrid()">
                                    <md-option>10</md-option>
                                    <md-option>25</md-option>
                                    <md-option>50</md-option>
                                    <md-option>75</md-option>
                                </md-select>
                            </md-input-container>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th  class="sortable mdl-data-table__cell--non-numeric">
                                <span>Nom et prénom</span>
                            </th>
                            <th   class="sortable mdl-data-table__cell--non-numeric">
                                <span>Email</span>
                            </th>
							<th colspan="2"  class="sortable mdl-data-table__cell--non-numeric">

							</th>
                        </tr>
                        </thead>
                      @foreach($etudiants as $user)
                        <tbody>
                        <tr grid-item>
                            <td class="sortable mdl-data-table__cell--non-numeric">
                               {{$user->nom}}  {{$user->prenom}}
                            </td>
                            <td  class="sortable mdl-data-table__cell--non-numeric">{{$user->Email}}</td>
							<td  class="sortable mdl-data-table__cell--non-numeric">
                            @if($user->disponible==0)
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
								  Invite
						    </button>

                            @endif
							</td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div layout-xs="column" layout="row" layout-align-xs="end end" layout-align="end center">
                    <grid-pagination max-size="5"
                                     boundary-links="true"
                                     class="pagination"
                                     ng-if="paginationOptions.totalItems  > paginationOptions.itemsPerPage"
                                     total-items="paginationOptions.totalItems"
                                     ng-model="paginationOptions.currentPage"
                                     ng-change="reloadGrid()"
                                     items-per-page="paginationOptions.itemsPerPage"></grid-pagination>
                    <md-input-container flex-offset-gt-xs="5" class="items-per-page">
                        <md-select ng-init="paginationOptions.itemsPerPage = '10'" ng-model="paginationOptions.itemsPerPage" ng-change="reloadGrid()">
                            <md-option>10</md-option>
                            <md-option>25</md-option>
                            <md-option>50</md-option>
                            <md-option>75</md-option>
                        </md-select>
                    </md-input-container>
                </div>
            </div>
        </div>
    </md-content>
</div>
@endsection
</body>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
<script src="https://angular-data-grid.github.io/dist/pagination.js"></script>
<script src="https://angular-data-grid.github.io/dist/dataGrid.js"></script>
<script src="../js/Etudiant.js"></script>
</html>

