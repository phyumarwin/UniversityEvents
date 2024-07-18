
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" style="background-color: #00594C;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">University Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo URLROOT; ?>/admin/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
        aria-expanded="false" aria-controls="collapseCategory">
        <i class="fas fa-fw fa-list"></i>
        <span>Category</span>
    </a>
    <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/CategoryController/index">View All</a>
            <a class="collapse-item" href="<?php echo URLROOT; ?>/CategoryController/create">Add Category</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo URLROOT; ?>/EventController/index" data-toggle="collapse" data-target="#collapseEvents"
        aria-expanded="false" aria-controls="collapseEvents">
        <i class="fas fa-fw fa-calendar-alt"></i>
        <span>Events</span>
    </a>
    <div id="collapseActivities" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventController/index">View All</a>
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventController/create">Add Event</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo URLROOT; ?>/EventRegisterController/index" data-toggle="collapse" data-target="#collapseEventRegister"
        aria-expanded="false" aria-controls="collapseEventRegister">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Event Registers</span>
    </a>
    <div id="collapseEventRegister" class="collapse" aria-labelledby="headingEventRegister" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventRegisterController/index">View All</a>
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventRegisterController/create">Add Event Register</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo URLROOT; ?>/ImageController/index" data-toggle="collapse" data-target="#collapseImage"
        aria-expanded="false" aria-controls="collapseImage">
        <i class="fas fa-fw fa-images"></i>
        <span>Images</span>
    </a>
    <div id="collapseImage" class="collapse" aria-labelledby="headingImage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/ImageController/index">View All</a>
            <a class="collapse-item" href="<?php echo URLROOT; ?>/ImageController/create">Add Image</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo URLROOT; ?>/EventSponsorController/index" data-toggle="collapse" data-target="#collapseSponsor"
        aria-expanded="false" aria-controls="collapseSponsor">
        <i class="fas fa-fw fa-handshake"></i>
        <span>Event Sponsors</span>
    </a>
    <div id="collapseSponsor" class="collapse" aria-labelledby="headingSponsor" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventSponsorController/index">View All</a>
            <a class="collapse-item" href="<?php echo URLROOT; ?>/EventSponsorController/create">Add Sponsor</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/AboutController/about">
        <i class="fas fa-fw fa-info-circle"></i>
        <span>About</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/SettingController/setting">
        <i class="fas fa-fw fa-cog"></i>
        <span>Setting</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>