<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pearl UI</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body class="sidebar-fixed">
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
          <li class="nav-item">
            <form class="nav-link form-inline mt-2 mt-md-0 d-none d-lg-flex search">
              <input type="text" class="form-control" placeholder="Search for something...">
            </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
              English
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item" href="#">
                French
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Spain
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Latin
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Japanese
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count bg-warning">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject ellipsis">Mark sent you a message</h6>
                  <p class="text-muted">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject ellipsis">Cregh sent you a message</h6>
                  <p class="text-muted">
                    15 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject ellipsis">Profile picture updated</h6>
                  <p class="text-muted">
                    18 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count bg-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject">Event today</h6>
                  <p class="text-muted ellipsis">
                    Just a reminder that you have an event today
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject">Settings</h6>
                  <p class="text-muted ellipsis">
                    Update dashboard
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject">Launch Admin</h6>
                  <p class="text-muted ellipsis">
                    New admin wow!
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img src="../../images/faces/face1.jpg" alt="image">
              <span class="d-none d-lg-inline">Daniel Russiel</span>
            </a>
            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-backburger"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
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
                  <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                  <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
              <div class="profile-image">
                <img src="../../images/faces/face1.jpg" alt="image"/>
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
            <a class="nav-link" href="../../index.html">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <span class="badge badge-primary badge-pill">1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../widgets.html">
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
                <li class="nav-item"> <a class="nav-link" href="../layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/horizontal-menu.html">Horizontal Menu</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../layout/compact-menu.html">Compact menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-collapsed.html">Icon menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-fixed.html">Sidebar Fixed</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/tooltips.html">Tooltips</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/loaders.html">Loaders</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/slider.html">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/tour.html">Tour</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ui-features/popups.html">
              <i class="icon-speech-bubble menu-icon"></i>
              <span class="menu-title">Popups</span>
              <span class="badge badge-info badge-pill">8</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ui-features/notifications.html">
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
                <li class="nav-item"> <a class="nav-link" href="flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Form</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/basic_elements.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/advanced_elements.html">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Advanced Elements</span>
              <span class="badge badge-success badge-pill">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/validation.html">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Validation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/wizard.html">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Wizard</span>
              <span class="badge badge-danger badge-pill">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/text_editor.html">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Text editors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/code_editor.html">
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
                <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/flot-chart.html">Float</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="../charts/justGage.html">JustGage</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="../tables/sortable-table.html">Sortable table</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../maps/mapeal.html">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="../maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="../maps/google-maps.html">Google Map</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/lock-screen.html"> Lockscreen </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/error-500.html"> 500 </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/landing-page.html"> Landing Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/portfolio.html"> Portfolio </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../samples/pricing-table.html"> Pricing </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="../samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Applications</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apps/email.html">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apps/calendar.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apps/gallery.html">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apps/todo.html">
              <i class="icon-file-add menu-icon"></i>
              <span class="menu-title">Todo</span>
            </a>
          </li>
          <li class="nav-item nav-doc">
            <a class="nav-link bg-primary" href="../documentation.html">
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
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-address-book"></i>fa fa-address-book </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-address-book-o"></i>fa fa-address-book-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-address-card"></i>fa fa-address-card </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-address-card-o"></i>fa fa-address-card-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-bandcamp"></i>fa fa-bandcamp </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-bath"></i>fa fa-bath </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-bathtub"></i>fa fa-bathtub </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-drivers-license"></i>fa fa-drivers-license </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-drivers-license-o"></i>fa fa-drivers-license-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-eercast"></i>fa fa-eercast </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-envelope-open"></i>fa fa-envelope-open </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-envelope-open-o"></i>fa fa-envelope-open-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-etsy"></i>fa fa-etsy </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-free-code-camp"></i>fa fa-free-code-camp </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-grav"></i>fa fa-grav </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-handshake-o"></i>fa fa-handshake-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-id-badge"></i>fa fa-id-badge </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-id-card"></i>fa fa-id-card </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-id-card-o"></i>fa fa-id-card-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-imdb"></i>fa fa-imdb </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-linode"></i> fa fa-linode </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-meetup"></i>fa fa-meetup </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-microchip"></i>fa fa-microchip </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-podcast"></i>fa fa-podcast </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-quora"></i>fa fa-quora </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-ravelry"></i>fa fa-ravelry </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-s15"></i>fa fa-s15 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-shower"></i>fa fa-shower </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-snowflake-o"></i>fa fa-snowflake-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-superpowers"></i>fa fa-superpowers </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-telegram"></i>fa fa-telegram </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer"></i>fa fa-thermometer </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-0"></i>fa fa-thermometer-0 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-1"></i>fa fa-thermometer-1 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-2"></i>fa fa-thermometer-2 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-3"></i>fa fa-thermometer-3 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-4"></i>fa fa-thermometer-4 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-empty"></i>fa fa-thermometer-empty </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-full"></i>fa fa-thermometer-full </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-half"></i>fa fa-thermometer-half </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-quarter"></i>fa fa-thermometer-quarter </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-thermometer-three-quarters"></i>fa fa-thermometer-three-quarters
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-times-rectangle"></i>fa fa-times-rectangle </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-times-rectangle-o"></i>fa fa-times-rectangle-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-user-circle"></i>fa fa-user-circle </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-user-circle-o"></i>fa fa-user-circle-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-user-o"></i>fa fa-user-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-vcard"></i>fa fa-vcard </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-vcard-o"></i>fa fa-vcard-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-window-close"></i>fa fa-window-close </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-window-close-o"></i>fa fa-window-close-o </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-window-maximize"></i>fa fa-window-maximize </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-window-minimize"></i>fa fa-window-minimize </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-window-restore"></i>fa fa-window-restore </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="fa fa-wpexplorer"></i>fa fa-wpexplorer </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Web Application Icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-adjust"></i> fa-adjust</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-anchor"></i> fa-anchor</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-archive"></i> fa-archive</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows"></i> fa-arrows</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-asterisk"></i> fa-asterisk</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ban"></i> fa-ban</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-barcode"></i> fa-barcode</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bars"></i> fa-bars</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-beer"></i> fa-beer</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bell"></i> fa-bell</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bell-o"></i> fa-bell-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bolt"></i> fa-bolt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bomb"></i> fa-bomb</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-book"></i> fa-book</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bookmark"></i> fa-bookmark</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-briefcase"></i> fa-briefcase</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bug"></i> fa-bug</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-building"></i> fa-building</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-building-o"></i> fa-building-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bullseye"></i> fa-bullseye</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-calendar"></i> fa-calendar</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-camera"></i> fa-camera</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-car"></i> fa-car</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-certificate"></i> fa-certificate</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check"></i> fa-check</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-circle"></i> fa-check-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square"></i> fa-check-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-child"></i> fa-child</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle"></i> fa-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-clock-o"></i> fa-clock-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud"></i> fa-cloud</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-code"></i> fa-code</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-code-fork"></i> fa-code-fork</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-coffee"></i> fa-coffee</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cog"></i> fa-cog</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cogs"></i> fa-cogs</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comment"></i> fa-comment</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comment-o"></i> fa-comment-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comments"></i> fa-comments</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comments-o"></i> fa-comments-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-compass"></i> fa-compass</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-crop"></i> fa-crop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cube"></i> fa-cube</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cubes"></i> fa-cubes</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cutlery"></i> fa-cutlery</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-database"></i> fa-database</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-desktop"></i> fa-desktop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-download"></i> fa-download</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope"></i> fa-envelope</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eraser"></i> fa-eraser</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exchange"></i> fa-exchange</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation"></i> fa-exclamation</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-external-link"></i> fa-external-link</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eye"></i> fa-eye</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fax"></i> fa-fax</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-female"></i> fa-female</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-film"></i> fa-film</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-filter"></i> fa-filter</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fire"></i> fa-fire</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag"></i> fa-flag</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag-o"></i> fa-flag-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flask"></i> fa-flask</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder"></i> fa-folder</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-o"></i> fa-folder-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-open"></i> fa-folder-open</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-frown-o"></i> fa-frown-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gamepad"></i> fa-gamepad</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gavel"></i> fa-gavel</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gift"></i> fa-gift</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-glass"></i> fa-glass</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-globe"></i> fa-globe</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-headphones"></i> fa-headphones</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-heart"></i> fa-heart</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-heart-o"></i> fa-heart-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-history"></i> fa-history</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-home"></i> fa-home</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-inbox"></i> fa-inbox</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-info"></i> fa-info</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-info-circle"></i> fa-info-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-key"></i> fa-key</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-language"></i> fa-language</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-laptop"></i> fa-laptop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-leaf"></i> fa-leaf</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-level-down"></i> fa-level-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-level-up"></i> fa-level-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-ring"></i> fa-life-ring</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lock"></i> fa-lock</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-magic"></i> fa-magic</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-magnet"></i> fa-magnet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-male"></i> fa-male</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-map-marker"></i> fa-map-marker</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-meh-o"></i> fa-meh-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-microphone"></i> fa-microphone</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus"></i> fa-minus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mobile"></i> fa-mobile</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-money"></i> fa-money</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-moon-o"></i> fa-moon-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-music"></i> fa-music</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paw"></i> fa-paw</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil"></i> fa-pencil</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-phone"></i> fa-phone</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-phone-square"></i> fa-phone-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-picture-o"></i> fa-picture-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plane"></i> fa-plane</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus"></i> fa-plus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-power-off"></i> fa-power-off</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-print"></i> fa-print</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-qrcode"></i> fa-qrcode</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-question"></i> fa-question</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-question-circle"></i> fa-question-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-quote-left"></i> fa-quote-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-quote-right"></i> fa-quote-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-random"></i> fa-random</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-recycle"></i> fa-recycle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-refresh"></i> fa-refresh</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reply"></i> fa-reply</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reply-all"></i> fa-reply-all</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-retweet"></i> fa-retweet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-road"></i> fa-road</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rocket"></i> fa-rocket</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rss"></i> fa-rss</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rss-square"></i> fa-rss-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search"></i> fa-search</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search-minus"></i> fa-search-minus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search-plus"></i> fa-search-plus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share"></i> fa-share</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt"></i> fa-share-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-square"></i> fa-share-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shield"></i> fa-shield</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sign-in"></i> fa-sign-in</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sign-out"></i> fa-sign-out</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-signal"></i> fa-signal</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sitemap"></i> fa-sitemap</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sliders"></i> fa-sliders</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-smile-o"></i> fa-smile-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort"></i> fa-sort</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spinner"></i> fa-spinner</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spoon"></i> fa-spoon</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square"></i> fa-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square-o"></i> fa-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star"></i> fa-star</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half"></i> fa-star-half</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-o"></i> fa-star-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-suitcase"></i> fa-suitcase</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sun-o"></i> fa-sun-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tablet"></i> fa-tablet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tachometer"></i> fa-tachometer</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tag"></i> fa-tag</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tags"></i> fa-tags</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tasks"></i> fa-tasks</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-taxi"></i> fa-taxi</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-terminal"></i> fa-terminal</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ticket"></i> fa-ticket</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times"></i> fa-times</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times-circle"></i> fa-times-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tint"></i> fa-tint</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-trash-o"></i> fa-trash-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tree"></i> fa-tree</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-trophy"></i> fa-trophy</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-truck"></i> fa-truck</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-umbrella"></i> fa-umbrella</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-university"></i> fa-university</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unlock"></i> fa-unlock</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-upload"></i> fa-upload</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-user"></i> fa-user</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-users"></i> fa-users</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-video-camera"></i> fa-video-camera</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-down"></i> fa-volume-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-off"></i> fa-volume-off</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-up"></i> fa-volume-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wrench"></i> fa-wrench</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">File Type Icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-adjust"></i> fa-adjust</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-anchor"></i> fa-anchor</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-archive"></i> fa-archive</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows"></i> fa-arrows</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-asterisk"></i> fa-asterisk</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ban"></i> fa-ban</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-barcode"></i> fa-barcode</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bars"></i> fa-bars</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-beer"></i> fa-beer</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bell"></i> fa-bell</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bell-o"></i> fa-bell-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bolt"></i> fa-bolt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bomb"></i> fa-bomb</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-book"></i> fa-book</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bookmark"></i> fa-bookmark</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-briefcase"></i> fa-briefcase</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bug"></i> fa-bug</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-building"></i> fa-building</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-building-o"></i> fa-building-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bullseye"></i> fa-bullseye</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-calendar"></i> fa-calendar</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-camera"></i> fa-camera</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-car"></i> fa-car</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-certificate"></i> fa-certificate</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check"></i> fa-check</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-circle"></i> fa-check-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square"></i> fa-check-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-child"></i> fa-child</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle"></i> fa-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-clock-o"></i> fa-clock-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud"></i> fa-cloud</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-code"></i> fa-code</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-code-fork"></i> fa-code-fork</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-coffee"></i> fa-coffee</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cog"></i> fa-cog</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cogs"></i> fa-cogs</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comment"></i> fa-comment</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comment-o"></i> fa-comment-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comments"></i> fa-comments</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-comments-o"></i> fa-comments-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-compass"></i> fa-compass</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-crop"></i> fa-crop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cube"></i> fa-cube</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cubes"></i> fa-cubes</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cutlery"></i> fa-cutlery</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-database"></i> fa-database</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-desktop"></i> fa-desktop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-download"></i> fa-download</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope"></i> fa-envelope</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eraser"></i> fa-eraser</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exchange"></i> fa-exchange</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation"></i> fa-exclamation</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-external-link"></i> fa-external-link</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eye"></i> fa-eye</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fax"></i> fa-fax</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-female"></i> fa-female</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-film"></i> fa-film</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-filter"></i> fa-filter</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fire"></i> fa-fire</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag"></i> fa-flag</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flag-o"></i> fa-flag-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flask"></i> fa-flask</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder"></i> fa-folder</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-o"></i> fa-folder-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-open"></i> fa-folder-open</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-frown-o"></i> fa-frown-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gamepad"></i> fa-gamepad</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gavel"></i> fa-gavel</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gift"></i> fa-gift</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-glass"></i> fa-glass</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-globe"></i> fa-globe</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-headphones"></i> fa-headphones</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-heart"></i> fa-heart</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-heart-o"></i> fa-heart-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-history"></i> fa-history</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-home"></i> fa-home</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-inbox"></i> fa-inbox</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-info"></i> fa-info</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-info-circle"></i> fa-info-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-key"></i> fa-key</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-language"></i> fa-language</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-laptop"></i> fa-laptop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-leaf"></i> fa-leaf</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-level-down"></i> fa-level-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-level-up"></i> fa-level-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-ring"></i> fa-life-ring</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-lock"></i> fa-lock</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-magic"></i> fa-magic</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-magnet"></i> fa-magnet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-male"></i> fa-male</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-map-marker"></i> fa-map-marker</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-meh-o"></i> fa-meh-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-microphone"></i> fa-microphone</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus"></i> fa-minus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mobile"></i> fa-mobile</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-money"></i> fa-money</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-moon-o"></i> fa-moon-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-music"></i> fa-music</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paw"></i> fa-paw</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil"></i> fa-pencil</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-phone"></i> fa-phone</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-phone-square"></i> fa-phone-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-picture-o"></i> fa-picture-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plane"></i> fa-plane</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus"></i> fa-plus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-power-off"></i> fa-power-off</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-print"></i> fa-print</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-qrcode"></i> fa-qrcode</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-question"></i> fa-question</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-question-circle"></i> fa-question-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-quote-left"></i> fa-quote-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-quote-right"></i> fa-quote-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-random"></i> fa-random</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-recycle"></i> fa-recycle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-refresh"></i> fa-refresh</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reply"></i> fa-reply</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reply-all"></i> fa-reply-all</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-retweet"></i> fa-retweet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-road"></i> fa-road</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rocket"></i> fa-rocket</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rss"></i> fa-rss</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rss-square"></i> fa-rss-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search"></i> fa-search</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search-minus"></i> fa-search-minus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-search-plus"></i> fa-search-plus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share"></i> fa-share</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt"></i> fa-share-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-square"></i> fa-share-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shield"></i> fa-shield</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sign-in"></i> fa-sign-in</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sign-out"></i> fa-sign-out</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-signal"></i> fa-signal</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sitemap"></i> fa-sitemap</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sliders"></i> fa-sliders</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-smile-o"></i> fa-smile-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort"></i> fa-sort</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spinner"></i> fa-spinner</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spoon"></i> fa-spoon</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square"></i> fa-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square-o"></i> fa-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star"></i> fa-star</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half"></i> fa-star-half</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-star-o"></i> fa-star-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-suitcase"></i> fa-suitcase</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-sun-o"></i> fa-sun-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tablet"></i> fa-tablet</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tachometer"></i> fa-tachometer</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tag"></i> fa-tag</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tags"></i> fa-tags</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tasks"></i> fa-tasks</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-taxi"></i> fa-taxi</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-terminal"></i> fa-terminal</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ticket"></i> fa-ticket</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times"></i> fa-times</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times-circle"></i> fa-times-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tint"></i> fa-tint</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-trash-o"></i> fa-trash-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tree"></i> fa-tree</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-trophy"></i> fa-trophy</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-truck"></i> fa-truck</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-umbrella"></i> fa-umbrella</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-university"></i> fa-university</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unlock"></i> fa-unlock</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-upload"></i> fa-upload</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-user"></i> fa-user</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-users"></i> fa-users</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-video-camera"></i> fa-video-camera</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-down"></i> fa-volume-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-off"></i> fa-volume-off</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-volume-up"></i> fa-volume-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wrench"></i> fa-wrench</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Spinner icons</h4>
                  <div class="alert alert-success mb-4">
                    These icons work great with the <code>fa-spin</code> class. Check out the <a href="http://fontawesome.io/examples/#animated" class="alert-link">spinning icons example</a>.
                  </div>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-circle-o-notch"></i> fa-circle-o-notch</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-cog"></i> fa-cog</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-gear"></i> fa-gear <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-refresh"></i> fa-refresh</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-spinner"></i> fa-spinner</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Control Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square"></i> fa-check-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle"></i> fa-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square"></i> fa-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-square-o"></i> fa-square-o</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Currency Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-btc"></i> fa-btc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eur"></i> fa-eur</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gbp"></i> fa-gbp</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-inr"></i> fa-inr</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-jpy"></i> fa-jpy</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-krw"></i> fa-krw</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-money"></i> fa-money</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rub"></i> fa-rub</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-try"></i> fa-try</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-usd"></i> fa-usd</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Text Editor Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-align-center"></i> fa-align-center</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-align-justify"></i> fa-align-justify</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-align-left"></i> fa-align-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-align-right"></i> fa-align-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bold"></i> fa-bold</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-clipboard"></i> fa-clipboard</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-columns"></i> fa-columns</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eraser"></i> fa-eraser</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file"></i> fa-file</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-o"></i> fa-file-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-text"></i> fa-file-text</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-files-o"></i> fa-files-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-font"></i> fa-font</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-header"></i> fa-header</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-indent"></i> fa-indent</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-italic"></i> fa-italic</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-link"></i> fa-link</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-list"></i> fa-list</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-list-alt"></i> fa-list-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-list-ol"></i> fa-list-ol</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-list-ul"></i> fa-list-ul</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-outdent"></i> fa-outdent</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paperclip"></i> fa-paperclip</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paragraph"></i> fa-paragraph</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-repeat"></i> fa-repeat</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-scissors"></i> fa-scissors</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-subscript"></i> fa-subscript</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-superscript"></i> fa-superscript</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-table"></i> fa-table</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-text-height"></i> fa-text-height</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-text-width"></i> fa-text-width</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-th"></i> fa-th</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-th-large"></i> fa-th-large</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-th-list"></i> fa-th-list</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-underline"></i> fa-underline</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-undo"></i> fa-undo</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Directional Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-down"></i> fa-angle-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-left"></i> fa-angle-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-right"></i> fa-angle-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-angle-up"></i> fa-angle-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows"></i> fa-arrows</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-down"></i> fa-caret-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-left"></i> fa-caret-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-right"></i> fa-caret-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-up"></i> fa-caret-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Video Player Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-backward"></i> fa-backward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-compress"></i> fa-compress</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-eject"></i> fa-eject</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-expand"></i> fa-expand</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-forward"></i> fa-forward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pause"></i> fa-pause</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-play"></i> fa-play</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-play-circle"></i> fa-play-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-step-backward"></i> fa-step-backward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-step-forward"></i> fa-step-forward</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stop"></i> fa-stop</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Brand Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-adn"></i> fa-adn</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-android"></i> fa-android</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-apple"></i> fa-apple</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-behance"></i> fa-behance</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-behance-square"></i> fa-behance-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-btc"></i> fa-btc</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-codepen"></i> fa-codepen</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-css3"></i> fa-css3</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-delicious"></i> fa-delicious</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-deviantart"></i> fa-deviantart</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-digg"></i> fa-digg</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dribbble"></i> fa-dribbble</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-dropbox"></i> fa-dropbox</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-drupal"></i> fa-drupal</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-empire"></i> fa-empire</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-facebook"></i> fa-facebook</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-flickr"></i> fa-flickr</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-foursquare"></i> fa-foursquare</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-git"></i> fa-git</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-git-square"></i> fa-git-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-github"></i> fa-github</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-github-alt"></i> fa-github-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-github-square"></i> fa-github-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-gittip"></i> fa-gittip</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-google"></i> fa-google</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-google-plus"></i> fa-google-plus</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-html5"></i> fa-html5</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-instagram"></i> fa-instagram</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-joomla"></i> fa-joomla</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-linkedin"></i> fa-linkedin</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-linux"></i> fa-linux</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-openid"></i> fa-openid</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pagelines"></i> fa-pagelines</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pinterest"></i> fa-pinterest</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-qq"></i> fa-qq</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-rebel"></i> fa-rebel</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reddit"></i> fa-reddit</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-renren"></i> fa-renren</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt"></i> fa-share-alt</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-skype"></i> fa-skype</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-slack"></i> fa-slack</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spotify"></i> fa-spotify</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-steam"></i> fa-steam</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-steam-square"></i> fa-steam-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-trello"></i> fa-trello</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tumblr"></i> fa-tumblr</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-twitter"></i> fa-twitter</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-vine"></i> fa-vine</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-vk"></i> fa-vk</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span> </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-weibo"></i> fa-weibo</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-weixin"></i> fa-weixin</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-windows"></i> fa-windows</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wordpress"></i> fa-wordpress</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-xing"></i> fa-xing</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-xing-square"></i> fa-xing-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-yahoo"></i> fa-yahoo</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-youtube"></i> fa-youtube</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Medical Icons</h4>
                  <div class="row icons-list">
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-ambulance"></i> fa-ambulance</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-h-square"></i> fa-h-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-medkit"></i> fa-medkit</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-user-md"></i> fa-user-md</div>
                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>