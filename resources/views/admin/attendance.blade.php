@extends('admin.layout')


@section('title')
    Attendance
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/attendance.css');}}">
@endsection


@section('content')
    <h3 class="i-name">Real-time Attendance</h3>

    <div class="tool-board">
        <form class="show">
            <label for="show-text">Show</label>
            <div class="show-input">
                <input type="text" list="nrows" size="10" name="show-text">
                <!-- <i class="fa-solid fa-chevron-down"></i> -->
                <datalist id="nrows">
                    <option value="10"></option>
                    <option value="15"></option>
                    <option value="20"></option>
                    <option value="25"></option>
                </datalist>
            </div>
        </form>
        <ul class="print">
            <li><a href="#">CSV</a></li>
            <li><a href="#">PDF</a></li>
            <li><a href="#">PRINT</a></li>
        </ul>
    </div>

    <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>ID Worker</td>
                    <td>Department</td>
                    <td>Position</td>
                    <td>Date</td>
                    <td>Day</td>
                    <td>Time</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
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
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>9:00:22</p>
                    </td>
                    <td class="status">
                        <p class="pass">Pass</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Ton Van Hiep</h5>
                    </td>
                    <td class="email">
                        <p>19521492@gm.uit.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>19521492</p>
                    </td>
                    <td class="depart">
                        <p>Finance</p>
                    </td>
                    <td class="position">
                        <p>Driver</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>9:50:50</p>
                    </td>
                    <td class="status">
                        <p class="failed">Failed</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>N.T.Quang Nhat</h5>
                    </td>
                    <td class="email">
                        <p>quangnhat@tdtu.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>19132387</p>
                    </td>
                    <td class="depart">
                        <p>Guard</p>
                    </td>
                    <td class="position">
                        <p>Parking</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>7:50:50</p>
                    </td>
                    <td class="status">
                        <p class="pass">Pass</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Dang Thai Sanh</h5>
                    </td>
                    <td class="email">
                        <p>thaisanh@ueh.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>19130922</p>
                    </td>
                    <td class="depart">
                        <p>Finance</p>
                    </td>
                    <td class="position">
                        <p>Account</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>10:50:50</p>
                    </td>
                    <td class="status">
                        <p class="failed">Failed</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>Le Ba Khiem</h5>
                    </td>
                    <td class="email">
                        <p>khiemle@gm.uit.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>19919034</p>
                    </td>
                    <td class="depart">
                        <p>Guard</p>
                    </td>
                    <td class="position">
                        <p>Parking</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>7:45:35</p>
                    </td>
                    <td class="status">
                        <p class="pass">Pass</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">
                        <h5>P.T Cam Tu</h5>
                    </td>
                    <td class="email">
                        <p>camtu@ump.edu.vn</p>
                    </td>
                    <td class="id">
                        <p>1912821</p>
                    </td>
                    <td class="depart">
                        <p>Heath</p>
                    </td>
                    <td class="position">
                        <p>Pharmacist</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="day">
                        <p>Fri</p>
                    </td>
                    <td class="time">
                        <p>8:45:35</p>
                    </td>
                    <td class="status">
                        <p class="pass">Pass</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
