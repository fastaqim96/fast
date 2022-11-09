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
  <link rel="stylesheet" href="../vendors/pwstabs/jquery.pwstabs.min.css">
  <link rel="stylesheet" href="../vendors/codemirror/codemirror.css">
  <link rel="stylesheet" href="../vendors/codemirror/ambiance.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body class="sidebar-fixed">
  <div class=" container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../index.html"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
                    <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                    <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                    <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img src="../images/faces/face1.jpg" alt="image">
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
            <a class="nav-link" href="../index.html">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <span class="badge badge-primary badge-pill">1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html">
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
                <li class="nav-item"> <a class="nav-link" href="layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/horizontal-menu.html">Horizontal Menu</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="layout/compact-menu.html">Compact menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-collapsed.html">Icon menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-fixed.html">Sidebar Fixed</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tooltips.html">Tooltips</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/loaders.html">Loaders</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/slider.html">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tour.html">Tour</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/popups.html">
              <i class="icon-speech-bubble menu-icon"></i>
              <span class="menu-title">Popups</span>
              <span class="badge badge-info badge-pill">8</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/notifications.html">
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
                <li class="nav-item"> <a class="nav-link" href="icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Form</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/basic_elements.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/advanced_elements.html">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Advanced Elements</span>
              <span class="badge badge-success badge-pill">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/validation.html">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Validation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/wizard.html">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Wizard</span>
              <span class="badge badge-danger badge-pill">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/text_editor.html">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Text editors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/code_editor.html">
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
                <li class="nav-item"> <a class="nav-link" href="charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/flot-chart.html">Float</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/justGage.html">JustGage</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/sortable-table.html">Sortable table</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="maps/mapeal.html">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/google-maps.html">Google Map</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/lock-screen.html"> Lockscreen </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/error-500.html"> 500 </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/landing-page.html"> Landing Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/portfolio.html"> Portfolio </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/pricing-table.html"> Pricing </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Applications</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/email.html">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/calendar.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/gallery.html">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/todo.html">
              <i class="icon-file-add menu-icon"></i>
              <span class="menu-title">Todo</span>
            </a>
          </li>
          <li class="nav-item nav-doc">
            <a class="nav-link bg-primary" href="documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper documentation">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Introduction</h4>
                            <p> Thank you for purchasing Pearl Admin, a template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 4. If you are unfamiliar with Bootstrap, visit their
                                website and read through the documentation. All of Bootstrap components have been modified to fit the style of Pearl Admin and provide a consistent look throughout the template.</p>
                            <p>Before you start working with the template, we suggest you to go through the pages that are bundled with the theme. Most of the template example pages contain quick tips on how to create or use a component which can
                                be really helpful when you need to create something on the fly.</p>
                            <p><strong>Note</strong>: We are trying our best to document how to use the template. If you think that something is missing from the documentation, please do not hesitate to tell us about it. If you have any questions
                                or problems with this theme please use Envato Marketplace contact form on our profile or email us at<a href="mailto:support@urbanui.com"> support@urbanui.com</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-primary">About Pearl Admin</h4>
                            <p>Pearl Admin is a fully responsive and customizable template suitable for admin dashboards. Pearl Admin contain almost all components required for this purpose.</p>
                            <p>Pearl Admin is based on bootstrap 4, the world's most popular responsive css framework.</p>
                            <p>Pearl Admin is built with Sass. Sass compiler makes it easier to code and customize. Sass is the most mature, stable, and powerful professional grade CSS extension language in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Getting started</h4>
                            <p>You can directly use the compiled and ready to use version of the template. But in case you plan to customize the template extensively the template allows you to do so! The Customization section will get you initiated on this.</p>
                            <p>The downloaded package will have the following structure. </p>
                            <textarea class="shell-mode">
Pearl Admin/
├── css/
├── fonts/
├── images/
├── js/
├── pages/
├── partials/
├── scss/
├── vendors/
├── package.json
├── gulpfile.js
├── index.html</textarea>
                            <p class="mt-2">
                              The vendor files are added as npm packages for reducing the file sizes and easier version update of the vendors.
                            </p>
                            <p>
                              In order to access the properties of vendors, you have to just run two commands and all the vendor files are inside your node_modules folder!.
                            </p>
                            <p>
                              Though we have bundled up the vendor files needed for demo purpose into a folder 'vendors', you may not need all those vendors in your application.  If you want to make any change in the vendor package files, you need to change the src path for related tasks in the file gulpfile.js and run the task "bundleVendors" to rebuild the vendor files.
                            </p>
                            <p class="mb-0">
                              To do this, you must have <span class="font-weight-bold">node and npm</span> installed in your computer.
                            </p>
                            <p class="mb-0">Installation guide of node can be found <a href="https://nodejs.org/en/">here</a>. As npm comes bundled with node,
                              separate installation of npm is not needed.</p>
                            <p>
                                If you have installed them, just checkout to the root folder and run the following command.
                            </p>
                            <textarea class="shell-mode">
npm install</textarea>
                            <p class="mt-2">
                             You can see that a folder <span class="font-weight-bold">node_modules</span>  is generated in your root folder with all vendor files!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <h4 class="card-title text-primary">Customization</h4>
                        <p>
                          In case you plan to customize the template extensively, you can make changes to scss files. We use the gulp task manager for the build processes. Gulp will watch for changes to scss files and automatically compile
                          the files to CSS. For this you need to install Gulp. Use of this tool is completely optional and only required if you want to modify the scss files.
                        </p>
                        <h5 class="card-title">Dependencies</h5>
                        <p>To get started you will need to install the following item</p>
                        <ul>
                          <li>Gulp - for task management.</li>
                        </ul>
                        <p class="font-weight-bold mt-4 text-dark">Gulp</p>
                        <p>Getting started with gulp is pretty simple. The <a href="https://gulpjs.com/" target="_blank">Gulp</a> site is a great place to get information on installing Gulp if you need more information.</p>
                        <p>You need to first install gulp-cli in your machine using the below command</p>
                        <textarea class="shell-mode">
npm install -g gulp-cli</textarea>
                        <p class="mt-2">This installs gulp-cli globally to your machine.</p>
                        <p>Local installation of gulp in project will be done automatically when you complete the steps in getting started section. The other thing that gulp requires, which, is really what does all the work, is the gulpfile.js. In this file you set up all of your tasks that you will run.</p>
                        <p>Don't worry. We have this file already created for you!</p>
                      </div>
                  </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                            <h4 class="card-title text-primary">Compilation</h4>
                            <p>Before you start modifying scss files, make sure that you go to the root folder of the template and run the following command</p>
                            <textarea class="shell-mode">
gulp serve</textarea>
                            <p class="mt-2">This will start the file watch by gulp and whenever a file is modified, scss files will be compiled to create the css file</p>
                      </div>
                  </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                            <h4 class="card-title text-primary">Options</h4>
                            <p>
                              We have provided a bunch of layout options for you with a single class change!
                              You can use the following classes for each layouts.
                            </p>
                            <table class="table">
                              <thead>
                                  <tr class="">
                                      <th>Layout</th>
                                      <th>Class</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Compact menu</td>
                                      <td>sidebar-mini</td>
                                  </tr>
                                  <tr>
                                      <td>Icon menu</td>
                                      <td>sidebar-icon-only</td>
                                  </tr>
                                  <tr>
                                      <td>Hidden menu (togglable)</td>
                                      <td>sidebar-hidden</td>
                                  </tr>
                                  <tr>
                                      <td>Absolute menu</td>
                                      <td>sidebar-absolute, sidebar-hidden</td>
                                  </tr>
                                  <tr>
                                    <td>Horizontal menu</td>
                                    <td>horizontal-menu (However, mega-menu requires different html. Refer pages/layout/horizontal-menu.html)</td>
                                  </tr>
                                  <tr>
                                      <td>Boxed layout</td>
                                      <td>boxed-layout</td>
                                  </tr>
                                  <tr>
                                      <td>Rtl layout</td>
                                      <td>rtl</td>
                                  </tr>
                              </tbody>
                            </table>
                      </div>
                  </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                            <h4 class="card-title text-primary">Basic structure</h4>
                            <p class="mb-5">
                              The below snippet shows the basic html structure of Pearl admin.
                              Please note that all the stylesheets and script files in the below snippet should be included to render Pearl admin styles.
                            </p>
<textarea class="multiple-codes mt-5">
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
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../index.html"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
                    <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                    <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                    <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img src="../images/faces/face1.jpg" alt="image">
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
            <a class="nav-link" href="../index.html">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <span class="badge badge-primary badge-pill">1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html">
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
                <li class="nav-item"> <a class="nav-link" href="layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/horizontal-menu.html">Horizontal Menu</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="layout/compact-menu.html">Compact menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-collapsed.html">Icon menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                <li class="nav-item"> <a class="nav-link" href="layout/sidebar-fixed.html">Sidebar Fixed</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tooltips.html">Tooltips</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/loaders.html">Loaders</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/slider.html">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="ui-features/tour.html">Tour</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/popups.html">
              <i class="icon-speech-bubble menu-icon"></i>
              <span class="menu-title">Popups</span>
              <span class="badge badge-info badge-pill">8</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ui-features/notifications.html">
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
                <li class="nav-item"> <a class="nav-link" href="icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Form</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/basic_elements.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/advanced_elements.html">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Advanced Elements</span>
              <span class="badge badge-success badge-pill">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/validation.html">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Validation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/wizard.html">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Wizard</span>
              <span class="badge badge-danger badge-pill">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/text_editor.html">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Text editors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms/code_editor.html">
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
                <li class="nav-item"> <a class="nav-link" href="charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/flot-chart.html">Float</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="charts/justGage.html">JustGage</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="tables/sortable-table.html">Sortable table</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="maps/mapeal.html">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="maps/google-maps.html">Google Map</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/lock-screen.html"> Lockscreen </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/error-500.html"> 500 </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/landing-page.html"> Landing Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/portfolio.html"> Portfolio </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="samples/pricing-table.html"> Pricing </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Applications</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/email.html">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/calendar.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/gallery.html">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps/todo.html">
              <i class="icon-file-add menu-icon"></i>
              <span class="menu-title">Todo</span>
            </a>
          </li>
          <li class="nav-item nav-doc">
            <a class="nav-link bg-primary" href="documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">urbanui</a>. All rights reserved.</span>
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
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
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


<!-- Mirrored from www.urbanui.com/pearl-admin/jquery/pages/documentation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 01:23:17 GMT -->
</html>

</textarea>
                      </div>
                  </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                            <div class="card-body">
                                <hr class="hr">
                                <h3 class="my-4">Charts</h3>
                                <div class="demo-tabs">
                                  <div data-pws-tab="anynameyouwant1" data-pws-tab-name="Chartjs">
                                    <p>
                                      <a href="http://www.chartjs.org/">Chartjs</a> is a simple yet flexible JavaScript charting for designers & developers.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use chartjs in your appication, include the following files in &lt;head&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" /></textarea>
                                    <p>
                                      and the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple chart, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<canvas id="lineChart" style="height:250px"></canvas>

<script>
  var data = {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
      }]
  };
  var options = {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      },
      legend: {
          display: false
      },
      elements: {
        point: {
            radius: 0
        }
      }

  };
  if($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
  }
</script></textarea>
                                  </div>
                                  <div data-pws-tab="Float-Chart" data-pws-tab-name="Floatjs">
                                    <p>
                                      <a href="http://www.flotcharts.org/">Float Js</a> is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      Add following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple chart, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div class="float-chart-container">
  <div id="placeholder-basic" class="float-chart"></div>
</div>

<script>
$(function() {
  var d1 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.25) {
    d1.push([i, Math.sin(i)]);
  }
  var d2 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.25) {
    d2.push([i, Math.cos(i)]);
  }
  var d3 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.1) {
    d3.push([i, Math.tan(i)]);
  }
  $.plot("#placeholder-basic-option", [{
      label: "sin(x)",
      data: d1
    },
    {
      label: "cos(x)",
      data: d2
    },
    {
      label: "tan(x)",
      data: d3
    }
  ], {
    series: {
      lines: {
        show: true
      },
      points: {
        show: true
      }
    },
    xaxis: {
      ticks: [
        0, [Math.PI / 2, "\u03c0/2"],
        [Math.PI, "\u03c0"],
        [Math.PI * 3 / 2, "3\u03c0/2"],
        [Math.PI * 2, "2\u03c0"]
      ]
    },
    yaxis: {
      ticks: 10,
      min: -2,
      max: 2,
      tickDecimals: 3
    },
    grid: {
      backgroundColor: {
        colors: ["#fff", "#eee"]
      },
      borderWidth: {
        top: 1,
        right: 1,
        bottom: 2,
        left: 2
      }
    }
  });
});
</script></textarea>
                                  </div>
                                  <div data-pws-tab="google-chart" data-pws-tab-name="Google">
                                    <p>
                                      <a href="https://developers.google.com/chart/">Google</a> chart tools are powerful, simple to use, and free. Try out our rich gallery of interactive charts and data tools.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script type="text/javascript" src="../../../../www.gstatic.com/charts/loader.js"></script></textarea>
                                    <p>
                                      Basic Chart Structure
                                    </p>
                                    <textarea class="multiple-codes">
<div class="google-chart-container">
  <div id="Bar-chart" class="google-charts"></div>
</div>

<script>
if($("#barChart").length) {
  var barChartCanvas = $("#barChart").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.
  var barChart = new Chart(barChartCanvas, {
    type: 'bar',
    data: data,
    options: options
  });
}
</script></textarea>
                                  </div>
                                  <!-- Tabs Starts -->
                                  <div data-pws-tab="c3" data-pws-tab-name="C3">
                                      <p>
                                          <a href="http://c3js.org/">C3.js</a> is a D3-based reusable chart library.
                                      </p>
                                      <h6>Usage</h6>
                                      <p>
                                          To use c3 charts in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                      <p>
                                          and the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                          To create a simple chart, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<div id="c3-line-chart"></div>

<script>
  var c3LineChart = c3.generate({
    bindto: '#c3-line-chart',
    data: {
        columns: [
            ['data1', 30, 200, 100, 400, 150, 250],
            ['data2', 50, 20, 10, 40, 15, 25]
        ]
    }
  });
</script></textarea>
                                  </div>
                                  <!-- Tabs Ends -->
                                  <!-- Chartist Starts -->
                                  <div data-pws-tab="chartist" data-pws-tab-name="Chartist">
                                    <p>
                                      <a href="https://gionkunz.github.io/chartist-js/">Chartist</a> creates simple responsive charts
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use chartist in your appication, include the following files in &lt;head&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                    <p>
                                    Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple line chart using chartist, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>

<script>
new Chartist.Line('#ct-chart-line', {
    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
    series: [
        [12, 9, 7, 8, 5],
        [2, 1, 3.5, 7, 3],
        [1, 3, 4, 5, 6]
    ]
}, {
    fullWidth: true,
    chartPadding: {
        right: 40
    }
});
</script></textarea>
                                  </div>
                                  <!-- Chartist Ends -->
                                  <!-- Morris Starts -->
                                  <div data-pws-tab="morris" data-pws-tab-name="Morris">
                                    <p>
                                      <a href="http://morrisjs.github.io/morris.js/">Morris</a> creates Pretty time-series line graphs
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use morris in your appication, include the following files in &lt;head&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                    <p>
                                    Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple line chart using morris, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div id="morris-line-example"></div>

<script>
Morris.Line({
    element: 'morris-line-example',
    data: [{
            y: '2006',
            a: 100,
            b: 90
        },
        {
            y: '2007',
            a: 75,
            b: 65
        },
        {
            y: '2008',
            a: 50,
            b: 40
        },
        {
            y: '2009',
            a: 75,
            b: 65
        },
        {
            y: '2010',
            a: 50,
            b: 40
        },
        {
            y: '2011',
            a: 75,
            b: 65
        },
        {
            y: '2012',
            a: 100,
            b: 90
        }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B']
});
</script></textarea>
                                  </div>
                                  <!-- Morris Ends -->
                                  <!-- Rickshaw Starts -->
                                  <div data-pws-tab="rickshaw" data-pws-tab-name="Rickshaw">
                                    <p>
                                      <a href="http://code.shutterstock.com/rickshaw/">Rickshaw</a> is a JavaScript toolkit for creating interactive time series graphs.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use rickshaw in your appication, include the following files in &lt;head&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                    <p>
                                    Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple chart using rickshaw, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div id="rickshaw-simple"></div>

<script>
var rickshawSimple = new Rickshaw.Graph({
    element: document.getElementById("rickshaw-simple"),
    renderer: 'line',
    series: [{
        data: [{
            x: 0,
            y: 40
        }, {
            x: 1,
            y: 49
        }, {
            x: 2,
            y: 38
        }, {
            x: 3,
            y: 30
        }, {
            x: 4,
            y: 32
        }],
        color: 'steelblue'
    }, {
        data: [{
            x: 0,
            y: 19
        }, {
            x: 1,
            y: 22
        }, {
            x: 2,
            y: 32
        }, {
            x: 3,
            y: 20
        }, {
            x: 4,
            y: 21
        }],
        color: 'lightblue'
    }, {
        data: [{
            x: 0,
            y: 39
        }, {
            x: 1,
            y: 32
        }, {
            x: 2,
            y: 12
        }, {
            x: 3,
            y: 5
        }, {
            x: 4,
            y: 12
        }],
        color: 'steelblue',
        strokeWidth: 10,
        opacity: 0.5
    }]
});
rickshawSimple.render();
</script></textarea>
                                  </div>
                                  <!-- Rickshaw Ends -->
                                  <!-- Sparkline Starts -->
                                  <div data-pws-tab="rickshaw" data-pws-tab-name="Sparkline">
                                    <p>
                                      <a href="https://omnipotent.net/jquery.sparkline/#s-about">Jquery sparkline</a> generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use sparkline in your appication, add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a line chart using sparkline, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div id="sparkline-line-chart"></div>

<script>
$("#sparkline-line-chart").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
  type: 'line',
  width: '100%',
  height: '100%'
});
</script></textarea>
                                  </div>
                                  <!-- Sparkline Ends -->
                                </div>
                                <!-- New Docs Starts Here -->
                                <hr class="hr">
                                <h3 class="my-4">Maps</h3>
                                <div class="demo-tabs">
                                  <div data-pws-tab="Vector-map" data-pws-tab-name="Vector Map">
                                    <p>
                                      <a href="http://jvectormap.com/">jVectorMap</a> uses only native browser technologies like JavaScript, CSS, HTML, SVG or VML.
                                    </p>
                                    <h4 class="mt-5 mb-4">Usage</h4>
                                    <p>
                                      To use Vector map in your appication, include the following files in &lt;head&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                    <p>
                                    Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                    <p>
                                      To create a simple map, add the following code
                                    </p>
                                    <textarea class="multiple-codes">
<div id="vmap" class="vector-map" style="width: 100%; height:500px"></div>

<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }

  $(function() {
    jQuery('#vmap').vectorMap({ map: 'world_en' });
  });
</script></textarea>
                                  </div>
                                  <!-- Tabs Ends -->
                                  <!-- Tabs Starts -->
                                  <div data-pws-tab="Mapeal" data-pws-tab-name="Mapeal">
                                    <p>
                                      <a href="https://www.vincentbroute.fr/mapael/">Mapeal Map</a>.Ease the build of pretty data visualizations on dynamic vector maps
                                    </p>
                                    <p>
                                    Add the following script files in &lt;body&gt;
                                    </p>
                                    <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a simple map, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="container">
    <div class="map">Alternative content</div>
</div>

<script>
  $(".container").mapael({
    map: {
      name: "world_countries"
    }
  });
</script></textarea>
                                  </div>
                                  <!-- Tabs Ends -->
                                  </div>
                                  <!-- demo-tabs container ends -->
                                  <!-- New Docs Ends Here -->
                                  <!-- New Docs Starts Here -->
                                  <hr class="hr">
                                  <h3 class="my-4">Tabs</h3>
                                  <div class="demo-tabs">
                                    <!-- Tabs Starts -->
                                    <div data-pws-tab="tab1" data-pws-tab-name="PSW Tabs">
                                      <p>
                                        <a href="http://alexchizhov.com/pwstabs/">PSW Tabs</a> Jqury plugin.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use PSW Tabs in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/"></textarea>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To create Tab, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<div class="container" id="demo">
   <div data-pws-tab="anynameyouwant1" data-pws-tab-name="Tab Title 1">Our first tab</div>
   <div data-pws-tab="anynameyouwant2" data-pws-tab-name="Tab Title 2">Our second tab</div>
   <div data-pws-tab="anynameyouwant3" data-pws-tab-name="Tab Title 3">Our third tab</div>
</div>

<script>
  $('#demo').pwstabs();
</script>
                                      </textarea>
                                    </div>
                                    <!-- Tabs Ends -->
                                  </div>
                                  <!-- demo-tabs container ends -->

                                  <!-- New Docs Ends Here -->

                                  <!-- New Docs Starts Here -->

                                  <hr class="hr">
                                  <h3 class="my-4">Advanced Form Elements</h3>
                                  <div class="demo-tabs">
                                      <!-- Tabs Starts -->
                                      <div data-pws-tab="UISlider" data-pws-tab-name="UI Slider">
                                        <p>
                                          <a href="https://refreshless.com/nouislider/">noUiSlider</a> is a range slider without bloat
                                        </p>
                                        <h4 class="mt-5 mb-4">Usage</h4>
                                        <p>
                                          To use NoUISlider in your appication, include the following files in &lt;head&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                        <p>
                                        Add the following script files in &lt;body&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                        <p>
                                          To create a slider, add the following code
                                        </p>
                                        <textarea class="multiple-codes">
<div id="ui-slider" class="slider"></div>

<script>
  var startSlider = document.getElementById('ui-slider');
  noUiSlider.create(startSlider, {
    start: [20, 80],
    range: {
      'min': [0],
      'max': [100]
    }
  });
</script></textarea>
                                      </div>
                                      <!-- Tabs Ends -->
                                      <!-- Tabs Starts -->
                                      <div data-pws-tab="BarRating" data-pws-tab-name="Bar rating">
                                        <p>
                                          <a href="http://antenna.io/demo/jquery-bar-rating/examples/">jQuery Bar Rating</a> Plugin works by transforming a standard select field into a rating widget.
                                        </p>
                                        <h4 class="mt-5 mb-4">Usage</h4>
                                        <p>
                                          To use Star rating in your appication, include the following files in &lt;head&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
<link rel="stylesheet" href="http://www.urbanui.com/"></textarea>
                                        <p>
                                        Add the following script files in &lt;body&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                        <p>
                                          To create a rating, add the following code
                                        </p>
                                        <textarea class="multiple-codes">
<select id="example-fontawesome" name="rating" autocomplete="off">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

<script>
  $('#example-fontawesome').barrating({
    theme: 'fontawesome-stars',
    showSelectedRating: false
  });
</script>

                                        </textarea>
                                      </div>
                                      <!-- Tabs Ends -->
                                  </div>
                                  <!-- demo-tabs container ends -->

                                  <!-- New Docs Ends Here -->

                                  <!--Forms starts-->
                                  <hr class="hr">
                                  <h3 class="my-4">Forms</h3>
                                  <div class="demo-tabs">
                                      <!-- Basic elements Starts -->
                                      <div data-pws-tab="basic-elements" data-pws-tab-name="Basic elements">
                                        <p>
                                          The basic form elements can be added to your application as below
                                        </p>
                                        <textarea class="multiple-codes">
<form class="forms-sample">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>&nbsp; We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Example textarea</label>
        <textarea class="form-control p-input" id="exampleTextarea" rows="3">&lt;/textarea&gt;
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>
    <fieldset class="form-group">
        <legend class="mb-4 mt-5">Radio buttons</legend>
        <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Option three is disabled
            </label>
        </div>
    </fieldset>
    <div class="form-check col-12">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Check me out
        </label>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form></textarea>
                                      </div>
                                      <!-- Basic elements Ends -->
                                      <!-- Form validation Starts -->
                                      <div data-pws-tab="validation" data-pws-tab-name="Validation">
                                        <p>
                                            We are using <a href="https://jqueryvalidation.org/">Jquery validation</a> for simple clientside form validation.
                                        </p>
                                        <h4 class="mt-5 mb-4">Usage</h4>
                                        <p>
                                          To use jquery validation in your appication, include the following script files in &lt;body&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                        <p>
                                          The following code shows validation of a simple form
                                        </p>
                                        <textarea class="multiple-codes">
<form class="cmxform" id="commentForm" method="get" action="#">
  <fieldset>
    <div class="form-group">
      <label for="cname">Name (required, at least 2 characters)</label>
      <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
    </div>
    <div class="form-group">
      <label for="cemail">E-Mail (required)</label>
      <input id="cemail" class="form-control" type="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="curl">URL (optional)</label>
      <input id="curl" class="form-control" type="url" name="url">
    </div>
    <div class="form-group">
      <label for="ccomment">Your comment (required)</label>
      <textarea id="ccomment" class="form-control" name="comment" required>&lt;/textarea&gt;
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
  </fieldset>
</form>

<script>
  $.validator.setDefaults({
      submitHandler: function() {
          alert("submitted!");
      }
  });
  $(function() {
      // validate the comment form when it is submitted
      $("#commentForm").validate({
        errorPlacement: function(label, element) {
          label.addClass('text-danger');
          label.insertAfter(element);
        },
        highlight: function(element, errorClass) {
          $(element).parent().addClass('has-danger')
          $(element).addClass('form-control-danger')
        }
      });
  });
</script></textarea>
                                      </div>
                                      <!-- Form validation Ends -->
                                      <!-- Wizard Starts -->
                                      <div data-pws-tab="Wizard" data-pws-tab-name="Wizard">
                                        <p>
                                            We are using <a href="http://www.jquery-steps.com/">Jquery steps</a> in our template to create form addons.
                                            It is an all-in-one wizard plugin that is extremely flexible, compact and feature-rich.
                                        </p>
                                        <h4 class="mt-5 mb-4">Usage</h4>
                                        <p>
                                          To use jquery.steps in your appication, include the following files &lt;body&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                        <p>
                                          The following code generates a simple form wizard
                                        </p>
                                        <textarea class="multiple-codes">
<form id="example-form" action="#">
  <div>
    <h3>Account</h3>
    <section>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm password">
      </div>
    </section>
    <h3>Profile</h3>
    <section>
      <div class="form-group">
        <label for="exampleInputEmail1">First name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <label>Last name</label>
        <input type="password" class="form-control" placeholder="Last name">
      </div>
      <div class="form-group">
        <label>Profession</label>
        <input type="password" class="form-control" placeholder="Profession">
      </div>
    </section>
    <h3>Comments</h3>
    <section>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" rows="3">&lt;/textarea&gt;
      </div>
    </section>
    <h3>Finish</h3>
    <section>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          I agree terms and conditions
        </label>
      </div>
    </section>
  </div>
</form>

<script>
  var form = $("#example-form");
  form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onFinished: function (event, currentIndex) {
          alert("Submitted!");
      }
  });
</script></textarea>
                                      </div>
                                      <!-- Wizard Ends -->
                                      <!-- Repeater Starts -->
                                      <div data-pws-tab="FormRepeater" data-pws-tab-name="Form Repeater">
                                        <p>
                                          <a href="http://briandetering.net/repeater">Jquery Repeater</a> is a an interface to add and remove a repeatable group of input elements.
                                        </p>
                                        <h4 class="mt-5 mb-4">Usage</h4>
                                        <p>
                                        Add the following script files in &lt;body&gt;
                                        </p>
                                        <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                        <p>
                                          To create a Repeater, add the following code
                                        </p>
                                        <textarea class="multiple-codes">
<form class="form-inline repeater">
  <div data-repeater-list="group-a">
      <div data-repeater-item class="d-flex mb-2">
          <label class="sr-only" for="inlineFormInput">Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
          <label class="sr-only" for="inlineFormInputGroup">Username</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <input data-repeater-delete type="button" class="btn btn-danger ml-2" value="Delete" />
      </div>
  </div>
  <input data-repeater-create type="button" class="btn btn-success ml-2 mb-2" value="+" />
</form>

<script>
  $(document).ready(function() {
    $('.repeater').repeater()
  });
</script></textarea>
                                      </div>
                                      <!-- Repeater Ends -->
                                  </div>
                                  <!--Forms ends-->
                                  <!--Advanced form elements starts-->
                                  <hr class="hr">
                                  <h3 class="my-4">Advanced form elements</h3>
                                  <div class="demo-tabs">
                                    <!-- knob Starts -->
                                    <div data-pws-tab="Knob" data-pws-tab-name="knob">
                                      <p>
                                        <a href="http://anthonyterrien.com/demo/knob/">Jquery Knob</a> is a Nice, downward compatible, touchable, jQuery dial.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To create a knob, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<div class="knobify">
  <input type="text" class="dial" value="75" data-angleOffset="90" data-linecap="round">
</div>

<script>
  $(function() {
    $(".dial").knob();
  });
</script></textarea>
                                    </div>
                                    <!-- knob Ends -->
                                    <!-- Tags Starts -->
                                    <div data-pws-tab="tags" data-pws-tab-name="Tags">
                                      <p>
                                          <a href="http://xoxco.com/projects/code/tagsinput/">jQuery-Tags-Input</a> magically convert a simple text input into a cool tag list with this jQuery plugin.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use jQuery-Tags-Input in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To convert an input to tag using jQuery-Tags-Input, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<input name="tags" id="tags" value="London,Canada,Australia,Mexico" />

<script>
  $('#tags').tagsInput({
      'width': '100%',
      'height': '75%',
      'interactive': true,
      'defaultText': 'Add More',
      'removeWithBackspace': true,
      'minChars': 0,
      'maxChars': 20, // if not provided there is no limit
      'placeholderColor': '#666666'
  });
</script></textarea>
                                    </div>
                                    <!-- Tags Ends -->
                                    <!-- Progress bar Starts -->
                                    <div data-pws-tab="progress-bar" data-pws-tab-name="Progress bar">
                                      <p>
                                          With <a href="https://kimmobrunfeldt.github.io/progressbar.js/">ProgressBar.js,</a> it's easy to create responsive and stylish progress bars for the web.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use progressbar.js in your appication, include the following files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To create a progress bar using progressbar.js, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<div id="Progressbar-1" class="mb-4 ui-progress"></div>

<script>
  var bar = new ProgressBar.Line('#Progressbar-1', {
      step: function(state, bar, attachment) {
          bar.path.setAttribute('stroke', state.color);
      }
  });
  var opts = {
      from: {
          width: 0.1,
          color: '#f5f5f5 '
      },
      to: {
          color: '#36af47'
      }
  };
  bar.animate(0.7, opts);
</script></textarea>
                                    </div>
                                    <!-- Progress bar Ends -->
                                    <!-- Ui-slider Starts -->
                                    <div data-pws-tab="UISlider" data-pws-tab-name="UI Slider">
                                      <p>
                                        <a href="https://refreshless.com/nouislider/">noUiSlider</a> is a range slider without bloat
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use NoUISlider in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To create a slider, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<div id="ui-slider" class="slider"></div>

<script>
  var startSlider = document.getElementById('ui-slider');
  noUiSlider.create(startSlider, {
    start: [20, 80],
    range: {
      'min': [0],
      'max': [100]
    }
  });
</script></textarea>
                                    </div>
                                    <!-- Ui slider Ends -->
                                    <!-- Rating Starts -->
                                    <div data-pws-tab="BarRating" data-pws-tab-name="Rating">
                                      <p>
                                        <a href="http://antenna.io/demo/jquery-bar-rating/examples/">jQuery Bar Rating</a> Plugin works by transforming a standard select field into a rating widget.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use Star rating in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
<link rel="stylesheet" href="http://www.urbanui.com/"></textarea>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        To create a simple rating, add the following code
                                      </p>
                                      <textarea class="multiple-codes">
<select id="example-fontawesome" name="rating" autocomplete="off">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

<script>
  $('#example-fontawesome').barrating({
    theme: 'fontawesome-stars',
    showSelectedRating: false
  });
</script></textarea>
                                    </div>
                                    <!-- Rating Ends -->
                                  </div>
                                  <!--advanced form elements ends-->

                                  <!--Additional form elements starts-->
                                  <hr class="hr">
                                  <h3 class="my-4">Additional form elements</h3>
                                  <div class="demo-tabs">
                                    <!-- Tabs Starts -->
                                    <div data-pws-tab="BTMaxLength" data-pws-tab-name="Bootstrap Max-Length">
                                      <p>
                                        <a href="http://mimo84.github.io/bootstrap-maxlength/">Bootstrap MaxLength</a> uses a Twitter Bootstrap label to show a visual feedback to the user about the maximum length of the field where the user is inserting text. Uses the HTML5 attribute "maxlength" to work.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a Maxlength input, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text">

<script>
  $('#defaultconfig').maxlength();
</script></textarea>
                                    </div>
                                    <!-- Tabs Ends -->
                                    <!-- Form mask Starts -->
                                    <div data-pws-tab="form-mask" data-pws-tab-name="Form mask">
                                      <p>
                                          <a href="http://robinherbots.github.io/Inputmask/">Input-mask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use inputmask in your appication, include the following files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        The below code shows an example of input mask for date.
                                      </p>
                                      <textarea class="multiple-codes">
<input class="form-control" data-inputmask="'alias': 'date'" /></textarea>
                                    </div>
                                    <!-- Form mask Ends -->
                                    <!-- Icheck Starts -->
                                    <div data-pws-tab="icheck" data-pws-tab-name="Icheck">
                                      <p>
                                          <a href="http://icheck.fronteed.com/">Icheck</a> is a set of highly customizable checkboxes and radio buttons.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use icheck in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        The following code gives a minimal skin checkbox and radio using icheck.
                                      </p>
                                      <textarea class="multiple-codes">
<div class="icheck">
    <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
    <label for="minimal-checkbox-1">Checkbox 1</label>
</div>
<div class="icheck">
    <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
    <label for="minimal-radio-1">Radio button 1</label>
</div>

<script>
  $('.icheck input').iCheck({
      checkboxClass: 'icheckbox_minimal-blue', //You can change the skin color as needed
      radioClass: 'iradio_minimal',
      increaseArea: '20%'
  });
</script></textarea>
                                    </div>
                                    <!-- Icheck Ends -->
                                    <!-- Typeahead Starts -->
                                    <div data-pws-tab="typeahead" data-pws-tab-name="Typeahead">
                                      <p>
                                        <a href="https://twitter.github.io/typeahead.js/">Typeahead.js</a> is a flexible JavaScript library that provides a strong foundation for building robust typeaheads
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use typeahead.js in your appication, include the following files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                      <p>
                                        A sample typeahead can be generated as below
                                      </p>
                                      <textarea class="multiple-codes">
<div id="typeahead sample">
    <input class="typeahead" type="text" placeholder="States of USA">
</div>

<script>
  //Define substring matcher function
  var substringMatcher = function (strs) {
      return function findMatches(q, cb) {
          var matches, substringRegex;

          // an array that will be populated with substring matches
          matches = [];

          // regex used to determine if a string contains the substring `q`
          substrRegex = new RegExp(q, 'i');

          // iterate through the pool of strings and for any string that
          // contains the substring `q`, add it to the `matches` array
          $.each(strs, function (i, str) {
              if (substrRegex.test(str)) {
                  matches.push(str);
              }
          });

          cb(matches);
      };
  };

  //dataset
  var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
      'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
      'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
      'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
      'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
      'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
      'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
      'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
      'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
  ];

  //Initialisation
  $('#typeahead-sample .typeahead').typeahead({
      hint: true,
      highlight: true,
      minLength: 1
  }, {
      name: 'states',
      source: substringMatcher(states)
  });
</script></textarea>
                                    </div>
                                    <!-- Typeahead Ends -->
                                    <!-- Cropper Starts -->
                                    <div data-pws-tab="cropper" data-pws-tab-name="Cropper">
                                      <p>
                                          <a href="https://fengyuanchen.github.io/cropper/">Cropper</a> is a simple jQuery image cropping plugin.
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                        To use cropper in your appication, include the following files in &lt;head&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To crop an image using cropper, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="cropper-wrapper">
    <img id="cropperExample" src="http://via.placeholder.com/280x280">
</div>
<script>
  $('#cropperExample').cropper({
      aspectRatio: 16 / 9
  });
</script></textarea>
                                  </div>
                                  <!-- Cropper Ends -->
                                  </div>
                                  <!--Additional form elements ends-->

                                  <!-- New Docs Starts Here -->

                                  <hr class="hr">
                                  <h3 class="my-4">Grid</h3>
                                  <div class="demo-tabs">
                                    <!-- Tabs Starts -->
                                    <div data-pws-tab="Colgade" data-pws-tab-name="Colcade Grid">
                                      <p>
                                        <a href="https://github.com/desandro/colcade">Colcade</a> is a simple Lightweight masonry layout
                                      </p>
                                      <h4 class="mt-5 mb-4">Usage</h4>
                                      <p>
                                      Add the following script files in &lt;body&gt;
                                      </p>
                                      <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a responsive, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="grid">
  <div class="grid-col grid-col--1"></div>
  <div class="grid-col grid-col--2"></div>
  <div class="grid-col grid-col--3"></div>
  <div class="grid-col grid-col--4"></div>
  <div class="grid-item grid-item--b"></div>
  <div class="grid-item grid-item--a"></div>
  <div class="grid-item grid-item--c"></div>
  <div class="grid-item grid-item--a"></div>
  <div class="grid-item grid-item--a"></div>
  <div class="grid-item grid-item--b"></div>
  <div class="grid-item grid-item--c"></div>
  <div class="grid-item grid-item--c"></div>
</div>

<script>
  var colcade = new Colcade('.grid', {
  columns: '.grid-col',
  items: '.grid-item'
  });
</script>
                                            </textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Ends Here -->
                                        <!--Icons starts-->
                                        <hr class="hr">
                                        <h3 class="my-4">Icons</h3>
                                        <div class="demo-tabs">
                                            <!-- Font awesome starts -->
                                            <div data-pws-tab="font-awesome" data-pws-tab-name="Font awesome">
                                              <p>
                                                  <a href="http://fontawesome.io/">Font awesome</a> gives you scalable vector icons that can instantly be customized.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use font awesome in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                                To create an address-book icon, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<i class="fa fa-address-book"></textarea>
                                            </div>
                                            <!-- Font awesome Ends -->
                                            <!-- Themify Starts -->
                                            <div data-pws-tab="themify" data-pws-tab-name="Themify icons">
                                              <p>
                                                  <a href="https://themify.me/themify-icons">Themify icons</a> Themify Icons is a complete set of icons for use in web design and apps.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use themify icons in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                                To generate an icon, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<i class="ti-arrow-up"></i></textarea>
                                            </div>
                                            <!-- Themify Ends -->
                                            <!-- Simple line icon Starts -->
                                            <div data-pws-tab="simple-line-icon" data-pws-tab-name="Simple line icons">
                                              <p>
                                                  <a href="http://simplelineicons.com/">Simple line icons</a> is a set of simple and minimal line icons.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use simple line icons in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                                To generate an icon, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<i class="icon-user"></i></textarea>
                                            </div>
                                            <!-- Simple line icon Ends -->
                                            <!-- Flag icon Starts -->
                                            <div data-pws-tab="flag-icon" data-pws-tab-name="Flag icons">
                                              <p>
                                                  <a href="http://flag-icon-css.lip.is/">Flag icons</a> is a A collection of all country flags in SVG — plus the CSS for easier integration.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use simple line icons in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/"/></textarea>
                                              <p>
                                                To generate an icon, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i></textarea>
                                            </div>
                                            <!-- Simple line icon Ends -->
                                        </div>
                                        <!--icons ends-->

                                        <!--Tables starts-->
                                        <hr class="hr">
                                        <h3 class="my-4">Tables</h3>
                                        <div class="demo-tabs">
                                            <!-- Basic table starts -->
                                            <div data-pws-tab="basic-table" data-pws-tab-name="Basic table">
                                              <p>
                                                To create a basic twitter bootstrap table, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<table class="table">
    <thead>
        <tr class="">
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td scope="row">2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td scope="row">3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></textarea>
                                            </div>
                                            <!-- Basic table Ends -->
                                            <!-- bootstrap-table Starts -->
                                            <div data-pws-tab="bootstrap-table" data-pws-tab-name="Bootstrap table">
                                              <p>
                                                  <a href="http://bootstrap-table.wenzhixin.net.cn/">Bootstrap-table</a> is an extended Bootstrap table with radio, checkbox, sort, pagination, and other added features.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use bootstrap-table in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                Activate bootstrap table without writing JavaScript, set data-toggle="table" on a normal table.
                                              </p>
                                              <textarea class="multiple-codes">
<table data-toggle="table">
    <thead>
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Item Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Item 1</td>
            <td>$1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Item 2</td>
            <td>$2</td>
        </tr>
    </tbody>
</table>
</textarea>
                                            </div>
                                            <!-- Bootstrap-table Ends -->
                                            <!-- Js-grid Starts -->
                                            <div data-pws-tab="js-grid" data-pws-tab-name="Js-grid">
                                              <p>
                                                  <a href="http://js-grid.com/">Js-grid</a> creates simple responsive chartsis a lightweight client-side data grid control based on jQuery.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use Js-grid in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create a basic table using Js-grid, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<div id="js-grid"></div>
<script>
  $("#js-grid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      editing: true,
      inserting: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 15,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete the client?",
      controller: db,
      fields: [{
              name: "Name",
              type: "text",
              width: 150
          },
          {
              name: "Age",
              type: "number",
              width: 50
          },
          {
              name: "Address",
              type: "text",
              width: 200
          },
          {
              name: "Country",
              type: "select",
              items: db.countries,
              valueField: "Id",
              textField: "Name"
          },
          {
              name: "Married",
              type: "checkbox",
              title: "Is Married",
              sorting: false
          },
          {
              type: "control"
          }
      ]
  });
</script></textarea>
                                            </div>
                                            <!-- Js-grid Ends -->
                                            <!-- Table-sorter Starts -->
                                            <div data-pws-tab="SortableTable" data-pws-tab-name="Sortable Table">
                                              <p>
                                                <a href="http://tablesorter.com/docs/">Tablesorter</a> is a jQuery plugin for turning a standard HTML table with THEAD and TBODY tags into a sortable table without page refreshes.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use Table in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/">
                                              </textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                              </textarea>
                                              <p>
                                                To create a Table, add the following code
                                              </p>
                                              <textarea class="multiple-codes">

<div class="table-sorter-wrapper">
  <table id="myTable" class="table table-striped table-hover">
    <thead>
      <tr>
        <th class="sortStyle">Last Name</th>
        <th class="sortStyle">First Name</th>
        <th class="sortStyle">Due</th>
        <th class="sortStyle">Web Site</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Smith</td>
        <td>John</td>
        <td>$50.00</td>
        <td>http://www.jsmith.com</td>
      </tr>
      <tr>
        <td>Bach</td>
        <td>Frank</td>
        <td>$50.00</td>
        <td>http://www.frank.com</td>
      </tr>
      <tr>
        <td>Doe</td>
        <td>Jason</td>
        <td>$100.00</td>
        <td>http://www.jdoe.com</td>
      </tr>
      <tr>
        <td>Conway</td>
        <td>Tim</td>
        <td>$50.00</td>
        <td>http://www.timconway.com</td>
      </tr>
    </tbody>
  </table>
</div>

<script>
  $('#myTable').tablesort();
</script>

                                              </textarea>
                                            </div>
                                            <!-- Table-sorter Ends -->
                                        </div>
                                        <!--Tables ends-->

                                        <!-- New Docs Starts Here -->

                                        <hr class="hr">
                                        <h3 class="my-4">Basic UI Elements</h3>
                                        <div class="demo-tabs">
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Button" data-pws-tab-name="Button">
                                            <h5 class="mb-2 mt-4">Button with default color</h5>
                                            <div class="fluid-container py-4">
                                              <button type="button" class="btn btn-primary">Primary</button>
                                              <button type="button" class="btn btn-secondary">Secondary</button>
                                              <button type="button" class="btn btn-success">Success</button>
                                              <button type="button" class="btn btn-info">Info</button>
                                              <button type="button" class="btn btn-warning">Warning</button>
                                              <button type="button" class="btn btn-danger">Danger</button>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="row">
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-secondary">Secondary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
</div></textarea>
                                            <h5 class="mb-2 mt-4">Outlined</h5>
                                            <div class="fluid-container py-4">
                                              <button type="button" class="btn btn-outline-primary">Primary</button>
                                              <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                              <button type="button" class="btn btn-outline-success">Success</button>
                                              <button type="button" class="btn btn-outline-info">Info</button>
                                              <button type="button" class="btn btn-outline-warning">Warning</button>
                                              <button type="button" class="btn btn-outline-danger">Danger</button>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="row">
  <button type="button" class="btn btn-outline-primary">Primary</button>
  <button type="button" class="btn btn-outline-secondary">Secondary</button>
  <button type="button" class="btn btn-outline-success">Success</button>
  <button type="button" class="btn btn-outline-info">Info</button>
  <button type="button" class="btn btn-outline-warning">Warning</button>
  <button type="button" class="btn btn-outline-danger">Danger</button>
</div></textarea>
                                            <h5 class="mb-2 mt-4">Sizes</h5>
                                            <div class="fluid-container py-4">
                                              <button type="button" class="btn btn-primary btn-lg">Large</button>
                                              <button type="button" class="btn btn-primary">Medium</button>
                                              <button type="button" class="btn btn-primary btn-sm">Small</button>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="row">
  <button type="button" class="btn btn-primary btn-lg">Small</button>
  <button type="button" class="btn btn-secondary">Medium</button>
  <button type="button" class="btn btn-success btn-sm">Large</button>
</div></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Accordions" data-pws-tab-name="Accordions">
                                            <h5 class="mb-2 mt-4">Bootstrap Accordion</h5>
                                            <div class="fluid-container py-4">
                                              <div id="accordion" role="tablist" aria-multiselectable="true">
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingOne">
                                                          <h5 class="mb-0">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                              Collapsible Group Item #1
                                                              </a>
                                                          </h5>
                                                      </div>

                                                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                          <div class="card-body">
                                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                              single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                              Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                              raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                              accusamus labore sustainable VHS.
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingTwo">
                                                          <h5 class="mb-0">
                                                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                              Collapsible Group Item #2
                                                              </a>
                                                          </h5>
                                                      </div>
                                                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                          <div class="card-body">
                                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                              single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                              Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                              raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                              accusamus labore sustainable VHS.
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingThree">
                                                          <h5 class="mb-0">
                                                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                              Collapsible Group Item #3
                                                              </a>
                                                          </h5>
                                                      </div>
                                                      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                          <div class="card-body">
                                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                              single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                              Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                              raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                              accusamus labore sustainable VHS.
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                            <textarea class="multiple-codes">
<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
                </a>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                ....
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
                </a>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
                ....
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
                </a>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
                ....
            </div>
        </div>
    </div>
</div></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Dropdown" data-pws-tab-name="Dropdown">
                                            <h5 class="mb-2 mt-4">Bootstrap Dropdown</h5>
                                            <div class="fluid-container py-4">
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div></textarea>
                                            <h5 class="mb-2 mt-4">Dropdown Outlined</h5>
                                            <div class="fluid-container py-4">
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>

                                              <div class="btn-group">
                                                <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="btn-group">
  <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Tabs" data-pws-tab-name="Tabs">
                                            <h5 class="mb-2 mt-4">Bootstrap Tabs</h5>
                                            <div class="fluid-container py-4">
                                              <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                  <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                              </ul>
                                            </div>
                                            <textarea class="multiple-codes">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Modals" data-pws-tab-name="Modals">
                                            <h5 class="mb-2 mt-4">Bootstrap Modals</h5>
                                            <div class="fluid-container py-4">
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal">Launch demo modal</button>
                                              <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <p>This is a modal with default size</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                              <button type="button" class="btn btn-primary">Save changes</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                            <textarea class="multiple-codes">
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This is a modal with default size</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="bootstrap-Pagination" data-pws-tab-name="Pagination">
                                            <h5 class="mb-2 mt-4">Bootstrap Pagination</h5>
                                            <div class="fluid-container py-4">
                                              <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                              </nav>
                                            </div>
                                            <textarea class="multiple-codes">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Ends Here -->
                                        <!-- New Docs Starts Here -->

                                        <hr class="hr">
                                        <h3 class="my-4">Advanced UI Elements</h3>
                                        <div class="demo-tabs">
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Clipboard" data-pws-tab-name="Clipboard">
                                            <p>
                                              <a href="https://clipboardjs.com/">Clipboard</a>, a modern approach to copy text to clipboard
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a ,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<textarea id="clipboardExample2" class="form-control">Hello&lt;/textarea&gt;
<button type="button" class="btn btn-primary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample2">Copy</button>
<button type="button" class="btn btn-danger btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardExample2">Cut</button>

<script>
  var clipboard = new Clipboard('.btn-clipboard');
  clipboard.on('success', function(e) {
      console.log(e);
  });
  clipboard.on('error', function(e) {
      console.log(e);
  });
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="TodoList" data-pws-tab-name="Todo List">
                                            <p>
                                              <a href="http://www.jqueryscript.net/demo/Minimal-To-do-List-Task-Manager-App-Using-jQuery-Local-Storage/">Todolist</a> is a minimal jQuery plugin to create checklist.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a filterable list,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="todo-wrapper">
  <ul id="list-items"></ul>
  <form class="add-items d-flex">
    <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?">
    <button class="add btn btn-primary" type="submit">Add to List</button>
  </form>
</div></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="JustGage" data-pws-tab-name="Just Gage">
                                            <p>
                                              <a href="http://justgage.com/">Just Gage</a> is a handy JavaScript plugin for generating and animating nice & clean gauges.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a gage, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div id="justgage" class="gauge"></div>

<script>
  window.onload = function() {
    var g1 = new JustGage({
      id: "g1",
      value: getRandomInt(0, 100),
      min: 0,
      max: 100,
      title: "Big Fella",
      label: "pounds"
    });
  };
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="bt-tour" data-pws-tab-name="Tour">
                                            <p>
                                              <a href="http://bootstraptour.com/">Bootstrap Tour</a> is the easiest way to show people how to use your website
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use bootstrap tour in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/">
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a filterable list,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<button class="btn btn-primary" id="tourElement1">What is this?</button>
<div class="row mt-3">
  <div class="col-12 col-md-3">
    <input type="text" class="form-control" id="tourElement2" placeholder="Ask a question" />
  </div>
  <div class="col-12 col-md-9">
    <button class="btn btn-primary" id="tourElement3">Ask</button>
  </div>
</div>
<button class="btn btn-primary mt-3" id="tourElement4">Answer</button>

<script>
  (function($) {
      var tour = new Tour({
          steps: [
            {
              element: "#tourElement1",
              title: "Welcome",
              content: "This is an example of bootstrap tour"
            },
            {
              element: "#tourElement2",
              title: "Question",
              content: "Type your question here"
            },
            {
              element: "#tourElement3",
              title: "Ask",
              content: "Click this button to post the question"
            },
            {
              element: "#tourElement4",
              title: "Answer",
              content: "Click here to answer questions."
            }
          ]
      });
      if (tour.ended()) {
          tour.restart();
      } else {
          tour.init();
          tour.start();
      }
  })(jQuery);
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Dragula" data-pws-tab-name="Dragula">
                                            <p>
                                              <a href="https://bevacqua.github.io/dragula/">Dragula</a> ,Drag and drop so simple it hurts
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use Dragula in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a drag n drop list,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div id="dragula-event-left" class="h-100">
  <div>
    Drag me!
  </div>
</div>
<div id="dragula-event-right" class="h-100">
  <div>
    Drag me!
  </div>
</div>

<script>
  (function($) {
      dragula([document.getElementById("dragula-left"), document.getElementById("dragula-right")]);
      dragula([document.getElementById("dragula-event-left"), document.getElementById("dragula-event-right")])
          .on('drop', function(el) {
              el.className += ' bg-danger';
          })
  })(jQuery);
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Starts Here -->

                                        <hr class="hr">
                                        <h3 class="my-4">Media</h3>
                                        <div class="demo-tabs">
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="LightBox" data-pws-tab-name="Lightbox">
                                            <p>
                                              <a href="http://sachinchoolur.github.io/lightGallery/">Light Galary</a> is a customizable, modular, responsive, lightbox gallery plugin for jQuery.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use LightGallery in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/">
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create Lightbox Gallery, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div id="gallery" class="row lightGallery">
  <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
      <img src="http://via.placeholder.com/280x280" />
  </a>
  <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
      <img src="http://via.placeholder.com/280x280" />
  </a>
  <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
      <img src="http://via.placeholder.com/280x280" />
  </a>
  <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
      <img src="http://via.placeholder.com/280x280" />
  </a>
  <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
      <img src="http://via.placeholder.com/280x280" />
  </a>
</div>

<script>
  $("#lightgallery").lightGallery();
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="owl-carousel" data-pws-tab-name="Owl Carousel">
                                            <p>
                                              <a href="https://owlcarousel2.github.io/OwlCarousel2/">Owl Carousel</a> is a touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use Owl Carousel in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a carousel, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="owl-carousel owl-theme nonloop">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

<script>
  $('.owl-carousel').owlCarousel();
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Ends Here -->

                                        <!-- New Docs Starts Here -->

                                        <hr class="hr">
                                        <h3 class="my-4">File Upload</h3>
                                        <div class="demo-tabs">
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Dropify" data-pws-tab-name="Dropify">
                                            <p>
                                              <a href="http://jeremyfagis.github.io/dropify/">Dropify</a> is a simple drag n drop file upload.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use dropify in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/">
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
                                            </textarea>
                                            <p>
                                              To create a Dropify file upload,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
  <input type="file" class="dropify"/>

  <script>
    $('.dropify').dropify();
  </script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="Dropzone" data-pws-tab-name="Dropzone">
                                            <p>
                                              <a href="http://www.dropzonejs.com/">Dropzone</a> is an open source library that provides drag’n’drop file uploads with image previews.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a Dropzone file upload,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<form action="http://www.urbanui.com/file-upload" class="dropzone" id="my-awesome-dropzone"></form>

<script>
  $("#my-awesome-dropzone").dropzone({ url: "/file/post" });
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="jquery-file-upload" data-pws-tab-name="Jquery file upload">
                                            <p>
                                              <a href="http://hayageek.com/docs/jquery-upload-file.php">jQuery File UPload</a> plugin provides Multiple file uploads with progress bar. jQuery File Upload Plugin depends on Ajax Form Plugin, So Github contains source code with and without Form plugin.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use file upload in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/"></textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a Jquery file upload,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="file-upload-wrapper">
  <div id="fileuploader">Upload</div>
</div>

<script>
  $("#fileuploader").uploadFile({
    url: "YOUR_FILE_UPLOAD_URL",
    fileName: "myfile"
  });
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Ends Here -->

                                        <!-- New Docs Starts Here -->

                                        <hr class="hr">
                                        <h3 class="my-4">Form Picker</h3>
                                        <div class="demo-tabs">
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="clock-picker" data-pws-tab-name="Clock Picker">
                                            <p>
                                              We are using <a href="https://tempusdominus.github.io/bootstrap-4/">Tempus Dominus plugin</a> in our template to create beautiful time picker.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use clock picker in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a clock picker,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div class="input-group date" id="timepicker-example" data-target-input="nearest">
  <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker-example"/>
    <div class="input-group-addon input-group-append"><i class="mdi mdi-clock input-group-text"></i></div>
  </div>
</div>

<script>
  $('#timepicker-example').datetimepicker({
    format: 'LT'
  });
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="date-picker" data-pws-tab-name="Date Picker">
                                            <p>
                                              <a href="https://bootstrap-datepicker.readthedocs.io/en/latest/">Bootstrap Date Picker</a> provides a flexible datepicker widget in the Bootstrap style.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use bootstrap date picker in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                            <p>
                                              To create a datepicker, add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<div id="datepicker-popup" class="input-group date datepicker">
  <input type="text" class="form-control">
  <span class="input-group-addon input-group-append border-left">
    <span class="mdi mdi-calendar input-group-text"></span>
  </span>
</div>

<script>
  $('#datepicker-popup').datepicker();
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                          <!-- Tabs Starts -->
                                          <div data-pws-tab="color-picker" data-pws-tab-name="Color Picker">
                                            <p>
                                              <a href="http://www.oss.io/p/amazingSurge/jquery-asColorPicker">AsColor Picker</a> is a jquery plugin that convent input into color picker.
                                            </p>
                                            <h4 class="mt-5 mb-4">Usage</h4>
                                            <p>
                                              To use color picker in your appication, include the following files in &lt;head&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
                                            </textarea>
                                            <p>
                                            Add the following script files in &lt;body&gt;
                                            </p>
                                            <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script> //optional
                                            </textarea>
                                            <p>
                                              To create a color picker,add the following code
                                            </p>
                                            <textarea class="multiple-codes">
<input type='text' class="color-picker" value="#ffe74c" />

<script>
  $('.color-picker').asColorPicker()
</script></textarea>
                                          </div>
                                          <!-- Tabs Ends -->
                                        </div>
                                        <!-- demo-tabs container ends -->

                                        <!-- New Docs Ends Here -->
                                        <!--Form editors starts-->
                                        <hr class="hr">
                                        <h3 class="my-4">Form editors</h3>
                                        <div class="demo-tabs">
                                            <!-- Tinymce Starts -->
                                            <div data-pws-tab="tinymce" data-pws-tab-name="Tinymce">
                                              <p>
                                                  <a href="https://www.tinymce.com/">Tinymce</a> is a full featured web editing tool.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use tinymce in your appication, include the following files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create an editor using tinymce, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<textarea id='tinyMceExample'>&lt;/textarea&gt;

<script>
  tinymce.init({
      selector: '#tinyMceExample',
      height: 500,
      theme: 'modern',
      plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      templates: [{
              title: 'Test template 1',
              content: 'Test 1'
          },
          {
              title: 'Test template 2',
              content: 'Test 2'
          }
      ],
      content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
          '../../../../www.tiny.cloud/css/codepen.min.css'
      ]
  });
</script></textarea>
                                            </div>
                                            <!-- Tinymce Ends -->
                                            <!-- X-editable Starts -->
                                            <div data-pws-tab="x-editable" data-pws-tab-name="X-editable">
                                              <p>
                                                  <a href="https://vitalets.github.io/x-editable/">X-editable</a> allows you to create editable elements on your page. It can be used with any engine (bootstrap, jquery-ui, jquery only) and includes both popup and inline modes.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use x-editable in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create a simple editable text field, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<a href="#" id="username" data-type="text" data-pk="1">awesome</a>

<script>
  $.fn.editable.defaults.mode = 'inline';
  $.fn.editableform.buttons =
      '<button type="submit" class="btn btn-primary btn-sm editable-submit">' +
      '<i class="fa fa-fw fa-check"></i>' +
      '</button>' +
      '<button type="button" class="btn btn-default btn-sm editable-cancel">' +
      '<i class="fa fa-fw fa-times"></i>' +
      '</button>';
  $('#username').editable({
      type: 'text',
      pk: 1,
      name: 'username',
      title: 'Enter username'
  });
</script></textarea>
                                            </div>
                                            <!-- X-editable Ends -->
                                            <!-- Summernote Starts -->
                                            <div data-pws-tab="summernote" data-pws-tab-name="Summernote">
                                              <p>
                                                  <a href="http://summernote.org/">Summernote</a> is a super simple WYSIWYG Editor.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use summernote in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create a summernote editor, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<div id="summernoteExample"></div>

<script>
  $('#summernoteExample').summernote({
      height: 300,
      tabsize: 2
  });
</script></textarea>
                                            </div>
                                            <!-- Summernote Ends -->
                                            <!-- SimpleMde Starts -->
                                            <div data-pws-tab="simplemde" data-pws-tab-name="SimpleMDE">
                                              <p>
                                                  <a href="https://simplemde.com/">SimpleMDE</a> is a simple, beautiful, and embeddable JavaScript Markdown editor.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use simpleMDE in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create an editor using simpleMDE, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<textarea id="simpleMde">Start editing here&lt;/textarea&gt;

<script>
  if($("#simpleMde").length) {
    var simplemde = new SimpleMDE({ element: $("#simpleMde")[0] });
  }
</script></textarea>
                                            </div>
                                            <!-- SimpleMDE Ends -->
                                            <!-- Quill Starts -->
                                            <div data-pws-tab="quill" data-pws-tab-name="Quill">
                                              <p>
                                                  <a href="https://quilljs.com/">Quill</a> is a free, open source WYSIWYG editor built for the modern web.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use quill in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" /></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                To create an editor using Quill, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<div id="quillExample" class="quill-container"></div>

<script>
  var quill = new Quill('#quillExample', {
      modules: {
          toolbar: [
              [{
                  header: [1, 2, false]
              }],
              ['bold', 'italic', 'underline'],
              ['image', 'code-block']
          ]
      },
      placeholder: 'Compose an epic...',
      theme: 'snow' // or 'bubble'
  });
</script></textarea>
                                            </div>
                                            <!-- Quill Ends -->
                                            <!-- Ace Starts -->
                                            <div data-pws-tab="ace" data-pws-tab-name="Ace">
                                              <p>
                                                  <a href="https://ace.c9.io/">Ace</a> is an embeddable code editor written in JavaScript.
                                                  It matches the features and performance of native editors such as Sublime, Vim and TextMate.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use ace editor in your appication, include the following files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script><!--Choose any theme you wish--></textarea>
                                              <p>
                                                To create a code editor using ace with a sample code, add the following code
                                              </p>
                                              <textarea class="multiple-codes">
<div id="aceExample" class="ace-editor">
    var x = add(4, 3); // Function is called, return value will end up in x function add(a, b) { return a + b; // Function returns the sum of a and b } var y = mul(4, 3); // Function is called, return value will end up in y function add(a, b) { return a *
    b; // Function returns the product of a and b }
</div>

<script>
  var editor = ace.edit("aceExample");
  editor.setTheme("ace/theme/chaos"); //set theme
  editor.getSession().setMode("ace/mode/javascript"); //set mode
  document.getElementById('aceExample').style.fontSize='1rem'; //styling
</script></textarea>
                                            </div>
                                            <!-- Ace Ends -->
                                            <!-- Codemirror Starts -->
                                            <div data-pws-tab="codemirror" data-pws-tab-name="CodeMirror">
                                              <p>
                                                  <a href="https://codemirror.net/">CodeMirror</a> is a versatile text editor implemented in JavaScript for the browser.
                                                  It is specialized for editing code, and comes with a number of language modes and addons that implement more advanced editing functionality.
                                              </p>
                                              <h4 class="mt-5 mb-4">Usage</h4>
                                              <p>
                                                To use CodeMirror in your appication, include the following files in &lt;head&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<link rel="stylesheet" href="http://www.urbanui.com/" />
<link rel="stylesheet" href="http://www.urbanui.com/" /><!--Choose a theme you wish--></textarea>
                                              <p>
                                              Add the following script files in &lt;body&gt;
                                              </p>
                                              <textarea class="multiple-codes">
<script src="http://www.urbanui.com/"></script>
<script src="http://www.urbanui.com/"></script></textarea>
                                              <p>
                                                Here is an example of an editor using CodeMirror.
                                              </p>
                                              <textarea class="multiple-codes">
<textarea rows="4" cols="50" name="code-editable" id="code-editable">
  <script>
  var x = 3;
  var y = 4;
  var z = x + y;
  </script>
&lt;/textarea&gt;

<script>
  var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('code-editable'), {
      mode: "javascript",
      theme: "ambiance",
      lineNumbers: true
  });
</script></textarea>
                                            </div>
                                            <!--  CodeMirror Ends -->
                                        </div>
                                        <!--Form editors ends-->
                                      </div> <!-- Card Block Ends Here -->
                                </div>
                        </div>
                    </div>
                </div>
        <!-- partial:../partials/_footer.html -->
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
<script src="../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="../vendors/pwstabs/jquery.pwstabs.min.js"></script>
<script src="../vendors/codemirror/codemirror.js"></script>
<script src="../vendors/codemirror/javascript.js"></script>
<script src="../vendors/codemirror/shell.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../js/off-canvas.js"></script>
<script src="../js/hoverable-collapse.js"></script>
<script src="../js/misc.js"></script>
<script src="../js/settings.js"></script>
<script src="../js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../js/codeEditor.js"></script>
<script src="../js/tabs.js"></script>
<!-- End custom js for this page-->
</body>

</html>
