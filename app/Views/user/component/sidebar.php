        <!-- Sidebar -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="asset-crud/img/profile_small.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                            <?= session()->get('username') ?>/
                                            <?php if (session()->get('level') == 1) {
                                                echo 'Admin';
                                            } else {
                                                echo 'User';
                                            } ?>
                                        </strong>
                                    </span> <span class="text-muted text-xs block"><?= session()->get('username') ?><b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="./personal">Profile</a></li>
                                <li><a href="./logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                        </div>
                    </li>

                    <li>
                        <a href="/user"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
                    </li>

                    <li>
                        <a href="/personal/<?= session()->get('id_user') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Edit Personal</span></a>
                    </li>
                    <li>
                        <a href=/chatting/<?= session()->get('id_user') ?>> <i class="fa fa-edit"></i> <span class="nav-label">Chatting</span></a>
                    </li>
                </ul>
            </div>
        </nav>