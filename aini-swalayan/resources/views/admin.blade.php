<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- Page Title  -->
    <title>Aini Swalayan</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.4.0') }}">
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-dark">
            <div class="nk-apps-brand">
                <a href="/" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('assets/img/logo.png') }}" srcset="./images/logo-small2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('assets/img/logo.png') }}" srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item">
                                    <a href="/" class="nk-menu-link" title="Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-md">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link" title="Settings">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                        <a href="#" data-toggle="dropdown" data-offset="50,-60">
                            <div class="user-avatar">
                                <span>AB</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md ml-4">
                            <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text text-soft">info@softnio.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <img class="logo-light logo-img" src="{{ asset('assets/img/logo2.png') }}" alt="logo">
                                </div>
                                <div class="nk-header-app-info">
                                    <span class="sub-text">Aini Swalayan</span>
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    <!-- Menu -->
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item">
                                            <a href="/" class="nk-menu-link">
                                                <span class="nk-menu-text">Home</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Menu -->
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="html/chats.html">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash shared <span>Dashlite-v2</span> with you.</div>
                                                            <div class="nk-notification-time">Just now</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash <span>invited</span> you to edit <span>DashLite</span> folder</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have shared <span>project v2</span> with Parvez.</div>
                                                            <div class="nk-notification-time">7 days ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Subscription</span> renew successfully.</div>
                                                            <div class="nk-notification-time">2 month ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown list-apps-dropdown d-lg-none">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-menu-circled"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="dropdown-body">
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="html/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-dashlite bg-primary text-white"></em></span>
                                                            <span class="list-apps-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/chats.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat-circle bg-info-dim"></em></span>
                                                            <span class="list-apps-title">Chats</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/mailbox.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-inbox bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">Mailbox</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/messages.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat bg-success-dim"></em></span>
                                                            <span class="list-apps-title">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/file-manager.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-folder bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">File Manager</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/components.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-layers bg-secondary-dim"></em></span>
                                                            <span class="list-apps-title">Components</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="/demo2/ecommerce/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-cart bg-danger-dim"></em></span>
                                                            <span class="list-apps-title">Ecommerce Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo4/subscription/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-calendar-booking bg-primary-dim"></em></span>
                                                            <span class="list-apps-title">Subscription Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo5/crypto/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-bitcoin-cash bg-warning-dim"></em></span>
                                                            <span class="list-apps-title">Crypto Wallet Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo6/invest/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-invest bg-blue-dim"></em></span>
                                                            <span class="list-apps-title">HYIP Invest Panel</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-dropdown-body -->
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboards</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Default Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Inventory</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="{{ route('barang.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-property-blank"></em></span>
                                    <span class="nk-menu-text">Data Barang</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('supplier.tampil') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>
                                    <span class="nk-menu-text">Data Supplier</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                                    <span class="nk-menu-text">Pembelian</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Laporan Pembelian</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Penjualan</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                    <span class="nk-menu-text">Penjualan</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Laporan Penjualan</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">SDM</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Data User</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Website Analytics</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Analytics Dashboard.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-lg-7 col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Audience Overview</h6>
                                                            <p>How have your users, sessions, bounce rate metrics trended.</p>
                                                        </div>
                                                        <div class="card-tools shrink-0 d-none d-sm-block">
                                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                                <li class="nav-item"><a href="#" class="nav-link">7 D</a></li>
                                                                <li class="nav-item"><a href="#" class="nav-link active">1 M</a></li>
                                                                <li class="nav-item"><a href="#" class="nav-link">3 M</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-ov">
                                                        <div class="analytic-data-group analytic-ov-group g-3">
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">2.57K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Sessions</div>
                                                                <div class="amount">3.98K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>47.74%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">28.49%</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>12.37%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">7m 28s</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>0.35%</div>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-ov-ck">
                                                            <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                                        </div>
                                                        <div class="chart-label-group ml-5">
                                                            <div class="chart-label">01 Jan, 2020</div>
                                                            <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                                            <div class="chart-label">30 Jan, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-lg-5 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Active Users</h6>
                                                            <p>How do your users visited in the time.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="Users of this month"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-au">
                                                        <div class="analytic-data-group analytic-au-group g-3">
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Monthly</div>
                                                                <div class="amount">9.28K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Weekly</div>
                                                                <div class="amount">2.69K</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Daily (Avg)</div>
                                                                <div class="amount">0.94K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-au-ck">
                                                            <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                                        </div>
                                                        <div class="chart-label-group">
                                                            <div class="chart-label">01 Jan, 2020</div>
                                                            <div class="chart-label">30 Jan, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-lg-5 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Website Performance</h6>
                                                            <p>How has performend this month.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="Performance of this month"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp">
                                                        <div class="analytic-wp-group g-3">
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Bounce Rate <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="BounceRateData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">23.59%</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Pageviews <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="PageviewsData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">5.48</div>
                                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>-1.48%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">New Users <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="NewUsersData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">549</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>6.8%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Time on Site <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="TimeOnSiteData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">3m 35s</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>1.4%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-7 col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Traffic Channel</h6>
                                                            <p>Top traffic channels metrics.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-loose traffic-channel-table">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-channel"><span>Channel</span></div>
                                                        <div class="nk-tb-col nk-tb-sessions"><span>Sessions</span></div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions"><span>Prev Sessions</span></div>
                                                        <div class="nk-tb-col nk-tb-change"><span>Change</span></div>
                                                        <div class="nk-tb-col nk-tb-trend tb-col-sm text-right"><span>Trend</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Organic Search</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>4,305</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>4,129</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>4.29%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-right">
                                                            <div class="traffic-channel-ck ml-auto">
                                                                <canvas class="analytics-line-small" id="OrganicSearchData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Social Media</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>859</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>936</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>15.8%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-right">
                                                            <div class="traffic-channel-ck ml-auto">
                                                                <canvas class="analytics-line-small" id="SocialMediaData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Referrals</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>482</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>793</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>41.3%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-right">
                                                            <div class="traffic-channel-ck ml-auto">
                                                                <canvas class="analytics-line-small" id="ReferralsData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Others</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>138</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>97</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>12.6%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-right">
                                                            <div class="traffic-channel-ck ml-auto">
                                                                <canvas class="analytics-line-small" id="OthersData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Traffic Channel</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="traffic-channel">
                                                        <div class="traffic-channel-doughnut-ck">
                                                            <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                                                        </div>
                                                        <div class="traffic-channel-group g-2">
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Organic Search</span></div>
                                                                <div class="amount">4,305 <small>58.63%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Social Media</span></div>
                                                                <div class="amount">859 <small>23.94%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce"></span><span>Referrals</span></div>
                                                                <div class="amount">482 <small>12.94%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Others</span></div>
                                                                <div class="amount">138 <small>4.49%</small></div>
                                                            </div>
                                                        </div><!-- .traffic-channel-group -->
                                                    </div><!-- .traffic-channel -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Users by Country</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="analytics-map">
                                                        <div class="vector-map" id="worldMap"></div>
                                                        <table class="analytics-map-data-list">
                                                            <tr class="analytics-map-data">
                                                                <td class="country">United States</td>
                                                                <td class="amount">12,094</td>
                                                                <td class="percent">23.54%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">India</td>
                                                                <td class="amount">7,984</td>
                                                                <td class="percent">7.16%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">Turkey</td>
                                                                <td class="amount">6,338</td>
                                                                <td class="percent">6.54%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">Bangladesh</td>
                                                                <td class="amount">4,749</td>
                                                                <td class="percent">5.29%</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Browser Used By Users</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-loose">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Browser</span></div>
                                                        <div class="nk-tb-col text-right"><span>Users</span></div>
                                                        <div class="nk-tb-col"><span>% Users</span></div>
                                                        <div class="nk-tb-col tb-col-sm text-right"><span>Bounce Rate</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-primary icon ni ni-globe"></em>
                                                                <span class="tb-lead">Google Chrome</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>1,641</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="72.84"></div>
                                                                <div class="progress-amount">72.84%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">22.62%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-danger icon ni ni-globe"></em>
                                                                <span class="tb-lead">Mozilla Firefox</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>497</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="7.93"></div>
                                                                <div class="progress-amount">7.93%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">20.49%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-info icon ni ni-globe"></em>
                                                                <span class="tb-lead">Safari Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>187</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="4.87"></div>
                                                                <div class="progress-amount">4.87%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">21.34%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-orange icon ni ni-globe"></em>
                                                                <span class="tb-lead">UC Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>96</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="2.46"></div>
                                                                <div class="progress-amount">2.46%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">20.33%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-blue icon ni ni-globe"></em>
                                                                <span class="tb-lead">Edge / IE</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>28</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="1.14"></div>
                                                                <div class="progress-amount">1.14%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">21.34%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-purple icon ni ni-globe"></em>
                                                                <span class="tb-lead">Other Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>683</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="10.76"></div>
                                                                <div class="progress-amount">10.76%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-right">
                                                            <span class="tb-sub">20.49%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Pages View by Users</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-compact">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Page</span></div>
                                                        <div class="nk-tb-col text-right"><span>Page Views</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>2,879</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/subscription/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>2,094</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>1,634</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/crypto/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>1,497</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/invest/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>1,349</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/subscription/profile.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>984</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>879</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/apps/messages/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>598</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-sub tb-amount"><span>436</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner h-100 stretch flex-column">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Sessions by Device</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="device-status my-auto">
                                                        <div class="device-status-ck">
                                                            <canvas class="analytics-doughnut" id="deviceStatusData"></canvas>
                                                        </div>
                                                        <div class="device-status-group">
                                                            <div class="device-status-data">
                                                                <em data-color="#798bff" class="icon ni ni-monitor"></em>
                                                                <div class="title">Desktop</div>
                                                                <div class="amount">84.5%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                            </div>
                                                            <div class="device-status-data">
                                                                <em data-color="#baaeff" class="icon ni ni-mobile"></em>
                                                                <div class="title">Mobile</div>
                                                                <div class="amount">14.2%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                                                            </div>
                                                            <div class="device-status-data">
                                                                <em data-color="#7de1f8" class="icon ni ni-tablet"></em>
                                                                <div class="title">Tablet</div>
                                                                <div class="amount">1.3%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                                                            </div>
                                                        </div><!-- .device-status-group -->
                                                    </div><!-- .device-status -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-analytics.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('assets/js/libs/jqvmap.js?ver=2.4.0') }}"></script>
</body>

</html>
