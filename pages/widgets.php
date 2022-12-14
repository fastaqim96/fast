<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pearl UI</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body class="sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <?php include ("topheader.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Schedule meeting for next week
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Project review
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
            <!-- chat tab ends -->
          </div>
        </div>
      <!-- partial -->
      <!-- partial:../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
              <div class="profile-image">
                <img src="../images/faces/face1.jpg" alt="image"/>
                <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
              </div>
              <div class="profile-name">
                <p class="name">
                  Daniel Russiel
                </p>
                <p class="designation">
                  Senior Architect
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Main</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <span class="badge badge-primary badge-pill">1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.php">
              <i class="icon-server menu-icon"></i>
              <span class="menu-title">Widgets</span>
              <span class="badge badge-danger">New</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Layouts</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Page Layouts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="layout/boxed-layout.php">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/rtl-layout.php">RTL</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/horizontal-menu.php">Horizontal Menu</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="layout/compact-menu.php">Compact menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-collapsed.php">Icon menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden.php">Sidebar Hidden</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden-overlay.php">Sidebar Overlay</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-fixed.php">Sidebar Fixed</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/accordions.php">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/buttons.php">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/badges.php">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/breadcrumbs.php">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/modals.php">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/progress.php">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/pagination.php">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tabs.php">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/typography.php">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tooltips.php">Tooltips</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/dragula.php">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/carousel.php">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/clipboard.php">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/context-menu.php">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/loaders.php">Loaders</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/slider.php">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/colcade.php">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tour.php">Tour</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/popups.php">
              <i class="icon-speech-bubble menu-icon"></i>
              <span class="menu-title">Popups</span>
              <span class="badge badge-info badge-pill">8</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/notifications.php">
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
                <li class="nav-item"> <a class="nav-link" href="icons/flag-icons.php">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/font-awesome.php">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/simple-line-icon.php">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/themify.php">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Form</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/basic_elements.php">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/advanced_elements.php">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Advanced Elements</span>
              <span class="badge badge-success badge-pill">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/validation.php">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Validation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/wizard.php">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Wizard</span>
              <span class="badge badge-danger badge-pill">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/text_editor.php">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Text editors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/code_editor.php">
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
                <li class="nav-item"> <a class="nav-link" href="charts/chartjs.php">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/morris.php">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/flot-chart.php">Float</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/google-charts.php">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/sparkline.php">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/c3.php">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/chartist.php">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/justGage.php">JustGage</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="tables/basic-table.php">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/data-table.php">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/js-grid.php">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/sortable-table.php">Sortable table</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="maps/mapeal.php">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/vector-map.php">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/google-maps.php">Google Map</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/login-2.php"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register.php"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register-2.php"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/lock-screen.php"> Lockscreen </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/error-500.php"> 500 </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/blank-page.php"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/landing-page.php"> Landing Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/timeline.php"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/profile.php"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq.php"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq-2.php"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/news-grid.php"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/search-results.php"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/portfolio.php"> Portfolio </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/pricing-table.php"> Pricing </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/invoice.php"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/orders.php"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Applications</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/email.php">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/calendar.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/gallery.php">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/todo.php">
              <i class="icon-file-add menu-icon"></i>
              <span class="menu-title">Todo</span>
            </a>
          </li>
          <li class="nav-item nav-doc">
            <a class="nav-link bg-primary" href="documentation.php">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
					<div class="row">
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Statistics</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">$10,200</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 9:10am</small>
												</div>
											</div>
											<small class="text-gray">Raised from 89 orders.</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-success px-4 py-2 rounded">
												<i class="mdi mdi-buffer text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Daily Order</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">$2256</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 05:42pm</small>
												</div>
											</div>
											<small class="text-gray">hey, let???s have lunch together</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-warning px-4 py-2 rounded">
												<i class="mdi mdi-wallet text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face11.jpg" class="img-lg rounded" alt="profile image"/>
										<div class="ml-3">
											<h6>Maria</h6>
											<p class="text-muted">maria@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Designer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face9.jpg" class="img-lg rounded" alt="profile image"/>
										<div class="ml-3">
											<h6>Thomas Edison</h6>
											<p class="text-muted">thomas@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Developer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face12.jpg" class="img-lg rounded" alt="profile image"/>
										<div class="ml-3">
											<h6>Edward</h6>
											<p class="text-muted">edward@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Tester</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-facebook text-facebook icon-md"></i>
										<div class="ml-3">
											<h6 class="text-facebook">2.62 Subscribers</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-linkedin text-linkedin icon-md"></i>
										<div class="ml-3">
											<h6 class="text-linkedin">5k connections</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-twitter text-twitter icon-md"></i>
										<div class="ml-3">
											<h6 class="text-twitter">3k followers</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Todo</h4>
									<div class="add-items d-flex">
										<input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
										<button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
									</div>
									<div class="list-wrapper">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Meeting with Alisa
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Call John
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Create invoice
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Print Statements
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Prepare for presentation
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Pick up kids from school
													</label>
												</div>
												<i class="remove mdi mdi-close-circle-outline"></i>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card text-center">
								<div class="card-body">
									<img src="../images/faces/face5.jpg" class="img-lg rounded-circle mb-2" alt="profile image"/>
									<h4>Maria Johnson</h4>
									<p class="text-muted">Developer</p>
									<p class="mt-4 card-text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											Aenean commodo ligula eget dolor. Lorem
									</p>
									<button class="btn btn-info btn-sm mt-3 mb-4">Follow</button>
									<div class="border-top pt-3">
										<div class="row">
											<div class="col-4">
												<h6>5896</h6>
												<p>Post</p>
											</div>
											<div class="col-4">
												<h6>1596</h6>
												<p>Followers</p>
											</div>
											<div class="col-4">
												<h6>7896</h6>
												<p>Likes</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Updates</h4>
									<ul class="bullet-line-list">
										<li>
											<h6>User confirmation</h6>
											<p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
											<p class="text-muted">
												<i class="mdi mdi-clock"></i>
												7 months ago.
											</p>
										</li>
										<li>
											<h6>Continuous evaluation</h6>
											<p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
											<p class="text-muted">
												<i class="mdi mdi-clock"></i>
												7 months ago.
											</p>
										</li>
										<li>
											<h6>Promotion</h6>
											<p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
											<p class="text-muted">
												<i class="mdi mdi-clock"></i>
												7 months ago.
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<h4 class="card-title">Activity</h4>
										<i class="mdi mdi-dots-vertical"></i>
									</div>
									<p class="card-description">What's people doing right now</p>
									<div class="list d-flex align-items-center border-bottom py-3">
										<img class="img-sm rounded-circle" src="../images/faces/face4.jpg" alt="">
										<div class="wrapper w-100 ml-3">
											<p class="mb-0"><b>Dobrick </b>posted in Material</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<p class="mb-0">That's awesome!</p>
												</div>
												<small class="text-muted ml-auto">2 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom py-3">
										<img class="img-sm rounded-circle" src="../images/faces/face5.jpg" alt="">
										<div class="wrapper w-100 ml-3">
											<p class="mb-0"><b>Stella </b>posted in Material</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<p class="mb-0">That's awesome!</p>
												</div>
												<small class="text-muted ml-auto">3 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom py-3">
										<img class="img-sm rounded-circle" src="../images/faces/face7.jpg" alt="">
										<div class="wrapper w-100 ml-3">
											<p class="mb-0"><b>Peter </b>posted in Material</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<p class="mb-0">That's Great!</p>
												</div>
												<small class="text-muted ml-auto">1 hours ago</small>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center pt-3">
										<img class="img-sm rounded-circle" src="../images/faces/face6.jpg" alt="">
										<div class="wrapper w-100 ml-3">
											<p class="mb-0"><b>Nateila </b>posted in Material</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<p class="mb-0">That's awesome!</p>
												</div>
												<small class="text-muted ml-auto">1 hours ago</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Recomended</h4>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face5.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Stella Davidson</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>New York City, USA</small>
										</div>
										<div class="badge badge-pill badge-info ml-auto px-1 py-1"><i class="mdi mdi-check font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face6.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Daniel Russel</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Florida, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face7.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Bruno King</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Arkansas, USA</small>
										</div>
										<div class="badge badge-pill badge-info ml-auto px-1 py-1"><i class="mdi mdi-check font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face8.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">David Moore</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Arizon, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 mb-4">
										<img class="img-sm rounded-circle" src="../images/faces/face9.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Rafell John</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Alaska, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Messages</h4>
									<div class="preview-list">
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face6.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">Richard Joy
														<span class="float-right small">
															<span class="text-muted pr-3">13.06.2017</span>
														</span>
													</h6>
													<p>Thanks for the support!</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face8.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">William Alex
														<span class="float-right small">
															<span class="text-muted pr-3">08.07.2017</span>
														</span>
													</h6>
													<p>Meeting is postponed</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face9.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">David Grey
														<span class="float-right small">
															<span class="text-muted pr-3">15.07.2017</span>
														</span>
													</h6>
													<p>Please approve the request</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face11.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">Aleena Abraham
														<span class="float-right small">
															<span class="text-muted pr-3">12.06.2017</span>
														</span>
													</h6>
													<p>Hope to see you tomorrow</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? 2018 <a href="http://www.urbanui.com/" target="_blank">urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>