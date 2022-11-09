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
  <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-1to10.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-horizontal.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-movie.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-pill.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-reversed.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bars-square.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/bootstrap-stars.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/css-stars.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/examples.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="../../vendors/jquery-bar-rating/fontawesome-stars.css">
  <link rel="stylesheet" href="../../vendors/jquery-asColorPicker/css/asColorPicker.min.css">
  <link rel="stylesheet" href="../../vendors/x-editable/bootstrap-editable.css">
  <link rel="stylesheet" href="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../../vendors/dropify/dropify.min.css">
  <link rel="stylesheet" href="../../vendors/jquery-file-upload/uploadfile.css">
  <link rel="stylesheet" href="../../vendors/jquery-tags-input/jquery.tagsinput.min.css">
  <link rel="stylesheet" href="../../vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body class="sidebar-fixed">
  <div class="container-scroller">
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
                <li class="nav-item"> <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Form</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="basic_elements.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="advanced_elements.html">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Advanced Elements</span>
              <span class="badge badge-success badge-pill">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="validation.html">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Validation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wizard.html">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Wizard</span>
              <span class="badge badge-danger badge-pill">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="text_editor.html">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Text editors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="code_editor.html">
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
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fontawesome rating</h4>
                  <p class="card-description">Simple rating with font-awesome icons</p>
                  <select id="example-fontawesome" name="rating" autocomplete="off">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CSS rating</h4>
                  <p class="card-description">CSS star rating</p>
                  <select id="example-css" name="rating" autocomplete="off">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">1/10 rating</h4>
                  <p class="card-description">Rating from 1 to 10</p>
                  <div class="br-wrapper br-theme-bars-1to10">
                    <select id="example-1to10" name="rating" autocomplete="off" style="display: none;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7" selected="selected">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Movie rating</h4>
                  <p class="card-description">Rating reviews</p>
                  <div class="br-wrapper br-theme-bars-movie mb-4">
                    <select id="example-movie" name="rating" autocomplete="off" style="display: none;">
                      <option value="Bad">Bad</option>
                      <option value="Mediocre">Mediocre</option>
                      <option value="Good" selected="selected">Good</option>
                      <option value="Awesome">Awesome</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Square rating</h4>
                  <p class="card-description">Rating in square options</p>
                  <div class="br-wrapper br-theme-bars-square">
                    <select id="example-square" name="rating" autocomplete="off" style="display: none;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pill rating</h4>
                  <p class="card-description">Rating options as pills</p>
                  <div class="br-wrapper br-theme-bars-pill">
                    <select id="example-pill" name="rating" autocomplete="off" style="display: none;">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reversed rating</h4>
                  <p class="card-description">Rating in reversed order</p>
                  <div class="mb-5">
                    <select id="example-reversed" name="rating" autocomplete="off">
                      <option value="Strongly Agree">Strongly Agree</option>
                      <option value="Agree">Agree</option>
                      <option value="Disagree">Disagree</option>
                      <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal rating</h4>
                  <p class="card-description">Rating as horizontal options</p>
                  <div class="br-wrapper br-theme-bars-horizontal">
                    <select id="example-horizontal" name="rating" autocomplete="off" style="display: none;">
                      <option value="10">10</option>
                      <option value="9">9</option>
                      <option value="8">8</option>
                      <option value="7">7</option>
                      <option value="6">6</option>
                      <option value="5">5</option>
                      <option value="4">4</option>
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1" selected="selected">1</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <!--x-editable starts-->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">X-editable Editor</h4>
                  <p class="card-description">Edit forms inline</p>
                  <div class="template-demo">
                    <form id="editable-form" class="editable-form">
                      <div class="form-group row">
                        <label class="col-6 col-lg-4 col-form-label">Simple text field</label>
                        <div class="col-6 col-lg-8">
                          <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-6 col-lg-4 col-form-label">Empty text field, required</label>
                        <div class="col-6 col-lg-8">
                          <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-6 col-lg-4 col-form-label">Select, local array, custom display</label>
                        <div class="col-6 col-lg-8">
                          <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">not selected</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-6 col-lg-4 col-form-label">Combodate (date)</label>
                        <div class="col-6 col-lg-8">
                          <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth">15/05/1984</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-6 col-lg-4 col-form-label">Textarea, buttons below. Submit by ctrl+enter</label>
                        <div class="col-6 col-lg-8">
                          <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--x-editable ends-->
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <!--form mask starts-->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form mask</h4>
                  <p class="card-description">Gives a preview of input format</p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <div class="col">
                        <label>Date:</label>
                        <input class="form-control" data-inputmask="'alias': 'date'" />
                      </div>
                      <div class="col">
                        <label>Date time:</label>
                        <input class="form-control" data-inputmask="'alias': 'datetime'" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Date with custom placeholder:</label>
                      <input class="form-control" data-inputmask="'alias': 'date','placeholder': '*'" />
                    </div>
                    <div class="form-group">
                      <label>Phone:</label>
                      <input class="form-control" data-inputmask-alias="(+99) 9999-9999"/>
                    </div>
                    <div class="form-group">
                      <label>Currency:</label>
                      <input class="form-control" data-inputmask="'alias': 'currency'" />
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label>Email:</label>
                        <input class="form-control" data-inputmask="'alias': 'email'" />
                      </div>
                      <div class="col">
                        <label>Ip:</label>
                        <input class="form-control" data-inputmask="'alias': 'ip'" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--form mask ends-->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title d-flex">Dropify
                    <small class="ml-auto align-self-end">
                      <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                    </small>
                  </h4>
                  <input type="file" class="dropify" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dropzone</h4>
                  <form action="http://www.urbanui.com/file-upload" class="dropzone d-flex align-items-center" id="my-awesome-dropzone"></form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Jquery file upload</h4>
                  <div class="file-upload-wrapper">
                    <div id="fileuploader">Upload</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="row">
                  <div class="col-lg-4 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title">Color picker (default)</h4>
                      <p class="card-description">Click to select color</p>
                      <input type='text' class="color-picker" value="#ffe74c" />
                    </div>
                  </div>
                  <div class="col-lg-4 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title">Color picker (complex)</h4>
                      <p class="card-description">Advanced options for colorpicker</p>
                      <input type='text' class="color-picker" data-mode="complex" value="#6bf178" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card-body">
                      <h4 class="card-title">Color picker (gradient)</h4>
                      <p class="card-description">Click to select gradient</p>
                      <input type='text' class="color-picker" data-mode="gradient" value="#ff5964" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin d-flex align-items-stretch">
              <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Datepicker (default)</h4>
                      <p class="card-description">Click to open datepicker</p>
                      <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tag strats-->
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Clockpicker (default)</h4>
                      <p class="card-description">A simple clockpicker</p>
                      <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                        <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                          <input type="text" class="form-control datetimepicker-input" data-target="#timepicker-example"/>
                          <div class="input-group-addon input-group-append"><i class="mdi mdi-clock input-group-text"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tag ends-->
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inline datepicker</h4>
                  <p class="card-description">An inline datepicker</p>
                  <div id="inline-datepicker" class="datepicker"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card-body">
                      <h4 class="card-title">Form repeater</h4>
                      <p class="card-description">Click the add button to repeat the form</p>
                      <form class="form-inline repeater">
                        <div data-repeater-list="group-a">
                          <div data-repeater-item class="d-flex mb-2">
                            <label class="sr-only" for="inlineFormInputGroup1">Users</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                              </div>
                              <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup1" placeholder="Add user">
                            </div>
                            <label class="sr-only" for="inlineFormInputGroup1">Password</label>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2" >
                              <i class="mdi mdi-delete"></i>
                            </button>
                          </div>
                        </div>
                        <button data-repeater-create type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2">
                          <i class="mdi mdi-plus"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body">
                      <h4 class="card-title">Input Tag</h4>
                      <p class="card-description">Type to add a new tag</p>
                      <input name="tags" id="tags" value="London,Canada,Australia,Mexico" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="../../vendors/jquery-asColor/jquery-asColor.min.js"></script>
  <script src="../../vendors/jquery-asGradient/jquery-asGradient.min.js"></script>
  <script src="../../vendors/jquery-asColorPicker/jquery-asColorPicker.min.js"></script>
  <script src="../../vendors/x-editable/bootstrap-editable.min.js"></script>
  <script src="../../vendors/moment/moment.min.js"></script>
  <script src="../../vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../vendors/dropify/dropify.min.js"></script>
  <script src="../../vendors/jquery-file-upload/jquery.uploadfile.min.js"></script>
  <script src="../../vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
  <script src="../../vendors/dropzone/dropzone.js"></script>
  <script src="../../vendors/jquery.repeater/jquery.repeater.min.js"></script>
  <script src="../../vendors/inputmask/jquery.inputmask.bundle.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/formpickers.js"></script>
  <script src="../../js/form-addons.js"></script>
  <script src="../../js/x-editable.js"></script>
  <script src="../../js/dropify.js"></script>
  <script src="../../js/dropzone.js"></script>
  <script src="../../js/jquery-file-upload.js"></script>
  <script src="../../js/formpickers.js"></script>
  <script src="../../js/form-repeater.js"></script>
  <script src="../../js/input-mask.js"></script>
  <!-- End custom js for this page-->
  </body>
</html>
