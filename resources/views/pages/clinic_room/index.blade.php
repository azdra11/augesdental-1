@extends('layouts.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Clinic Room</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-5">
                <hr />
                <div class="card border-top border-0 border-4 border-danger">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Clinic Room Add</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('clinic-room.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="ClinicRoom" class="form-label">Clinic Room Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-start-0" id="ClinicRoom" name="clinic_room_name" placeholder="Clinic Room Name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputDescriptionRoom" class="form-label">Description Room</label>
                                <textarea class="form-control" id="inputDescriptionRoom" name="description_room" placeholder="Description Room" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="flexSwitchCheckCheckedDanger" class="col-sm-3 col-form-label">Active Room?</label>
                                    <div class="form-check form-switch form-check-danger">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDanger" name="active_room" checked="" value="1">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDanger">Yes!</label>
                                    </div>
                            </div>
                            <hr/>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger px-5">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-7">
                <hr />
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">DataTable Clinic Room</h5>
                        </div>
                        <hr>
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Clinic Room Name</th>
                                        <th scope="col">Description Room</th>
                                        <th scope="col">Active Room</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach ($clinic_room as $data)
                                        <?php $no++; ?>
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>{{ $data->clinic_room_name }}</td>
                                            <td>{{ $data->description_room }}</td>
                                            <td>{{ $data->active_room ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a href="{{ route('clinic-room.edit', $data->id) }}"
                                                    class="btn btn-outline-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Ubah">
                                                    <i class="fadeIn animated bx bx-message-square-edit"></i>
                                                </a>
                                                <!-- Delete Button -->
                                                <form action="{{ route('clinic-room.destroy', $data->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus dokter ini?');">
                                                        <i class="fadeIn animated bx bx-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
