
<div class="sidebar" data-color="black" data-image="{{ asset('img/sidebar-5.jpg') }}"style="background:black;width:300px;" >

            <div class="sidebar-wrapper" style="background:black;width:300px;font-size:12px;" data-image="{{ asset('img/sidebar-5.jpg') }}">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ENSA SAFI
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ Request::path() === 'departement/' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/home') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/user' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/user') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ asset('departement/etudiant/import') }}">
                            <i class="nc-icon nc-single-copy-04"></i>
                             Etudiants
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ asset('departement/enseignant/import') }}">
                            <i class="nc-icon nc-align-left-2"></i>
                             Enseignants
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="nc-icon nc-badge"></i>
                             Encadrents MiniProjet
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ asset('departement/encadrentsMiniProjet/list') }}">                                        
                                <i class="nc-icon nc-single-02"></i>
                                Lister les Encadrents
                            </a>
                            <a class="dropdown-item" href="{{ asset('departement/encadrentsMiniProjet/statistique') }}">
                                <i class="nc-icon nc-chart-bar-32"></i>
                                Statistiques
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="nc-icon nc-grid-45"></i>
                             Groupes
                        </a>
                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="{{ asset('departement/groupes/listGroupes') }}">                                        
                                <i class="nc-icon nc-single-02"></i>
                                Lister les Groupes
                            </a>
                            <a class="dropdown-item" href="{{ asset('departement/groupes/listChef') }}">
                                <i class="nc-icon nc-circle-09"></i>
                                lister les chef des projets
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="nc-icon nc-badge"></i>
                             Encadrents de Stage
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ asset('departement/encadrentsStage/list') }}">                                        
                                <i class="nc-icon nc-single-02"></i>
                                Lister les Encadrents
                            </a>
                            <a class="dropdown-item" href="{{ asset('departement/encadrentsStage/statistique') }}">
                                <i class="nc-icon nc-chart-bar-32"></i>
                                Statistiques
                            </a>
                        </div>
                    </li>
                    
                    <li class="{{ Request::path() === 'departement/notifications' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/notifications') }}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/table' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/documentation') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>La Documentation</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" >
                            <i class="nc-icon nc-attach-87"></i>
                              Rapports
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ asset('departement/rapports/rapportsMiniProjet') }}">                                        
                                <i class="nc-icon nc-layers-3"></i>
                                Rapport de Mini-Projet
                            </a>
                            <a class="dropdown-item" href="{{ asset('departement/rapports/rapportsStage') }}">
                                <i class="nc-icon nc-layers-3"></i>
                                Rapport de Stage
                            </a>
                        </div>
                    </li>
                    <li class="{{ Request::path() === 'departement/user' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/Setting') }}">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
</div>

