
<div class="sidebar" data-color="black" data-image="{{ asset('img/sidebar-5.jpg') }}">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ENSA SAFI
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ Request::path() === 'departement/' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/home') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/user' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/user') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/table' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/table') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/typography' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/typography') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() === 'departement/notifications' ? 'current_page_item' : '' }}">
                        <a class="nav-link" href="{{ asset('departement/notifications') }}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
</div>

