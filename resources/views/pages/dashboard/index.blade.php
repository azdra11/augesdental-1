@extends('layouts.app')
@section('content')
<div class="page-content">

    <div class="dash-wrapper dash-header">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-xxl-5">
            <div class="col border-end border-light-2">
                <div class="card bg-transparent shadow-none mb-0">
                    <div class="card-body text-center">
                        <p class="mb-1 text-white">Dokter</p>
                        <h3 class="mb-3 text-white">4</h3>
                        <p class="font-13 text-white"><span class="text-success"><i
                                    class="lni lni-arrow-up"></i>Aktif</span></p>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col border-end border-light-2">
                <div class="card bg-transparent shadow-none mb-0">
                    <div class="card-body text-center">
                        <p class="mb-1 text-white">Total Pasien</p>
                        <h3 class="mb-3 text-white">167</h3>
                        <p class="font-13 text-white"><span class="text-success"><i
                                    class="lni lni-arrow-up"></i> Terdaftar</span></p>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col border-end border-light-2">
                <div class="card bg-transparent shadow-none mb-0">
                    <div class="card-body text-center">
                        <p class="mb-1 text-white">Patient Appointment</p>
                        <h3 class="mb-3 text-white">6</h3>
                        <p class="font-13 text-white"><span class="text-danger"></i></span> Hari Ini</p>
                        <!-- <i class="lni lni-arrow-down"></i> -->
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
            <div class="col border-end border-light-2">
                <div class="card bg-transparent shadow-none mb-0">
                    <div class="card-body text-center">
                        <p class="mb-1 text-white">Invoice</p>
                        <h3 class="mb-3 text-white">0</h3>
                        <p class="font-13 text-white"><span class="text-success"><i
                                    class="lni lni-arrow-up"></i> Diterima</span></p>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-transparent shadow-none mb-0">
                    <div class="card-body text-center">
                        <p class="mb-1 text-white">Avg. Session Duration</p>
                        <h3 class="mb-3 text-white">00:15:60</h3>
                        <p class="font-13 text-white"><span class="text-success"></span> Dalam 7 Hari</p>
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-xl-5">
        <div class="col">
            <a href="#">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div
                                class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-user-plus text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14">
                                    </line>
                                    <line x1="23" y1="11" x2="17" y2="11">
                                    </line>
                                </svg>
                            </div>
                            <h4 class="my-1">PATIENT</h4>
                            <p class="mb-0 text-secondary">NEW</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div
                                class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3">
                                <i class="fadeIn animated bx bx-wallet"></i>
                            </div>
                            <h4 class="my-1">INVOICE</h4>
                            <p class="mb-0 text-secondary">ADD</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="widgets-icons rounded-circle mx-auto bg-light-info text-info mb-3">
                                <i class="fadeIn animated bx bx-calendar-alt"></i>
                            </div>
                            <h4 class="my-1">APPOINTMENT</h4>
                            <p class="mb-0 text-secondary">ADD</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div
                                class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3">
                                <i class="lni lni-hospital"></i>
                            </div>
                            <h4 class="my-1">DOCTOR</h4>
                            <p class="mb-0 text-secondary">SCHEDULE</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div
                                class="widgets-icons rounded-circle mx-auto bg-light-warning text-warning mb-3">
                                <i class="lni lni-write"></i>
                            </div>
                            <h4 class="my-1">PROCEDURE</h4>
                            <p class="mb-0 text-secondary">NEW</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Patient Appointment</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Doctor Name</th>
                            <th>Patient Name</th>
                            <th>Appointment Date</th>
                            <th>Appointment Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>drg. Aguswina Sp.Proc</td>
                            <td>Legit Solusi</td>
                            <td>15 Agustus 2024</td>
                            <td>15:00</td>
                            <td><span class="badge rounded-pill bg-danger">Cancel</span></td>
                            <td><button type="button" class="btn btn-outline-success"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Detail"><i
                                        class="fadeIn animated bx bx-grid-alt"></i></button>
                                <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Ubah"><i
                                        class="fadeIn animated bx bx-message-square-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Hapus"><i
                                        class="fadeIn animated bx bx-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>drg. Aguswina Sp.Proc</td>
                            <td>Legit Solusi</td>
                            <td>15 Agustus 2024</td>
                            <td>16:00</td>
                            <td><span class="badge rounded-pill bg-success">Done</span></td>
                            <td><button type="button" class="btn btn-outline-success"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Detail"><i
                                        class="fadeIn animated bx bx-grid-alt"></i></button>
                                <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Ubah"><i
                                        class="fadeIn animated bx bx-message-square-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Hapus"><i
                                        class="fadeIn animated bx bx-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>drg. Aguswina Sp.Proc</td>
                            <td>Legit Solusi</td>
                            <td>15 Agustus 2024</td>
                            <td>17:00</td>
                            <td><span class="badge rounded-pill bg-warning">Active</span></td>
                            <td><button type="button" class="btn btn-outline-success"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Detail"><i
                                        class="fadeIn animated bx bx-grid-alt"></i></button>
                                <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Ubah"><i
                                        class="fadeIn animated bx bx-message-square-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Hapus"><i
                                        class="fadeIn animated bx bx-trash-alt"></i></button>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Doctor Name</th>
                            <th>Patient Name</th>
                            <th>Appointment Date</th>
                            <th>Appointment Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!--end row-->
    <h6 class="mb-0 text-uppercase">DataTable Patients</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Job</th>
                            <th>Phone</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Legit Solusi</td>
                            <td>Laki-laki</td>
                            <td>Wiraswasta</td>
                            <td>081221800812</td>

                            <td>
                                <button type="button" class="btn btn-outline-success"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Detail"><i
                                        class="fadeIn animated bx bx-grid-alt"></i></button>
                                <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Ubah"><i
                                        class="fadeIn animated bx bx-message-square-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-original-title="Hapus"><i
                                        class="fadeIn animated bx bx-trash-alt"></i></button>

                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Job</th>
                            <th>Phone</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection