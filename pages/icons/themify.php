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
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
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
                  <h4 class="card-title">Arrows & direction icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-up"></i> ti-arrow-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-right"></i> ti-arrow-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-left"></i> ti-arrow-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-down"></i> ti-arrow-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-vertical"></i> ti-arrows-vertical </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-up"></i> ti-angle-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-right"></i> ti-angle-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-left"></i> ti-angle-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-down"></i> ti-angle-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-up"></i> ti-angle-double-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-right"></i> ti-angle-double-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-left"></i> ti-angle-double-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-down"></i> ti-angle-double-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-move"></i> ti-move </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-fullscreen"></i> ti-fullscreen </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-right"></i> ti-arrow-top-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-left"></i> ti-arrow-top-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-corner"></i> ti-arrows-corner </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v"></i> ti-split-v </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v-alt"></i> ti-split-v-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-h"></i> ti-split-h </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-up"></i> ti-hand-point-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-right"></i> ti-hand-point-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-left"></i> ti-hand-point-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-down"></i> ti-hand-point-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-right"></i> ti-back-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-left"></i> ti-back-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-exchange-vertical"></i> ti-exchange-vertical </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Web app icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wand"></i> ti-wand </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save"></i> ti-save </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save-alt"></i> ti-save-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction"></i> ti-direction </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction-alt"></i> ti-direction-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-user"></i> ti-user </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-link"></i> ti-link </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlink"></i> ti-unlink </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trash"></i> ti-trash </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-target"></i> ti-target </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tag"></i> ti-tag </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-desktop"></i> ti-desktop </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tablet"></i> ti-tablet </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mobile"></i> ti-mobile </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-email"></i> ti-email </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-star"></i> ti-star </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-spray"></i> ti-spray </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-signal"></i> ti-signal </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart"></i> ti-shopping-cart </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-settings"></i> ti-settings </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-search"></i> ti-search </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-in"></i> ti-zoom-in </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-out"></i> ti-zoom-out </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cut"></i> ti-cut </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler"></i> ti-ruler </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-pencil"></i> ti-ruler-pencil </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt"></i> ti-ruler-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark"></i> ti-bookmark </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark-alt"></i> ti-bookmark-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reload"></i> ti-reload </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plus"></i> ti-plus </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-minus"></i> ti-minus </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-close"></i> ti-close </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin"></i> ti-pin </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil"></i> ti-pencil </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt"></i> ti-pencil-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-roller"></i> ti-paint-roller </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-bucket"></i> ti-paint-bucket </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-na"></i> ti-na </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall"></i> ti-medall </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall-alt"></i> ti-medall-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker"></i> ti-marker </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker-alt"></i> ti-marker-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-lock"></i> ti-lock </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlock"></i> ti-unlock </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-arrow"></i> ti-location-arrow </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout"></i> ti-layout </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers"></i> ti-layers </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers-alt"></i> ti-layers-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-key"></i> ti-key </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-image"></i> ti-image </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart"></i> ti-heart </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart-broken"></i> ti-heart-broken </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-stop"></i> ti-hand-stop </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-open"></i> ti-hand-open </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-drag"></i> ti-hand-drag </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag"></i> ti-flag </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt"></i> ti-flag-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt-2"></i> ti-flag-alt-2 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eye"></i> ti-eye </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-import"></i> ti-import </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-export"></i> ti-export </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cup"></i> ti-cup </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-crown"></i> ti-crown </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments"></i> ti-comments </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment"></i> ti-comment </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment-alt"></i> ti-comment-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thought"></i> ti-thought </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clip"></i> ti-clip </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check"></i> ti-check </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check-box"></i> ti-check-box </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-camera"></i> ti-camera </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-announcement"></i> ti-announcement </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush"></i> ti-brush </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush-alt"></i> ti-brush-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-palette"></i> ti-palette </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-briefcase"></i> ti-briefcase </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt"></i> ti-bolt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt-alt"></i> ti-bolt-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-blackboard"></i> ti-blackboard </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bag"></i> ti-bag </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-world"></i> ti-world </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wheelchair"></i> ti-wheelchair </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-car"></i> ti-car </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-truck"></i> ti-truck </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-timer"></i> ti-timer </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ticket"></i> ti-ticket </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-up"></i> ti-thumb-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-down"></i> ti-thumb-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-up"></i> ti-stats-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-down"></i> ti-stats-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shine"></i> ti-shine </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right"></i> ti-shift-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left"></i> ti-shift-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right-alt"></i> ti-shift-right-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left-alt"></i> ti-shift-left-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shield"></i> ti-shield </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-notepad"></i> ti-notepad </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-server"></i> ti-server </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pulse"></i> ti-pulse </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-printer"></i> ti-printer </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-power-off"></i> ti-power-off </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plug"></i> ti-plug </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pie-chart"></i> ti-pie-chart </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-panel"></i> ti-panel </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-package"></i> ti-package </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music"></i> ti-music </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music-alt"></i> ti-music-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse"></i> ti-mouse </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse-alt"></i> ti-mouse-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-money"></i> ti-money </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone"></i> ti-microphone </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu"></i> ti-menu </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu-alt"></i> ti-menu-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map"></i> ti-map </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map-alt"></i> ti-map-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-pin"></i> ti-location-pin </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-light-bulb"></i> ti-light-bulb </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info"></i> ti-info </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-infinite"></i> ti-infinite </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-id-badge"></i> ti-id-badge </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hummer"></i> ti-hummer </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-home"></i> ti-home </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help"></i> ti-help </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone"></i> ti-headphone </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrives"></i> ti-harddrives </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrive"></i> ti-harddrive </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gift"></i> ti-gift </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-game"></i> ti-game </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-filter"></i> ti-filter </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-files"></i> ti-files </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-file"></i> ti-file </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zip"></i> ti-zip </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-folder"></i> ti-folder </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-envelope"></i> ti-envelope </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dashboard"></i> ti-dashboard </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud"></i> ti-cloud </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-up"></i> ti-cloud-up </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-down"></i> ti-cloud-down </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clipboard"></i> ti-clipboard </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-calendar"></i> ti-calendar </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-book"></i> ti-book </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bell"></i> ti-bell </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-basketball"></i> ti-basketball </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart"></i> ti-bar-chart </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-archive"></i> ti-archive </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-anchor"></i> ti-anchor </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alert"></i> ti-alert </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alarm-clock"></i> ti-alarm-clock </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-agenda"></i> ti-agenda </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-write"></i> ti-write </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wallet"></i> ti-wallet </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-clapper"></i> ti-video-clapper </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-camera"></i> ti-video-camera </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vector"></i> ti-vector </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-support"></i> ti-support </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stamp"></i> ti-stamp </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-slice"></i> ti-slice </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shortcode"></i> ti-shortcode </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-receipt"></i> ti-receipt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin2"></i> ti-pin2 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin-alt"></i> ti-pin-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt2"></i> ti-pencil-alt2 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eraser"></i> ti-eraser </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more"></i> ti-more </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more-alt"></i> ti-more-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone-alt"></i> ti-microphone-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-magnet"></i> ti-magnet </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-double"></i> ti-line-double </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dotted"></i> ti-line-dotted </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dashed"></i> ti-line-dashed </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ink-pen"></i> ti-ink-pen </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info-alt"></i> ti-info-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help-alt"></i> ti-help-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone-alt"></i> ti-headphone-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gallery"></i> ti-gallery </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-smile"></i> ti-face-smile </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-sad"></i> ti-face-sad </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-credit-card"></i> ti-credit-card </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments-smiley"></i> ti-comments-smiley </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-time"></i> ti-time </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share"></i> ti-share </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share-alt"></i> ti-share-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rocket"></i> ti-rocket </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-new-window"></i> ti-new-window </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss"></i> ti-rss </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss-alt"></i> ti-rss-alt </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Control icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-stop"></i> ti-control-stop </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-shuffle"></i> ti-control-shuffle </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-play"></i> ti-control-play </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-pause"></i> ti-control-pause </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-forward"></i> ti-control-forward </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-backward"></i> ti-control-backward </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-volume"></i> ti-volume </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-forward"></i> ti-control-skip-forward </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-backward"></i> ti-control-skip-backward </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-record"></i> ti-control-record </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-eject"></i> ti-control-eject </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Text editor</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paragraph"></i> ti-paragraph </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-uppercase"></i> ti-uppercase </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-underline"></i> ti-underline </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-text"></i> ti-text </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-Italic"></i> ti-Italic </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-smallcap"></i> ti-smallcap </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list"></i> ti-list </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list-ol"></i> ti-list-ol </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-right"></i> ti-align-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-left"></i> ti-align-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-justify"></i> ti-align-justify </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-center"></i> ti-align-center </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-right"></i> ti-quote-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-left"></i> ti-quote-left </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Layout icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paragraph"></i> ti-paragraph </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-uppercase"></i> ti-uppercase </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-underline"></i> ti-underline </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-text"></i> ti-text </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-Italic"></i> ti-Italic </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-smallcap"></i> ti-smallcap </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list"></i> ti-list </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list-ol"></i> ti-list-ol </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-right"></i> ti-align-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-left"></i> ti-align-left </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-justify"></i> ti-align-justify </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-center"></i> ti-align-center </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-right"></i> ti-quote-right </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-left"></i> ti-quote-left </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Brand icons</h4>
                  <div class="icons-list row">
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr"></i> ti-flickr </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr-alt"></i> ti-flickr-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-instagram"></i> ti-instagram </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-google"></i> ti-google </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-github"></i> ti-github </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-facebook"></i> ti-facebook </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox"></i> ti-dropbox </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox-alt"></i> ti-dropbox-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dribbble"></i> ti-dribbble </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-apple"></i> ti-apple </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-android"></i> ti-android </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-yahoo"></i> ti-yahoo </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trello"></i> ti-trello </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stack-overflow"></i> ti-stack-overflow </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-soundcloud"></i> ti-soundcloud </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis"></i> ti-sharethis </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis-alt"></i> ti-sharethis-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reddit"></i> ti-reddit </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft"></i> ti-microsoft </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft-alt"></i> ti-microsoft-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linux"></i> ti-linux </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-jsfiddle"></i> ti-jsfiddle </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-joomla"></i> ti-joomla </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-html5"></i> ti-html5 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-css3"></i> ti-css3 </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-drupal"></i> ti-drupal </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wordpress"></i> ti-wordpress </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr"></i> ti-tumblr </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr-alt"></i> ti-tumblr-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-skype"></i> ti-skype </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-youtube"></i> ti-youtube </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo"></i> ti-vimeo </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo-alt"></i> ti-vimeo-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter"></i> ti-twitter </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter-alt"></i> ti-twitter-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linkedin"></i> ti-linkedin </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest"></i> ti-pinterest </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest-alt"></i> ti-pinterest-alt </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-logo"></i> ti-themify-logo </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon"></i> ti-themify-favicon </div>
                    <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt </div>
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