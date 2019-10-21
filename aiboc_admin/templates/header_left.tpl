<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img id="profileimage" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{$username}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Appoinment Today <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="appoinment_tenant_today.php">Tenant</a></li>
                        <li><a href="appoinment_owner_today.php">Owner</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="admin_add_user.php">Add User</a></li>
                        <li><a href="admin_add_user_list.php">User List</a></li>
                        <li><a href="role_list.php">Role List</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Owner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="owner_register.php">Owner Registration</a></li>
                        <li><a href="owner_list.php">Owners List</a></li>
                        <li><a href="building_list.php">Building List</a></li>
                        <li><a href="building_list_inactive.php">Inactive Building List</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Tenant <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="tenant_list.php">Tenant List</a></li>
                        <li><a href="inactive_tenant_list.php">Inactive List</a></li>
                        <li><a href="tenant_list.php">Pending List</a></li>
                        <li><a href="tenant_enquiry_list.php">Enquiry List</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Bank <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="bank_register.php">Bank Registration</a></li>
                        <li><a href="bank_list.php">Bank Details List</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="admin_own_profile_edit.php">Edit Profile</a></li>
                        <li><a id="profileimage1">Change Profile Image</a></li>
                        <li><a href="change_password.php">Change Password</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Search <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="search.php">Search</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Terms & Conditions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="owner_terms.php">Owner terms</a></li>
                        <li><a href="search.php">Tenant terms</a></li>
                    </ul>
                </li>

                <li><a href="logout.php"><i class="fa fa-clone"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /sidebar menu -->
    </div>
</div>

