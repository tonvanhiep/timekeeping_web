@extends('admin.layout')


@section('title')
    Timesheet
@endsection


@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/report.css');}}">
@endpush


@section('content')
    <h3 class="i-name">Timesheet</h3>

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
                    <td>Name</td>
                    <td>ID</td>
                    <td>Office</td>
                    <td>Department</td>
                    <td>Date</td>
                    <td>Check-In</td>
                    <td>Check-Out</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="name">
                        <h5>Ho Viet Cuong</h5>
                    </td>
                    <td class="id">
                        <p>1912820</p>
                    </td>
                    <td class="office">
                        <p>SSC VietNam</p>
                    </td>
                    <td class="department">
                        <p>Marketing</p>
                    </td>
                    <td class="date">
                        <p>Fri 14-10-2022</p>
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
