
<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 

            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                <img src="{{ URL('/') }}/img/avatars/sunny.png" alt="me" class="online" /> 
                <span>
                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                </span>
                <i class="fa fa-angle-down"></i>
            </a> 

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li>
                <a href="{{ URL('/') }}" title="Users"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Users</span></a>
            </li>
            
             <li>
                <a href="{{ URL('/addhours') }}" title="Users"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">Add Hour</span></a>
            </li>
             <li>
                <a href="{{ URL('/report') }}" title="Report"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Report</span></a>
            </li>
        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

</aside>
<!-- END NAVIGATION -->