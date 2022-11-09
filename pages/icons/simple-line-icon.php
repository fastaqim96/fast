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
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
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
                  <h4 class="card-title">Simple line icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-user"></i>icon-user </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-people"></i>icon-people </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-user-female"></i> icon-user-female </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-user-follow"></i> icon-user-follow </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-user-following"></i> icon-user-following </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-user-unfollow"></i> icon-user-unfollow </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-login"></i> icon-login </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-logout"></i> icon-logout </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-emotsmile"></i> icon-emotsmile </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-phone"></i> icon-phone </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-call-end"></i> icon-call-end </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-call-in"></i> icon-call-in </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-call-out"></i> icon-call-out </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-map"></i> icon-map </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-location-pin"></i> icon-location-pin </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-direction"></i> icon-direction </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-directions"></i> icon-directions </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-compass"></i> icon-compass </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-layers"></i> icon-layers </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-menu"></i> icon-menu </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-list"></i> icon-list </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-options-vertical"></i> icon-options-vertical </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-options"></i> icon-options </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-down"></i> icon-arrow-down </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-left"></i> icon-arrow-left </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-right"></i> icon-arrow-right </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-up"></i> icon-arrow-up </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-up-circle"></i> icon-arrow-up-circle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-left-circle"></i> icon-arrow-left-circle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-right-circle"></i> icon-arrow-right-circle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-arrow-down-circle"></i> icon-arrow-down-circle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-check"></i> icon-check </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-clock"></i> icon-clock </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-plus"></i> icon-plus </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-close"></i> icon-close </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-trophy"></i> icon-trophy </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-screen-smartphone"></i> icon-screen-smartphone </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-screen-desktop"></i> icon-screen-desktop </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-plane"></i> icon-plane </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-notebook"></i> icon-notebook </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-mustache"></i> icon-mustache </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-mouse"></i> icon-mouse </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-magnet"></i> icon-magnet </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-energy"></i> icon-energy </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-disc"></i> icon-disc </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-cursor"></i> icon-cursor </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-cursor-move"></i> icon-cursor-move </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-crop"></i> icon-crop </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-chemistry"></i> icon-chemistry </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-speedometer"></i> icon-speedometer </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-shield"></i> icon-shield </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-screen-tablet"></i> icon-screen-tablet </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-magic-wand"></i> icon-magic-wand </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-hourglass"></i> icon-hourglass </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-graduation"></i> icon-graduation </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-ghost"></i> icon-ghost </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-game-controller"></i> icon-game-controller </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-fire"></i> icon-fire </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-eyeglass"></i> icon-eyeglass </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-envelope-open"></i> icon-envelope-open </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-envelope-letter"></i> icon-envelope-letter </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-bell"></i> icon-bell </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-badge"></i> icon-badge </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-anchor"></i> icon-anchor </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-wallet"></i> icon-wallet </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-vector"></i> icon-vector </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-speech"></i> icon-speech </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-puzzle"></i> icon-puzzle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-printer"></i> icon-printer </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-present"></i> icon-present </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-playlist"></i> icon-playlist </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-pin"></i> icon-pin </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-picture"></i> icon-picture </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-handbag"></i> icon-handbag </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-globe-alt"></i> icon-globe-alt </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-globe"></i> icon-globe </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-folder-alt"></i> icon-folder-alt </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-folder"></i> icon-folder </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-film"></i> icon-film </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-feed"></i> icon-feed </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-drop"></i> icon-drop </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-drawer"></i> icon-drawer </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-docs"></i> icon-docs </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-doc"></i> icon-doc </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-diamond"></i> icon-diamond </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-cup"></i> icon-cup </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-calculator"></i> icon-calculator </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-bubbles"></i> icon-bubbles </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-briefcase"></i> icon-briefcase </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-book-open"></i> icon-book-open </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-basket-loaded"></i> icon-basket-loaded </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-basket"></i> icon-basket </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-bag"></i> icon-bag </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-action-undo"></i> icon-action-undo </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-action-redo"></i> icon-action-redo </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-wrench"></i> icon-wrench </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-umbrella"></i> icon-umbrella </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-trash"></i> icon-trash </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-tag"></i> icon-tag </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-support"></i> .icon-support </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-frame"></i> icon-frame </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-size-fullscreen"></i> icon-size-fullscreen </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-size-actual"></i> icon-size-actual </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-shuffle"></i> icon-shuffle </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-share-alt"></i> icon-share-alt </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-share"></i> icon-share </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-rocket"></i> icon-rocket </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-question"></i> icon-question </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-pie-chart"></i> icon-pie-chart </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-pencil"></i> icon-pencil </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-note"></i> icon-note </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-loop"></i> icon-loop </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-home"></i> icon-home </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-grid"></i> icon-grid </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-graph"></i> icon-graph </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-microphone"></i> icon-microphone </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-music-tone-alt"></i> icon-music-tone-alt </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-music-tone"></i> icon-music-tone </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-earphones-alt"></i> icon-earphones-alt </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-earphones"></i> icon-earphones </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-equalizer"></i> icon-equalizer </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-like"></i> icon-like </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-dislike"></i> icon-dislike </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-start"></i> icon-control-start </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-rewind"></i> icon-control-rewind </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-play"></i> icon-control-play </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-pause"></i> icon-control-pause </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-forward"></i> icon-control-forward </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-control-end"></i> icon-control-end </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-volume-1"></i> icon-volume-1 </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-volume-2"></i> icon-volume-2 </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-volume-off"></i> icon-volume-off </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-calendar"></i> icon-calendar </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-bulb"></i> icon-bulb </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-chart"></i> icon-chart </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-ban"></i> icon-ban </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-bubble"></i> icon-bubble </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-camrecorder"></i> icon-camrecorder </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-camera"></i> icon-camera </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-cloud-download"></i> icon-cloud-download </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-cloud-upload"></i> icon-cloud-upload </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-eye"></i> icon-eye </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-flag"></i> icon-flag </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-heart"></i> icon-heart </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-info"></i> icon-info </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-key"></i> icon-key </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-link"></i> icon-link </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-lock"></i> icon-lock </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-lock-open"></i> icon-lock-open </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-magnifier"></i> icon-magnifier </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-magnifier-add"></i> icon-magnifier-add </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-magnifier-remove"></i> icon-magnifier-remove </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-paper-clip"></i> icon-paper-clip </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-paper-plane"></i> icon-paper-plane </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-power"></i> icon-power </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-refresh"></i> icon-refresh </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-reload"></i> icon-reload </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-settings"></i> icon-settings </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-star"></i> icon-star </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-symbol-female"></i> icon-symbol-female </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-symbol-male"></i> icon-symbol-male </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-target"></i> icon-target </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-credit-card"></i> icon-credit-card </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-paypal"></i> icon-paypal </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-tumblr"></i> icon-social-tumblr </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-twitter"></i> icon-social-twitter </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-facebook"></i> icon-social-facebook </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-instagram"></i> icon-social-instagram </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-linkedin"></i> icon-social-linkedin </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-pinterest"></i> icon-social-pinterest </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-github"></i> icon-social-github </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-google"></i> icon-social-google </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-reddit"></i> icon-social-reddit </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-skype"></i> icon-social-skype </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-dribbble"></i> icon-social-dribbble </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-behance"></i> icon-social-behance </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-foursqare"></i> icon-social-foursqare </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-soundcloud"></i> icon-social-soundcloud </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-spotify"></i> icon-social-spotify </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-stumbleupon"></i> icon-social-stumbleupon </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-youtube"></i> icon-social-youtube </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="preview"> <i class="icon-social-dropbox"></i> icon-social-dropbox </div>
                    </div>
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