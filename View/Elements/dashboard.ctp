<?php
/*
    This file is part of Usermangmt.
    Author: dynoworkd@gmail.com
*/
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard">Mbyte</a>
            </div>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">

                        <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php   if ($this->UserAuth->isAdmin()) { ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#promanagement"><i class="fa fa-user"></i> Profile Management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="promanagement" class="collapse">
                            <li>
                                <a href="/myprofile">My Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo "/editUser/".$this->UserAuth->getUserId();?>">Edit Profile</a>
                            </li>
                            <li >

                        <a href="/changePassword"><i class="fa fa-fw fa-dashboard"></i> Change Password</a>
                    </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#usermanagement">
                        <i class="fa fa-group"></i> User Management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="usermanagement" class="collapse">
                            <li>
                                <a href="/addUser"><i class="glyphicon-plus"></i>Add user</a>
                            </li>
                            <li>
                                <a href="/allUsers">All Users</a>
                            </li>
                             <li>
                                <a href="/addGroup">Add New Group</a>
                            </li>
                            <li>
                                <a href="/allGroups">All Groups</a>
                            </li>
                        </ul>
                    </li>
                   
                       <li>

                        <a href="/permissions"><i class="fa fa-edit"></i> Permissions</a>
                    </li>

                        
                        <li >

                        <a href="/logout"><i class="fa fa-fw fa-dashboard"></i> Log Out</a>
                    </li>
                     <?php }?>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
</nav>