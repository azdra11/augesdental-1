@extends('layouts.app')
@section('content')
    <link href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
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
                        <li class="breadcrumb-item active" aria-current="page">Doctor Add</li>
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
                            <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Doctor Registration</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('doctor.store') }}" method="POST"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="col-md-12">
                                <label for="inputLastName1" class="form-label">Full Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="inputLastName1"
                                        name="name" placeholder="First Name" value="{{ old('name') }}" />
                                </div>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputPhoneNo" class="form-label">Phone No</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-microphone'></i></span>
                                    <input value="{{ old('phone_no') }}" type="text" class="form-control border-start-0"
                                        id="inputPhoneNo" name="phone_no" placeholder="Phone No" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputSpecialist" class="form-label">Specialist</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-microphone'></i></span>
                                    <input value="{{ old('specialist') }}" type="text"
                                        class="form-control border-start-0" id="Specialist" name="specialist"
                                        placeholder="Specialist" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="InputGender" class="form-label">Gender</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-microphone'></i></span>
                                    <select class="form-select" id="InputGender" name="gender"
                                        aria-label="Default select example">
                                        <option selected>---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-message'></i></span>
                                    <input value="{{ old('email') }}" type="text"
                                        class="form-control border-start-0" id="inputEmailAddress" name="email"
                                        placeholder="Email Address" />
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="InputRoomClinic" class="form-label">Room Clinic</label>
                                <select class="form-select" id="InputRoomClinic" name="room_clinic"
                                    aria-label="Default select example">
                                    <option selected>---</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->clinic_room_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputBloodTypeDoctor" class="form-label">Blood
                                    Type</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class="fadeIn animated bx bx-heart"></i></span>

                                    <select class="form-select" id="BloodTypeDoctor" name="blood_type"
                                        aria-label="Default select example">
                                        <option selected>---</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="A-">A-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>

                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Choose Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-lock-open'></i></span>
                                        <input type="password"
                                            class="form-control border-start-0 @error('password') is-invalid @enderror"
                                            id="inputChoosePassword" name="password" placeholder="Choose Password"
                                            required />
                                    </div>
                                    @error('password')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="showPassword"
                                            onclick="togglePasswordVisibility('inputChoosePassword')">
                                        <label class="form-check-label" for="showPassword">Show Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-lock'></i></span>
                                        <input type="password" class="form-control border-start-0"
                                            id="inputConfirmPassword" name="password_confirmation"
                                            placeholder="Confirm Password" required onkeyup="checkPasswordMatch();" />
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="showConfirmPassword"
                                            onclick="togglePasswordVisibility('inputConfirmPassword')">
                                        <label class="form-check-label" for="showConfirmPassword">Show
                                            Password</label>
                                    </div>
                                    <div id="passwordMessage" class="mt-2" style="color: red;"></div>
                                    <!-- Message Element -->
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress3" class="form-label">Address</label>
                                    <textarea class="form-control" id="inputAddress3" name="address" placeholder="Enter Address" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="photo" class="form-label">Photo</label>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <input id="image-uploadify" type="file" accept="image/*"
                                                name="photo" style="display: none;">
                                            <div class="imageuploadify well" id="image-container">
                                                <div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i>
                                                </div>
                                                <div class="imageuploadify-images-list text-center"
                                                    id="image-preview-container">
                                                    <i class="bx bxs-cloud-upload"></i>
                                                    <span class="imageuploadify-message">Drag&amp;Drop Your File(s)
                                                        Here To Upload</span>
                                                </div>
                                                <button type="button" id="upload-btn" class="btn btn-default">or
                                                    select file to upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                                        <label class="form-check-label" for="gridCheck2">Check me
                                            out</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Register</button>
                                </div>
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
                            <h5 class="mb-0 text-primary">DataTable Doctor</h5>
                        </div>
                        <hr>
                        <div class="card-body table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">PhoneNumber</th>
                                        <th scope="col">Room</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach ($users as $data)
                                        <?php $no++; ?>
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->profile->phone_no }}</td>
                                            <td>{{ $data->profile->clinic_room->name ?? '-' }}</td>
                                            <td>
                                                <a href="{{ route('doctor.edit', $data->id) }}"
                                                    class="btn btn-outline-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Ubah">
                                                    <i class="fadeIn animated bx bx-message-square-edit"></i>
                                                </a>
                                                <!-- Delete Button -->
                                                <form action="{{ route('doctor.destroy', $data->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Hapus"
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
