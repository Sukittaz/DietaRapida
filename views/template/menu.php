<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo BASE; ?>components/custom/img/favicon.png" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bem-Vindo,</span>
        <h2>Willian</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>"><i class="fa fa-dashboard"></i><?php $this->lang->get("DASHBOARD"); ?></a>
            </li>                  
          </ul>            
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>upload"><i class="fa fa-cloud-upload"></i><?php $this->lang->get("SENDARCHIVE"); ?></a>
            </li>                  
          </ul>                            
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>user"><i class="fa fa-user"></i><?php $this->lang->get("PATIENT"); ?></a>
            </li>                  
          </ul>            
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>food"><i class="fa fa-cutlery"></i><?php $this->lang->get("FOODS"); ?></a>
            </li>                  
          </ul>          
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>meal"><i class="fa fa-heartbeat"></i><?php $this->lang->get("MEAL"); ?></a>
            </li>                  
          </ul>         
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>diet"><i class="fa fa-heart"></i><?php $this->lang->get("DIET"); ?></a>
            </li>                  
          </ul>         
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>amount"><i class="fa fa-sliders"></i><?php $this->lang->get("TYPEAMO"); ?></a>
            </li>                  
          </ul>        
          <ul class="nav side-menu">
            <li><a href="<?php echo BASE; ?>objective"><i class="fa fa-bullseye"></i><?php $this->lang->get("OBJECTIVES"); ?></a>
            </li>                  
          </ul>                                                                                       
      </div>
    </div>
    <!-- /sidebar menu -->
  </div>
</div>
<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>     
      <ul class="nav navbar-nav navbar-right">      
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo BASE; ?>components/custom/img/favicon.png" alt="">Willian
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo BASE; ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Linguagem
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo BASE; ?>lang/set/pt-br">Português</a></li>
            <li><a href="<?php echo BASE; ?>lang/set/en">Inglês</a></li>
          </ul>
        </li>          
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
