<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('images/logojeune.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">JEUNE TV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/') }}">  {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin')? 'menu-open' : ''}} ">
            <a href="#" class="nav-link   {{request()->is('admin')? 'active' : ''}} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href={{ url('/admin') }} class="nav-link {{request()->is('admin')? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>    Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          

            <li class="nav-item has-treeview {{request()->is('admin/categorie') || request()->is('admin/AjouterCategorie')?'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin/categorie') || request()->is('admin/AjouterCategorie')?'active' : ''}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item {{request()->is('admin/categorie') || request()->is('admin/AjouterCategorie')?'active' : ''}}">
                <a  href={{ route('admin.AjouterCategorie') }} class="nav-link {{request()->is('admin/AjouterCategorie')?'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter categorie</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item {{request()->is('admin/categorie') || request()->is('admin/AjouterCategorie')?'active' : ''}}">
                <a href={{ route('admin.categorie') }} class="nav-link {{request()->is('admin/categorie')?'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>
<!--
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/addslider.html" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/sliders.html" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>
-->
<li class="nav-item has-treeview {{request()->is('admin/video')|| request()->is('admin/AjouterVideo')?'menu-open' : ''}}">
  <a href="#" class="nav-link {{request()->is('admin/video') || request()->is('admin/AjouterVideo')?'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Vidéo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a  href={{ route('admin.AjouterVideo') }} class="nav-link  {{request()->is('admin/AjouterVideo')?'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter Vidéo</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href={{ route('admin.video') }} class="nav-link  {{request()->is('admin/video')?'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Vidéo</p>
                </a>
              </li>
            </ul>
          </li>
          <!--
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/orders.html" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
        </ul>
      -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>