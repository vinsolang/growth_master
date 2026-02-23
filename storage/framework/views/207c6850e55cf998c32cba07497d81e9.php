<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?php echo $__env->yieldContent('site-title'); ?></title>
  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="icon"  href="<?php echo e(asset('assets/logo-1.png')); ?>" />
  <!-- Fonts -->
  <link rel="preconnect" href="<?php echo e(url('https://fonts.googleapis.com')); ?>" />
  <link rel="preconnect" href="<?php echo e(url('https://fonts.gstatic.com')); ?>" crossorigin />
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  <link
    href="<?php echo e(url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')); ?>"
    rel="stylesheet" />
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/fonts/boxicons.css')); ?>" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/core.css')); ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/theme-default.css')); ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/pages/page-account-settings.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/pages/page-auth.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/pages/page-icons.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/css/pages/page-misc.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/highlight/highlight-github.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/highlight/highlight.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/apex-charts/apex-charts.css')); ?>" />

  
  <script src="https://cdn.tailwindcss.com"></script>

  
  <link rel="stylesheet" href="<?php echo e(url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')); ?>">

  
  <script src="<?php echo e(url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js')); ?>"></script>

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />

  
  <script src="<?php echo e(asset('js/config.js')); ?>"></script>
 <!-- CKEditor 5 Classic CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="<?php echo e(route('home')); ?>" class="app-brand-link">
            
            <div class="logo flex justify-center items-center py-10 ml-5">
              <img src="<?php echo e(asset('assets/logo.png')); ?>" alt="" style="width: 90px; height: 90px;">
            </div>


          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul  class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Layouts -->
          

           <!-- Menu -->
          <li class="menu-item">
              <a href="<?php echo e(route('menu')); ?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-menu"></i>
                  <div>Menu</div>
              </a>
          </li>


          <li class="menu-item">
            <a href="<?php echo e(route('banner.index')); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-images"></i>
              <div data-i18n="Layouts">Banner</div>
            </a>

            <ul class="menu-sub d-none">
              <li class="menu-item">
                <a href="<?php echo e(route('banner.index')); ?>" class="menu-link">
                  <div data-i18n="Without menu">View Banner</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo e(route('banner.create')); ?>" class="menu-link">
                  <div data-i18n="Without menu">Add Banner</div>
                </a>
              </li>
            </ul>
          </li>

          
          <!-- Admin -->
          <li class="menu-item">
              <a href="<?php echo e(route('homecontent')); ?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home"></i>
                  <div>Home</div>
              </a>
          </li>

          <!-- Member ship -->
          <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-trending-up"></i>
                  <div><?php echo e($getMenu[0]->menu_1); ?></div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item">
                      <a href="<?php echo e(route('whyjoin')); ?>" class="menu-link">
                          <div><?php echo e($getMenu[0]->menu_2); ?></div>
                      </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php echo e(route('approachcontent')); ?>" class="menu-link">
                      <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_3); ?></div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php echo e(route('reviewcontent')); ?>" class="menu-link">
                      <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_4); ?></div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php echo e(route('peergroupcontent')); ?>" class="menu-link">
                      <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_5); ?></div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                      <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_6); ?></div>
                    </a>
                  </li>
              </ul>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-clipboard"></i>
              <div data-i18n="Layouts"><?php echo e($getMenu[0]->menu_7); ?></div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?php echo e(route('programcontent')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_8); ?></div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://www.kicpaa.org/en/atq-program/" class="menu-link" target="_blank">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_9); ?></div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_10); ?></div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="<?php echo e(route('event.index')); ?>" class="menu-link">
             <i class="menu-icon tf-icons bx bx-calendar-event"></i>
              <div data-i18n="Layouts"><?php echo e($getMenu[0]->menu_11); ?></div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
             <i class="menu-icon tf-icons bx bx-search-alt"></i>
              <div data-i18n="Layouts"><?php echo e($getMenu[0]->menu_12); ?></div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?php echo e(route('about.admin')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_13); ?></div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo e(route('leaderships.admin')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_14); ?></div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?php echo e(route('c_e_o_climbs')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_15); ?></div>
                </a>
              </li>
            </ul>
          </li>

           <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-check-shield"></i>
              <div data-i18n="Layouts"><?php echo e($getMenu[0]->menu_16); ?></div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?php echo e(route('leadgroup')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_17); ?></div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo e(route('mentorsqualifications')); ?>" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_18); ?></div>
                </a>
              </li>
              <li class="menu-item">
                <a href="" class="menu-link">
                  <div data-i18n="Without menu"><?php echo e($getMenu[0]->menu_19); ?></div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="<?php echo e(route('view_faqs')); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-help-circle"></i>
              <div data-i18n="Layouts">FAQs</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="<?php echo e(route('helpsction.index')); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div data-i18n="Layouts">Help Section</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="<?php echo e(route('view_team')); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-group"></i>
              <div data-i18n="Layouts">People</div>
            </a>
          </li>




          <!-- Layouts -->
          
          
          
          <!-- Layouts -->
          

          <!-- Layouts -->
          

          <!-- Layouts -->
          

          <!-- Layouts -->
          


          <!-- Layouts -->
          

          <!-- Layouts -->
          

          <!-- Layouts -->
          
          <!-- Layouts -->
          
          <!-- Layouts -->
          <li class="menu-item relative">
            <a href="javascript:void(0);" class="menu-link menu-toggle flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <i class="menu-icon tf-icons bx bx-check-shield"></i>
                    <div data-i18n="Layouts">Submitting</div>
                </div>

                
                <?php
                    $submittingCount = \App\Models\Membership::count(); // total submissions
                ?>
                <?php if($submittingCount > 0): ?>
                    <span class="inline-flex relative -top-2 items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-600 rounded-full">
                        <?php echo e($submittingCount); ?>

                    </span>
                <?php endif; ?>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?php echo e(route('memberships.index')); ?>" class="menu-link">
                        <div data-i18n="Without menu">View</div>
                    </a>
                </li>
            </ul>
        </li>



          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-check-shield"></i>
              <div data-i18n="Layouts">Chair Contact</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?php echo e(route('chair.contact.index')); ?>" class="menu-link">
                  <div data-i18n="Without menu">View</div>
                </a>
              </li>
            </ul>
          </li>


           <!-- Layouts -->
          
          
          <!-- Profile -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user text-xl"></i>
              <div data-i18n="Layouts">Profile</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="<?php echo e(route('profile')); ?>" class="menu-link">
                  <div>View Profile</div>
                </a></li>
            </ul>
          </li>



        </ul>
      </aside>
      <!-- / Menu -->
      

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <!-- Toggle Button -->
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" id="menuToggle">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <h4 class="page-main-title m-0 fw-bold">
                <?php echo $__env->yieldContent('page-main-title'); ?>
              </h4>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/profile/<?php echo e(Auth::User()->profile); ?>" alt
                      class="w-64 h-64 rounded-full object-contain" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../assets/profile/<?php echo e(Auth::User()->profile); ?>" alt
                              class="w-[100px] h-[100px] rounded-full object-contain" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"></span>
                          <small class="text-muted"><?php echo e(Auth::User()->username); ?></small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="<?php echo e(asset('vendor/libs/jquery/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/popper/popper.js')); ?>"></script>

  <script src="<?php echo e(asset('vendor/js/bootstrap.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

  <script src="<?php echo e(asset('vendor/js/menu.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/js/helpers.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/popper/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/masonry/masonry.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/jquery/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/highlight/highlight.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
  <!-- endbuild -->


  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>
  <script src="<?php echo e(asset('js/theme.js')); ?>"></script>

  
  <script src="<?php echo e(url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')); ?>"></script>

  <!-- Page JS -->
  <script src="<?php echo e(asset('js/form-basic-inputs.js')); ?>"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="<?php echo e(url('https://buttons.github.io/buttons.js')); ?>"></script>
  
  

  <script src="<?php echo e(asset('js/dashboards-analytics.js')); ?>"></script>
  <script src="<?php echo e(asset('js/extended-ui-perfect-scrollbar.js')); ?>"></script>
  <script src="<?php echo e(asset('js/form-basic-inputs.js')); ?>"></script>
  <script src="<?php echo e(asset('js/pages-account-settings-account.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ui-modals.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ui-popover.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ui-toasts.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/admin.blade.php ENDPATH**/ ?>