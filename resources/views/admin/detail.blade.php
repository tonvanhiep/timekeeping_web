@extends('admin.layout')


@section('title')
    Timesheet
@endsection


@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/report.css');}}">
@endpush


@section('content')
    <h3 class="i-name">Attendace - detail</h3>

    <form class="filter">
        <div class="filter-date">
            <label for="start-date">From date</label>
            <div class="filter-input">
                <input type="date" name="from" style="font-style: 14px; padding: 5px 10px; border-radius:5px">
            </div>
            <label for="end-date" style="margin-left: 50px">To date</label>
            <div class="filter-input">
                <input type="date" name="to" style="font-style: 14px; padding: 5px 10px; border-radius:5px">
            </div>
            <div class="get-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="submit" value="Filter" style="background:none; color:white">
            </div>
        </div>
    </form>

    <div class="tool-board">
        <form class="show">
            <label for="show-text">Show</label>
            <div class="show-input">
                <input type="text" list="nrows" size="10" name="show-text">
                <!-- <i class="fa-solid fa-chevron-down"></i> -->
            </div>
            <datalist id="nrows">
                <option value="25"></option>
                <option value="50"></option>
                <option value="75"></option>
                <option value="100"></option>
            </datalist>
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
                    <td></td>
                    <td>Date</td>
                    <td>Check-In</td>
                    <td>Check-Out</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr onclick="window.location='127.0.0.1:9000/admin/timesheet/detail/2/attendance'">
                    <td class="weekday">
                        <p>Friday</p>
                    </td>
                    <td class="date">
                        <p>14-10-2022</p>
                    </td>
                    <td class="checkin">
                        <p>9:00:22</p>
                    </td>
                    <td class="checkout">
                        <p>18:25:12</p>
                    </td>
                    <td class="status">
                        <p>OK</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
