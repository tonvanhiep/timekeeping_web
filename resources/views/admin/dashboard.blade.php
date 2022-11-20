@extends('admin.layout')


@section('title')
    Dashboard
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css');}}">
@endsection


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

    <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Position</td>
                    <td>Status</td>
                    <td>ID</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td class="person">
                            <img src="{{asset($item['avatar']);}}" alt="avatar {{ $item['first_name'] }} {{ $item['last_name'] }}">
                            <div class="person-description">
                                <h5>{{ $item['first_name'] }} {{ $item['last_name'] }}</h5>
                                <p>{{ $item['email'] }}</p>
                            </div>
                        </td>
                        <td class="position">
                            <h5>{{ $item['department'] }}</h5>
                            <p>{{ $item['position'] }}</p>
                        </td>
                        <td class="status">
                            <p class="active">{{ $item['status'] }}</p>
                        </td>
                        <td class="id">
                            <p>{{ $item['id'] }}</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                @endforeach

                {{-- <tr>
                    <td class="person">
                        <img src="{{asset('assets/img/hiep.png');}}" alt="">
                        <div class="person-description">
                            <h5>Van Hiep</h5>
                            <p>19521492@gm.uit.edu.vn</p>
                        </div>
                    </td>
                    <td class="position">
                        <h5>Guard</h5>
                        <p>Parking</p>
                    </td>
                    <td class="status">
                        <p class="active">Active</p>
                    </td>
                    <td class="id">
                        <p>19521492</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>

                <tr>
                    <td class="person">
                        <img src="{{asset('assets/img/quangnhat.jpg');}}" alt="">
                        <div class="person-description">
                            <h5>Quang Nhat</h5>
                            <p>quangnhat@tdtu.edu.vn</p>
                        </div>
                    </td>
                    <td class="position">
                        <h5>Guard</h5>
                        <p>Parking</p>
                    </td>
                    <td class="status">
                        <p class="active">Active</p>
                    </td>
                    <td class="id">
                        <p>19132387</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr> --}}

            </tbody>
        </table>
    </div>
@endsection
