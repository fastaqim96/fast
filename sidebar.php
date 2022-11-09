<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="dashboard.php"><img src="images/logo.png" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo-mini.svg" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav">
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img src="images/faces/profile.png" alt="image">
          <span class="d-none d-lg-inline"><?php echo $_SESSION['name'];?></span>
        </a>
        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#">
            <i class="mdi mdi-cached mr-2 text-success"></i>
            Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">
            <i class="mdi mdi-logout mr-2 text-primary"></i>
            Signout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>

<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link d-flex">
          <div class="profile-image">
            <img src="images/faces/profile.png" alt="image"/>
            <span class="online-status online"></span>
          </div>
          <div class="profile-name">
            <p class="name">
              <?php echo $_SESSION['name'];?>
            </p>
            <p class="designation">
              <?php echo $_SESSION['designation'];?>
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Main Board</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Summary</span>
          <?php
          date_default_timezone_set("Asia/Kuala_Lumpur");
          $month=date('m'); $year=date('Y');
          $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/$month/$year%' AND status IS NULL";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $count = $query->rowCount();
          ?>
          <span class="badge badge-primary badge-pill"><?php echo $count; ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard2.php">
          <i class="icon-file menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sortings" aria-expanded="false" aria-controls="page-layouts">
          <i class="icon-air-play menu-icon"></i>
          <span class="menu-title">Sort by Month</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sortings">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/01/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count01 = $query->rowCount();
              ?>
              <a class="nav-link" href="sort-jan.php">January - <span><?php echo $count01; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/02/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count02 = $query->rowCount();
              ?>
              <a class="nav-link" href="sort-feb.php">February - <span><?php echo $count02; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/03/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count03 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-mac.php">March - <span><?php echo $count03; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/04/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count04 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-apr.php">April - <span><?php echo $count04; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/05/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count05 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-may.php">May - <span><?php echo $count05; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/06/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count06 = $query->rowCount();
              ?>
              <a class="nav-link" href="sort-jun.php">June - <span><?php echo $count06; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/07/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count07 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-july.php">July - <span><?php echo $count07; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/08/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count08 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-aug.php">August - <span><?php echo $count08; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/09/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count09 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-sept.php">September - <span><?php echo $count09; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/10/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count10 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-oct.php">October - <span><?php echo $count10; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/11/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count11 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-nov.php">November - <span><?php echo $count11; ?> </span> cases </a>
            </li>
            <li class="nav-item">
              <?php
              $sql = "SELECT * FROM policy WHERE policy.expired_date LIKE '%/12/$year%' AND status IS NULL";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $count12 = $query->rowCount();
              ?>              
              <a class="nav-link" href="sort-dec.php">December - <span><?php echo $count12; ?> </span> cases </a>
            </li>
          </ul>
        </div>
      </li>

      <!--<li class="nav-item nav-category">-->
      <!--  <span class="nav-link">clients</span>-->
      <!--</li>-->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#cleints" aria-expanded="false" aria-controls="page-layouts">
          <i class="icon-briefcase menu-icon"></i>
          <span class="menu-title">Clients</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="cleints">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="newclient.php">Add New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clients.php">Database</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Report</a>
            </li>
          </ul>
        </div>
      </li>
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="newclient.php">-->
      <!--    <i class="icon-air-play menu-icon"></i>-->
      <!--    <span class="menu-title">Add New Client</span>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="clients.php">-->
      <!--    <i class="icon-server menu-icon"></i>-->
      <!--    <span class="menu-title">Database</span>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="#">-->
      <!--    <i class="icon-bar-graph menu-icon"></i>-->
      <!--    <span class="menu-title">Reports</span>-->
      <!--    <span class="badge badge-danger">New</span>-->
      <!--  </a>-->
      <!--</li>-->
    <li class="nav-item">
    	<a class="nav-link" data-toggle="collapse" href="#policy" aria-expanded="false" aria-controls="page-layouts">
    		<i class="icon-layers menu-icon"></i>
    		<span class="menu-title">Policy</span>
    		<i class="menu-arrow"></i>
    	</a>
    	<div class="collapse" id="policy">
    		<ul class="nav flex-column sub-menu">
    			<li class="nav-item">
    				<a class="nav-link" href="newpolicy.php">Add New</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="policy.php">Database</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="#">Report</a>
    			</li>
    		</ul>
    	</div>
    </li>
      
      <li class="nav-item">
        <a class="nav-link" href="quotation.php">
          <i class="icon-briefcase menu-icon"></i>
          <span class="menu-title">Quotation</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="underwriting.php">
          <i class="icon-clipboard menu-icon"></i>
          <span class="menu-title">Underwriting</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="roadtax.php">
          <i class="icon-location menu-icon""></i>
          <span class="menu-title">Roadtax</span>
        </a>
      </li>      

      <li class="nav-item nav-category">
        <span class="nav-link">SRS Account</span>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="billpayment.php">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Bill Payment</span>
        </a>
      </li>      
      
      <?php if($_SESSION['status']==0) { ?>
        <li class="nav-item nav-category">
          <span class="nav-link">Sales Record</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/widgets.php">
            <i class="icon-server menu-icon"></i>
            <span class="menu-title">Widgets</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
            <i class="icon-box menu-icon"></i>
            <span class="menu-title">Page Layouts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="page-layouts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.php">Boxed</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.php">RTL</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.php">Horizontal Menu</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
            <i class="icon-globe menu-icon"></i>
            <span class="menu-title">Sidebar Layouts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="sidebar-layouts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.php">Compact menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.php">Icon menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.php">Sidebar Hidden</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.php">Sidebar Overlay</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.php">Sidebar Fixed</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">UI Features</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-layers menu-icon"></i>
            <span class="menu-title">Basic UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.php">Accordions</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.php">Badges</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.php">Breadcrumbs</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Dropdowns</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.php">Modals</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.php">Progress bar</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.php">Pagination</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.php">Tabs</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Typography</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.php">Tooltips</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
            <i class="icon-air-play menu-icon"></i>
            <span class="menu-title">Advanced Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-advanced">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.php">Dragula</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.php">Carousel</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.php">Clipboard</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.php">Context menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.php">Loaders</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.php">Slider</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.php">Colcade</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tour.php">Tour</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/ui-features/popups.php">
            <i class="icon-speech-bubble menu-icon"></i>
            <span class="menu-title">Popups</span>
            <span class="badge badge-info badge-pill">8</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/ui-features/notifications.php">
            <i class="icon-bell menu-icon"></i>
            <span class="menu-title">Notifications</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="icon-eye menu-icon"></i>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.php">Flag icons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.php">Font Awesome</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.php">Simple line icons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.php">Themify icons</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Form</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.php">
            <i class="icon-file menu-icon"></i>
            <span class="menu-title">Form Elements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/advanced_elements.php">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Advanced Elements</span>
            <span class="badge badge-success badge-pill">4</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/validation.php">
            <i class="icon-flag menu-icon"></i>
            <span class="menu-title">Validation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/wizard.php">
            <i class="icon-cog menu-icon"></i>
            <span class="menu-title">Wizard</span>
            <span class="badge badge-danger badge-pill">New</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/text_editor.php">
            <i class="icon-clipboard menu-icon"></i>
            <span class="menu-title">Text editors</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/code_editor.php">
            <i class="menu-icon icon-ribbon"></i>
            <span class="menu-title">Code editors</span>
          </a>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Data Representation</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="icon-bar-graph menu-icon"></i>
            <span class="menu-title">Charts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.php">ChartJs</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.php">Morris</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.php">Float</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.php">Google charts</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.php">Sparkline js</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.php">C3 charts</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.php">Chartists</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.php">JustGage</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="icon-grid-2 menu-icon"></i>
            <span class="menu-title">Tables</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.php">Basic table</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.php">Data table</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.php">Js-grid</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.php">Sortable table</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
            <i class="icon-map menu-icon"></i>
            <span class="menu-title">Maps</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="maps">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.php">Mapeal</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.php">Vector Map</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.php">Google Map</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Sample pages</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-lock menu-icon"></i>
            <span class="menu-title">Authentication</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="login-2.php"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="register-2.php"> Register 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="lock-screen.php"> Lockscreen </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="icon-help menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
            <i class="icon-location menu-icon"></i>
            <span class="menu-title">General Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="blank-page.php"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="landing-page.php"> Landing Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="timeline.php"> Timeline </a></li>
              <li class="nav-item"> <a class="nav-link" href="profile.php"> Profile </a></li>
              <li class="nav-item"> <a class="nav-link" href="faq.php"> FAQ </a></li>
              <li class="nav-item"> <a class="nav-link" href="faq-2.php"> FAQ 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="news-grid.php"> News grid </a></li>
              <li class="nav-item"> <a class="nav-link" href="search-results.php"> Search Results </a></li>
              <li class="nav-item"> <a class="nav-link" href="portfolio.php"> Portfolio </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
            <i class="icon-briefcase menu-icon"></i>
            <span class="menu-title">E-commerce</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="e-commerce">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pricing-table.php"> Pricing </a></li>
              <li class="nav-item"> <a class="nav-link" href="invoice.php"> Invoice </a></li>
              <li class="nav-item"> <a class="nav-link" href="orders.php"> Orders </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Applications</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/apps/email.php">
            <i class="icon-mail menu-icon"></i>
            <span class="menu-title">E-mail</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/apps/calendar.php">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/apps/gallery.php">
            <i class="icon-image menu-icon"></i>
            <span class="menu-title">Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/apps/todo.php">
            <i class="icon-file-add menu-icon"></i>
            <span class="menu-title">Todo</span>
          </a>
        </li>
        <li class="nav-item nav-doc">
          <a class="nav-link bg-primary" href="pages/documentation.php">
            <i class="icon-book menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </nav>