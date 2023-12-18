 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">AUDIT TI DAN SI <sup></sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{ route('home') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('module.index') }}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Modul</span>
         </a>
     </li>


     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('referensi.index') }}">
             <i class="fas fa-fw fa-table"></i>
             <span>Referensi</span></a>
     </li>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item active">
         <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
             aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>User</span>
         </a>
         <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('student.index') }}">Mahasiswa</a>
                 <a class="collapse-item active" href="{{ route('user.index') }}">Admin</a>
             </div>
         </div>
     </li>



 </ul>
 <!-- End of Sidebar -->
