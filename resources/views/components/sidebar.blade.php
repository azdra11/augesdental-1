
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">AugesIT</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-spa'></i>
                </div>
                <div class="menu-title">Financial Activities</div>
            </a>

        </li>

        <li class="menu-label">User Elements</li>

        <li>
            <a href="javascript:;" class="has-arrow" class="nav-link {{ request()->is('doctor*') ? 'active' : '' }}">
                <div class="parent-icon"><i class="fadeIn animated bx bxs-user-detail"></i>
                </div>
                <div class="menu-title">Doctor</div>
            </a>
            <ul>
                <li> <a href="/doctor" class="nav-link {{ request()->is('doctor*') ? 'active' : '' }}"><i class="bx bx-right-arrow-alt"></i>Doctor Add</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Doctor Schedule</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Doctor Appointment</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Doctor's Income</a>
                </li>

            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-check"></i>

                </div>
                <div class="menu-title">Patient</div>
            </a>
            <ul>
                <li> <a href="#"><i class="fadeIn animated bx bx-user-plus"></i>Patient Add</a>
                </li>
                <li> <a href="#"><i class="fadeIn animated bx bx-calendar-check"></i>Patient
                        Appointment</a>
                </li>
                <li> <a href="#"><i class="fadeIn animated bx bx-video-recording"></i>Patient Medical
                        Record</a>
                </li>

            </ul>
        </li>

        <li class="menu-label">Clinic Setup</li>
        <li>
            <a href="#">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">CLinic Departments</div>
            </a>
        </li>
        <li>
            <a href="{{ route('clinic-room.index') }}">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">CLinic Rooms</div>
            </a>
        </li>

        <li class="menu-label">Setting</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fadeIn animated bx bx-abacus"></i>
                </div>
                <div class="menu-title">Setting</div>
            </a>
            <ul>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>Role Management</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>User Management</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>Application
                        Setting</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>General
                        Setting</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>Currencies</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>Tax Rate</a>
                </li>
                <li> <a href="#" target="_blank"><i class="bx bx-right-arrow-alt"></i>Update</a>
                </li>

            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>