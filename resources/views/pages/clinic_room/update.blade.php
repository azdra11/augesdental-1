@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">CLINIC</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Clinic Setup</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                <h5 class="mb-0 text-primary">Set Clinic Room</h5>
                            </div>
                            <hr />
                            <form class="row g-3" action="{{ route('clinic-room.update', $clinic_room->id_clinic_room) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="ClinicRoom" class="col-sm-3 col-form-label">Clinic Room Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control border-start-0" id="ClinicRoom"
                                            name="clinic_room_name" placeholder="Clinic Room Name" required value="{{ $clinic_room->clinic_room_name }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="DescriptionRoom" class="col-sm-3 col-form-label">Description Room</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="DescriptionRoom" name="description_room" rows="3" placeholder="Description Room"> {{ $clinic_room->description_room }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="flexSwitchCheckCheckedDanger" class="col-sm-3 col-form-label">Active Room?</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-switch form-check-danger">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDanger" name="active_room" value="1"
                                                {{ $clinic_room->active_room ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckCheckedDanger">Yes!</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
