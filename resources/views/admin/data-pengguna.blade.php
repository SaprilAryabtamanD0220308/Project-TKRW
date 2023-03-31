<!DOCTYPE html>
<html lang="en">

<head>
    <title>latanzasport</title>
    @include('template.head')


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 text-gray-800" style="text-align: center; font-family: cambira;">DATA PELANGGAN
                    </h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-success" style="color: white;">
                                <th scope="col">No</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <?php $no = 0;?>
                        @foreach($pengguna as $p)
                        <tbody>
                            <?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$p->nama_pengguna}}</td>
                                <td>{{$p->no_hp}}</td>
                                <td>
                                    <a href="/" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    <a href="/" class="btn btn-sm btn-success"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/" class="btn btn-sm btn-primary"><i
                                            class="fa-sharp fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('template.script')

</body>

</html>