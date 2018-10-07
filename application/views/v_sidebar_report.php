<!-- menu profile quick info -->
<div class="profile">

</div>
<!-- /menu profile quick info -->

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3><i class="fa fa-file"></i>  Report</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bar-chart-o"></i> Operation Statistic<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('report/movingOverview')?>">Moving overview</a></li>
          <li><a href="<?php echo site_url('report/mileageReport') ?>"> Mileage report </a></li>
          <li><a href="<?php echo site_url('report/speedingDetail')?>"> Speeding details </a></li>
          <li><a href="<?php echo site_url('report/parkingDetails')?>"> Parking details </a></li>
          <li><a href="<?php echo site_url('report/engineOverview')?>"> Engine overview </a></li>
          <li><a href="<?php echo site_url('report/engineReport')?>"> Engine report </a></li>
          <li><a href="<?php echo site_url('report/engineIdleReport')?>"> Engine idle report </a></li>
          <li><a href="<?php echo site_url('report/tripReport')?>"> Trip Report </a></li>
          <li><a href="<?php echo site_url('report/speedingTripReport')?>"> Speeding trip Report </a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-check-circle-o"></i> OBD Report<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo site_url('report/drivingBehaviorOverview')?>"> Driving behavior overview </a></li>
          <li><a href="<?php echo site_url('report/drivingBehaviorReport')?>"> Driving behavior report </a></li>
          <li><a href="<?php echo site_url('report/drivingBehaviorDetails')?>"> Driving behavior details </a></li>
          <li><a href="<?php echo site_url('report/tripFuelConsumptionOverview')?>"> Trip fuel consumption overview </a></li>
          <li><a href="<?php echo site_url('report/tripFuelConsumptionDetails')?>"> Trip fuel consumption details </a></li>
          <li><a href="<?php echo site_url('report/DTCreport')?>"> DTC report </a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-comment-o"></i> Alert Report<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#"> Alert overview </a></li>
          <li><a href="#"> Alert report </a></li>
          <li><a href="#"> Alert details </a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
