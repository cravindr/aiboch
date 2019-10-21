<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="text-decoration: none; color: white" class="navbar-brand" href="#">{$name}</a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li class="{$regbuild}"><a href="dashboard.php">Register building<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
                <li class="{$building}"><a href="owner_building_list.php">Building List<span style="font-size:16px;" class="pull-right hidden-xs showopacity  glyphicon glyphicon-list"></span></a></li>
                <li class="{$profile}"><a href="owner_profile_edit.php">Profile Edit<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
                <li class="{$pass}"><a href="owner_password_change.php">Change Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-repeat"></span></a></li>
                <li><a href="logout.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-remove-circle"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
