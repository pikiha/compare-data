    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url('assets/img/logo/logo.png') ?>" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url('assets/img/logo/logo.png') ?>" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
              <?php if($this->session->userdata('level') == 1) :?>
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Landing Page" href="<?php echo base_url('back/DashboardController')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li class="nonactive">
                            <a class="has-arrow" href="index.html">
                               <span class="educate-icon educate-data-table icon-wrap"></span>
                               <span class="mini-click-non">Activity</span>
                           </a>
                           <ul class="submenu-angle" aria-expanded="true">
                            <li><a href="<?php echo base_url('admin/CreditorActivityController')?>"><span class="mini-sub-pro">Creditor</span></a></li>
                            <li><a href="<?php echo base_url('admin/DebitorActivityController')?>"><span class="mini-sub-pro">Debitor</span></a></li>
                            <li><a href="<?php echo base_url('admin/CompareController')?>"><span class="mini-sub-pro">Compare</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <?php elseif($this->session->userdata('level') == 2) :?>
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                      <li>
                        <a title="Landing Page" href="<?php echo base_url('back/DashboardController')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li class="nonactive">
                        <a class="has-arrow" href="index.html">
                           <span class="educate-icon educate-data-table icon-wrap"></span>
                           <span class="mini-click-non">Activity</span>
                       </a>
                       <ul class="submenu-angle" aria-expanded="true">
                        <li><a href="<?php echo base_url('back/ActivityController')?>"><span class="mini-sub-pro">My activity</span></a></li>
                        <li><a href="<?php echo base_url('back/CreditorActivityController')?>"><span class="mini-sub-pro">Creditors activity</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php elseif($this->session->userdata('level') == 3) :?>

            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                 <li>
                    <a title="Landing Page" href="<?php echo base_url('back/DashboardController')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                </li>
                <li>
                    <a title="Landing Page" href="<?php echo base_url('back/ActivityController')?>" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Activity</span></a>
                </li>
            </ul>
        </nav>
    <?php endif;?>
</div>
</nav>
</div>
    <!-- End Left menu area -->