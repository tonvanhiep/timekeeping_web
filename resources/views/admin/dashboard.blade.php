@extends('admin.layout')


@section('title')
    Dashboard
@endsection


@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css');}}">
@endpush


@section('content')
    <h3 class="i-name">Dashboard</h3>

    <div class="values">
        <div class="value-box">
            <i class="fa-solid fa-users"></i>
            <div>
                <h3>{{ $info['employees'] }}</h3>
                <span>Employees</span>
            </div>
        </div>
        <div class="value-box">
            <i class="fa-solid fa-mars"></i>
            <div>
                <h3>{{ $info['male'] }}</h3>
                <span>Male</span>
            </div>
        </div>
        <div class="value-box">
            <i class="fa-solid fa-venus"></i>
            <div>
                <h3>{{ $info['female'] }}</h3>
                <span>Female</span>
            </div>
        </div>
        <div class="value-box">
            <i class="fa-solid fa-toggle-on"></i>
            <div>
                <h3>{{ $info['active'] }}</h3>
                <span>Active</span>
            </div>
        </div>
    </div>
    <p id="url-pagination" hidden>{{ route('admin.dashboard.pagination') }}</p>
    <div id="content">
        @include('admin.pagination.dashboard')
    </div>
@endsection
