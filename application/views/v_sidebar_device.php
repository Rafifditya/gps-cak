<!-- menu profile quick info -->
<div class="profile">
  <div class="profile_pic">
    <img src=<?php echo $sess_image;?> alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2><?php echo $sess_name; ?></h2>
  </div>
</div>
<!-- /menu profile quick info -->

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Auditor</h3>
    <ul class="nav side-menu">
      <li><a href="<?php echo site_url('home')?>"><i class="fa fa-home"></i> Home </a></li>
      <li><a><i class="fa fa-edit"></i> Audit Plan<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('audit_plan/manage_audit_plan')?>">Manage Audit Plan</a></li>
          <li><a href="<?php echo site_url('audit_plan/calendar')?>"> Calender Audit Plan</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-check-circle-o"></i> Audit Checklist<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('audit_checklist/manage_audit_checklist')?>">Manage Audit Checklist</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-file"></i> NCR<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('ncr/manage_ncr')?>">Manage NCR</a></li>
        </ul>
      </li>
      <!-- <li><a><i class="fa fa-external-link"></i> Surveillance<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php //echo site_url('surveillance/manage_surveillance')?>">Manage Surveillance</a></li>
        </ul>
      </li> -->
      <li><a><i class="fa fa-bar-chart-o"></i> Summary<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('summary/check_summary')?>">Data Evidence and List Summary</a></li>
          <li><a href="<?php echo site_url('summary/data_presentation')?>">Check Summary</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Setting <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('setting/account')?>">Account</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-comments-o"></i> Chat Noticeboard <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('setting/noticeboard')?>">Noticeboard</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
         <ul class="nav child_menu">
             <li><a href="#level1_1">Level One</a>
             <li><a>Level One<span class="fa fa-chevron-down"></span></a>
               <ul class="nav child_menu">
                 <li class="sub_menu"><a href="#level2_1">Level Two</a>
                 </li>
                 <li><a href="#level2_1">Level Two</a>
                 </li>
                 <li><a href="#level2_2">Level Two</a>
                 </li>
               </ul>
             </li>
             <li><a href="#level1_2">Level One</a>
             </li>
         </ul>
       </li>

    </ul>
  </div>
</div>
