@extends('layouts.app')
@section('content')
    <link href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet') }}" />

    <link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet') }}" />
    <!-- loader-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Update</li>
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
            <hr />
            <div class="card border-top border-0 border-4 border-danger">
                <div class="card-body" style="width:100%">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i></div>
                        <h5 class="mb-0 text-danger">Update Doctor Information</h5>
                    </div>
                    <hr>
                    <form class="row g-3" action="{{ route('doctor.update', $doctor->id_doctor) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputFirstName"
                                    name="first_name" value="{{ old('first_name', $doctor->first_name) }}"
                                    placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputLastName"
                                    name="last_name" value="{{ old('last_name', $doctor->last_name) }}"
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhoneNo" class="form-label">Phone No</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputPhoneNo" name="phone_no"
                                    value="{{ old('phone_no', $doctor->phone_no) }}" placeholder="Phone No" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputSpecialist" class="form-label">Specialist</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputSpecialist"
                                    name="specialist" value="{{ old('specialist', $doctor->specialist) }}"
                                    placeholder="Specialist" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="InputGender" class="form-label">Gender</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
                                <select class="form-select" id="InputGender" name="gender"
                                    aria-label="Default select example">
                                    <option value="Male"
                                        {{ old('gender', $doctor->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female"
                                        {{ old('gender', $doctor->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-message'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputEmailAddress"
                                    name="email" value="{{ old('email', $doctor->email) }}"
                                    placeholder="Email Address" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="InputRoomClinic" class="form-label">Room Clinic</label>
                            <select class="form-select" id="InputRoomClinic" name="room_clinic"
                                aria-label="Default select example">
                                <option value="Room 1"
                                    {{ old('room_clinic', $doctor->room_clinic) == 'Room 1' ? 'selected' : '' }}>Room 1
                                </option>
                                <option value="Room 2"
                                    {{ old('room_clinic', $doctor->room_clinic) == 'Room 2' ? 'selected' : '' }}>Room 2
                                </option>
                                <option value="Room 3"
                                    {{ old('room_clinic', $doctor->room_clinic) == 'Room 3' ? 'selected' : '' }}>Room 3
                                </option>
                                <option value="Room 4"
                                    {{ old('room_clinic', $doctor->room_clinic) == 'Room 4' ? 'selected' : '' }}>Room 4
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputBloodTypeDoctor" class="form-label">Blood Type</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i
                                        class="fadeIn animated bx bx-heart"></i></span>
                                <select class="form-select" id="inputBloodTypeDoctor" name="blood_type"
                                    aria-label="Default select example">
                                    <option value="A+"
                                        {{ old('blood_type', $doctor->blood_type) == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A-"
                                        {{ old('blood_type', $doctor->blood_type) == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B+"
                                        {{ old('blood_type', $doctor->blood_type) == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="B-"
                                        {{ old('blood_type', $doctor->blood_type) == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="O+"
                                        {{ old('blood_type', $doctor->blood_type) == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="O-"
                                        {{ old('blood_type', $doctor->blood_type) == 'O-' ? 'selected' : '' }}>O-</option>
                                    <option value="AB+"
                                        {{ old('blood_type', $doctor->blood_type) == 'AB+' ? 'selected' : '' }}>AB+
                                    </option>
                                    <option value="AB-"
                                        {{ old('blood_type', $doctor->blood_type) == 'AB-' ? 'selected' : '' }}>AB-
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputChoosePassword" class="form-label">Choose Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open'></i></span>
                                <input type="password"
                                    class="form-control border-start-0 @error('password') is-invalid @enderror"
                                    id="inputChoosePassword" name="password" placeholder="Choose Password" />
                            </div>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="showPassword"
                                    onclick="togglePasswordVisibility('inputChoosePassword')">
                                <label class="form-check-label" for="showPassword">Show Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent"><i class='bx bxs-lock'></i></span>
                                <input type="password" class="form-control border-start-0" id="inputConfirmPassword"
                                    name="password_confirmation" placeholder="Confirm Password"
                                    onkeyup="checkPasswordMatch();" />
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="showConfirmPassword"
                                    onclick="togglePasswordVisibility('inputConfirmPassword')">
                                <label class="form-check-label" for="showConfirmPassword">Show Password</label>
                            </div>
                            <div id="passwordMessage" class="mt-2" style="color: red;"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress3" class="form-label">Address</label>
                            <textarea class="form-control" id="inputAddress3" name="address" placeholder="Enter Address" rows="3">{{ old('address', $doctor->address) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Photo</label>
                            <div class="card">
                                <div class="card-body text-center">
                                    <input id="image-uploadify" type="file" accept="image/*" name="photo"
                                        style="display: none;">
                                    <div class="imageuploadify well" id="image-container">
                                        <div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i></div>
                                        <div class="imageuploadify-images-list text-center" id="image-preview-container">
                                            <i class="bx bxs-cloud-upload"></i>
                                            <span class="imageuploadify-message">Drag&amp;Drop Your File(s) Here To
                                                Upload</span>
                                        </div>
                                        <button type="button" id="upload-btn" class="btn btn-default">or select file to
                                            upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">Check me out</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger px-5">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-stepper/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2-custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#image-uploadify').imageuploadify();
        })
    </script>
    <script>
        function togglePasswordVisibility(inputId) {
            var input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }

        function checkPasswordMatch() {
            var password = document.getElementById("inputChoosePassword").value;
            var confirmPassword = document.getElementById("inputConfirmPassword").value;
            var message = document.getElementById("passwordMessage");

            if (password !== confirmPassword) {
                message.textContent = "Passwords do not match!";
            } else {
                message.textContent = "";
            }
        }
    </script>
    <script>
        document.getElementById('upload-btn').addEventListener('click', function() {
            document.getElementById('image-uploadify').click();
        });

        document.getElementById('image-uploadify').addEventListener('change', function() {
            const files = this.files;
            const imageContainer = document.getElementById('image-preview-container');
            imageContainer.innerHTML = ''; // Clear previous content

            if (files.length > 0) {
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        const imgElement = document.createElement('img');
                        imgElement.src = event.target.result;
                        imgElement.style.maxHeight = '200px';
                        imgElement.style.margin = '10px';
                        imgElement.alt = 'Selected Image';
                        imageContainer.appendChild(imgElement);
                    }

                    reader.readAsDataURL(file);
                }
            } else {
                // If no files are selected, show the default message
                imageContainer.innerHTML = `
                    <i class="bx bxs-cloud-upload"></i>
                    <span class="imageuploadify-message">Drag&amp;Drop Your File(s) Here To Upload</span>
                `;
            }
        });
    </script>
@endsection
