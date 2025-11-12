@php
    $segment = Request::segment(3);
    $route = Route::currentRouteName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left">
          <img src="{{ asset(auth()->user()->avatar) }}" style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
        </div>
        <div class="pull-left info" style="margin-top:10px">
          <p> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
    <li class="{{ $route == 'admin.services.index' ? 'active' : '' }}">
      <a href="{{ route('admin.services.index') }}"><i class="fa fa-cogs"></i> <span>Services</span></a>
    </li>
    <li class="{{ $route == 'admin.admin.projects.index' ? 'active' : '' }}">
      <a href="{{ route('admin.admin.projects.index') }}"><i class="fa fa-briefcase"></i> <span>Projets</span></a>
    </li>
    <li class="{{ $route == 'admin.contacts.index' ? 'active' : '' }}">
      <a href="{{ route('admin.contacts.index') }}"><i class="fa fa-envelope"></i> <span>Contacts</span></a>
    </li>
    <li class="{{ $route == 'admin.settings.edit' ? 'active' : '' }}">
      <a href="{{ route('admin.settings.edit') }}"><i class="fa fa-cog"></i> <span>Paramètres du site</span></a>
    </li>
    </ul>
    </section>
</aside>
