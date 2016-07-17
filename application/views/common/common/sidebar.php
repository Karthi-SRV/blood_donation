
<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">

            <a href="<?php echo base_url();
?>dashboard " class=""><img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="..." class="img-circle profile_img" style="width: 50px;margin: 10px;"> <span style="color: white;font-size: 18px;"><?php echo $this->lang->line('smart_learning'); ?></span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            
            <div class="profile_info">
              <span>Welcome</span>
              <h2>Administrator</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

         <div class="clearfix"></div>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url(); ?>users"><i class="fa fa-users"></i> Users</a>
                </li>
                <li><a href="<?php echo base_url(); ?>subjects"><i class="fa fa-book"></i> Subjects</a>
                </li>
                <li><a href="<?php echo base_url(); ?>lessons"><i class="fa fa-book"></i> Lessons</a>
                </li>
                <li><a href="<?php echo base_url(); ?>tests"><i class="fa fa-check-circle"></i> Tests</a>
                </li>
                <li><a href="<?php echo base_url(); ?>questions"><i class="fa fa-question-circle"></i> Questions</a>
                </li>
                <li><a href="<?php echo base_url(); ?>results"><i class="fa fa-graduation-cap"></i> Results</a>
                </li>
                <li><a href="<?php echo base_url(); ?>dictionary"><i class="fa fa-language"></i> Dictionary</a>
                </li>
                <li><a href="<?php echo base_url(); ?>feedback"><i class="fa fa-bullhorn"></i> Feedback</a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>