<section id="menu">
    <div class="logo">
        <img src="{{asset('assets/img/logoBK.png');}}" alt="">
        <h2>HCMUT</h2>
    </div>
    <ul class="items">
        <li style="{{ $page == 'dashboard' ? 'border-left: 4px solid #fff;' : '' }}"><i class="fa-solid fa-gauge"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li style="{{ $page == 'staff' ? 'border-left: 4px solid #fff;' : '' }}"><i class="fa-regular fa-user"></i><a href="{{route('admin.staff.list')}}">Staff List</a></li>
        <li style="{{ $page == 'attendance' ? 'border-left: 4px solid #fff;' : '' }}"><i class="fa-regular fa-clock"></i><a href="{{route('admin.attendance.list')}}">Attendance</a></li>
        <li style="{{ $page == 'timesheet' ? 'border-left: 4px solid #fff;' : '' }}"><i class="fa-regular fa-file-lines"></i><a href="{{route('admin.timesheet.list')}}">Timesheet</a></li>
        <li style="{{ $page == 'report' ? 'border-left: 4px solid #fff;' : '' }}"><i class="fa-regular fa-file-lines"></i><a href="{{route('admin.report.list')}}">Report</a></li>
    </ul>
</section>
{{-- border-left: 4px solid #fff;
{{ $page == 'dashboard' ? 'fa-solid' : 'fa-regular' }} --}}
