<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Apotek</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('temp-admin/')}}/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('temp-admin/')}}/assets/extra-libs/multicheck/multicheck.css">
    <link href="{{url('temp-admin/')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{url('temp-admin/')}}/assets/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('temp-admin/')}}/assets/bootstrap.min.css">
    <link href="{{url('temp-admin/')}}/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{url('/')}}">
                        <!-- Logo icon -->
                  
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{url('temp-admin/')}}/assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="{{url('temp-admin/')}}/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{url('temp-admin/')}}/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Table Klinik</h5>
                                @if(session('success'))
        <div class="alert alert-success" id="alertMessage">
            {{ session('success') }}
        </div>
        @endif
                                <br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button">Tambah Data Pasien</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
       
      </div>
      <div class="modal-body">
        <form action="{{url('admin/save')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Register</label>
            <input type="text" class="form-control" name="no_register"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Nama Pasien</label>
            <input type="text" class="form-control" name="nama"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kepala Keluarga</label>
            <input type="text" class="form-control" name="kepala_keluarga"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NIK</label>
            <input type="number" class="form-control" name="nik"required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat</label>
            <textarea class="form-control" name="alamat"required></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Telepon</label>
            <input type="number" class="form-control" name="notelp"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Diagnosa</label>
            <input type="text" class="form-control" name="diagnosa"required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Therapy</label>
            <input type="text" class="form-control" name="therapy"required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="modal fade" id="modalkeluarga" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
       
      </div>


        @php
            $p = App\Models\Pasien::paginate(10);
        @endphp

      <div class="modal-body">
        <form action="{{url('admin/save')}}" method="post">
            @csrf
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kepala Keluarga</label>
            <br>
            <select required id="keluarga" name="kepala_keluarga" class="select2">
            <option value="">Pilih Kepala Keluarga</option>
                @foreach($p as $j)
                <option name="kepala_keluarga" data-price="{{$j->alamat}}" data-register="{{$j->no_register}}" value="{{$j->kepala_keluarga}}">{{$j->kepala_keluarga}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Register</label>
            <input type="text" class="form-control" name="no_register" required readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Nama Pasien</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" required>
          </div>
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NIK</label>
            <input type="number" class="form-control" name="nik" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat</label>
            <textarea class="form-control" name="alamat" readonly></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Telepon</label>
            <input type="number" class="form-control" name="notelp" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Diagnosa</label>
            <input type="text" class="form-control" name="diagnosa" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Therapy</label>
            <input type="text" class="form-control" name="therapy" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>
                                <button class="btn btn-danger">Hapus Semua Data Pasien</button>
                                <button class="btn btn-info" type="button" data-target="#modalkeluarga" data-toggle="modal">Tambah Pasien Keluarga</button>
                                <a href="{{url('admin/cetakpdf')}}" class="btn btn-success">Export PDF</a>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            @php 
                                            $i=1;
                                            @endphp
                                            <tr>
                                                <td>No</td>
                                                <th>No Register</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kepala Keluarga</th>
                                                <th>Nik</th>
                                                <th>Alamat</th>
                                                <th>No Telp/HP</th>
                                                <th>Diagnosa</th>
                                                <th>Therapy</th>
                                                <th>Tanggal berobat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admin as $q)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$q->no_register}}</td>
                                                <td>{{$q->nama}}</td>
                                                <td>{{$q->tanggal_lahir}}</td>
                                                <td>{{$q->kepala_keluarga}}</td>
                                                <td>{{$q->nik}}</td>
                                                <td>{{$q->alamat}}</td>
                                                <td>{{$q->notelp}}</td>
                                                <td>{{$q->diagnosa}}</td>
                                                <td>{{$q->therapy}}</td>
                                                <td>{{$q->created_at}}</td>
                                                <td><a href="{{url('admin/delete/'.$q->id)}}"
                                                onclick="event.preventDefault();
                                                var choice = confirm(this.getAttribute('data-confirm'));
                                                if (choice) {
                                                document.getElementById('form{{ $q->id }}').submit();
                                                }"
                                                data-confirm="anda yakin ingin menghapus data pasien?" 
                                                class="btn btn-danger fas fa-trash-alt">
                                                </a> 
                                                <form id="form{{ $q->id }}" action="{{url('admin/delete/'.$q->id)}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                </form>
                                                <a data-formkit-toggle="#modal{{$q->id}}" data-toggle="modal" data-target="#modal{{$q->id}}" href="#modal{{$q->id}}"class="btn btn-primary far fa-edit"></a></td>
                                            </tr>
                                            <div class="modal fade" id="modal{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal{{$q->id}}">Tambah Data Pasien</h5>
       
      </div>
      <div class="modal-body">
        <form action="{{url('admin/edit/'.$q->id)}}" method="post">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Register</label>
            <input type="text" class="form-control" name="no_register" value="{{$q->no_register}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Nama Pasien</label>
            <input type="text" class="form-control" name="nama"value="{{$q->nama}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{$q->tanggal_lahir}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kepala Keluarga</label>
            <input type="text" class="form-control" name="kepala_keluarga" value="{{$q->kepala_keluarga}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NIK</label>
            <input type="number" class="form-control" name="nik" value="{{$q->nik}}" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat</label>
            <textarea class="form-control" name="alamat"required>{{$q->alamat}}</textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Telepon</label>
            <input type="number" class="form-control" name="notelp" value="{{$q->notelp}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Diagnosa</label>
            <input type="text" class="form-control" name="diagnosa" value="{{$q->diagnosa}}" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Therapy</label>
            <input type="text" class="form-control" name="therapy" value="{{$q->therapy}}"required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>
             
                                            @endforeach
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('temp-admin/')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('temp-admin/')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('temp-admin/')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{url('temp-admin/')}}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{url('temp-admin/')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{url('temp-admin/')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{url('temp-admin/')}}/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="{{url('temp-admin/')}}/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{url('temp-admin/')}}/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{url('temp-admin/')}}/assets/extra-libs/DataTables/datatables.min.js"></script>
  <script src="{{url('temp-admin/')}}/assets/bootstrap.min.js"></script>
  <script src="{{url('temp-admin/')}}/assets/select2.min.js"></script>
    
 
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
      <script>
        $(function(){
          $('.select2').select2({
            placeholder: "Pilih Kepala Keluarga",
                allowClear: true,
    });
        });
        $(function(){
            $("#keluarga").on("change", function () {
    // ambil data dari elemen option yang dipilih
    const price = $("#keluarga option:selected").data("price");
    const register = $("#keluarga option:selected").data("register");

    // tampilkan data ke element
    $("[name=alamat]").val(price);
    $("[name=no_register]").val(register);
    
});
        });
  </script>



</body>

</html>