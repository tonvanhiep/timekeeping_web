@extends('admin.layout')


@section('title')
    Staff List
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/staff.css');}}">
@endsection


@section('content')
    <h3 class="i-name">Staff List</h3>

    <div class="tool-board">
        <ul class="print">
            <li><a href="#">CSV</a></li>
            <li><a href="#">PDF</a></li>
            <li><a href="#">PRINT</a></li>
        </ul>
        <div class="btn-add">
            <i class="fa-solid fa-plus"></i>
            <a href="{{route('admin.staff.add')}}">New Employee</a>
        </div>
    </div>

    <div class="search-table">
        <div>
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search" size="10">
        </div>
    </div>

    <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Date of birth</td>
                    <td>Email</td>
                    <td>ID Worker</td>
                    <td>Department</td>
                    <td>Position</td>
                    <td>Date of employment</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="birth">
                        <p>18/03/2001</p>
                    </td>
                    <td class="email">
                        <p>cuong.ho1912820@hcmut.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="depart">
                        <p>Software</p>
                    </td>
                    <td class="position">
                        <p>Web developer</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="address">
                        <p>Viet Nam</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="birth">
                        <p>18/03/2001</p>
                    </td>
                    <td class="email">
                        <p>cuong.ho1912820@hcmut.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="depart">
                        <p>Software</p>
                    </td>
                    <td class="position">
                        <p>Web developer</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="address">
                        <p>Viet Nam</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="birth">
                        <p>18/03/2001</p>
                    </td>
                    <td class="email">
                        <p>cuong.ho1912820@hcmut.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="depart">
                        <p>Software</p>
                    </td>
                    <td class="position">
                        <p>Web developer</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="address">
                        <p>Viet Nam</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="birth">
                        <p>18/03/2001</p>
                    </td>
                    <td class="email">
                        <p>cuong.ho1912820@hcmut.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="depart">
                        <p>Software</p>
                    </td>
                    <td class="position">
                        <p>Web developer</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="address">
                        <p>Viet Nam</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="birth">
                        <p>18/03/2001</p>
                    </td>
                    <td class="email">
                        <p>cuong.ho1912820@hcmut.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="depart">
                        <p>Software</p>
                    </td>
                    <td class="position">
                        <p>Web developer</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="address">
                        <p>Viet Nam</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
