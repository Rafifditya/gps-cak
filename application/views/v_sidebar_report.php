<!-- menu profile quick info -->
<div class="profile">

</div>
<!-- /menu profile quick info -->

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bar-chart-o"></i> Operation Statistic<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('Report/movingOverview')?>">Moving overview</a></li>
          <li><a href="<?php echo site_url('Report/mileageReport') ?>"> Mileage Report </a></li>
          <li><a href="<?php echo site_url('Report/speedingDetail')?>"> Speeding details </a></li>
          <li><a href="<?php echo site_url('Report/parkingDetails')?>"> Parking details </a></li>
          <li><a href="<?php echo site_url('Report/engineOverview')?>"> Engine overview </a></li>
          <li><a href="<?php echo site_url('Report/engineReport')?>"> Engine Report </a></li>
          <li><a href="<?php echo site_url('Report/engineIdleReport')?>"> Engine idle Report </a></li>
          <li><a href="<?php echo site_url('Report/tripReport')?>"> Trip Report </a></li>
          <li><a href="<?php echo site_url('Report/speedingTripReport')?>"> Speeding trip Report </a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-check-circle-o"></i> OBD Report<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('Report/drivingBehaviorOverview')?>"> Driving behavior overview </a></li>
          <li><a href="<?php echo site_url('Report/drivingBehaviorReport')?>"> Driving behavior Report </a></li>
          <li><a href="<?php echo site_url('Report/drivingBehaviorDetails')?>"> Driving behavior details </a></li>
          <li><a href="<?php echo site_url('Report/tripFuelConsumptionOverview')?>"> Trip fuel consumption overview </a></li>
          <li><a href="<?php echo site_url('Report/tripFuelConsumptionDetails')?>"> Trip fuel consumption details </a></li>
          <li><a href="<?php echo site_url('Report/dtcReport')?>"> DTC Report </a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-comment-o"></i> Alert Report<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('Report/alertOverview')?>"> Alert overview </a></li>
          <li><a href="<?php echo site_url('Report/alertReport')?>"> Alert Report </a></li>
          <li><a href="<?php echo site_url('Report/alertDetails')?>"> Alert details </a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
