@extends('admin.layout')


@section('title')
    Add Staff
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/add.css');}}">
@endsection


@section('content')
    <h3 class="i-name">Staff List / Add New Staff</h3>

    <div class="board">
        <h4>Add New Staff</h4>
        <div class="input-container">
            <div class="container-top">
                <div class="board-left">
                    <form  class="long">
                        <label for="name">Staff Name</label>
                        <input type="text" name="name">
                    </form>
                    <div class="row">
                        <form>
                            <label for="id">Identification</label>
                            <input type="text" name="id">
                        </form>
                        <form>
                            <label for="gender">Gender</label>
                            <input type="text" name="gender">
                        </form>
                    </div>
                    <div class="row">
                        <form>
                            <label for="designation">Designation</label>
                            <input type="text" name="designation">
                        </form>
                        <form>
                            <label for="nationnality">Nationality</label>
                            <input type="text" name="nationality">
                        </form>
                    </div>
                    <form class="long">
                        <label for="depart">Department</label>
                        <input type="text" name="depart">
                    </form>
                </div>
                <div class="board-right">
                    <form>
                        <label for="number">OGSP No.</label>
                        <input type="text" name="number">
                    </form>
                    <form>
                        <label for="date">OGSP Exp. Date</label>
                        <input type="date" name="date" style="width: 180px">
                    </form>
                    <form>
                        <label for="number">CIDB Reg. No.</label>
                        <input type="text" name="number">
                    </form>
                    <form>
                        <label for="date">CIDB Exp. Date</label>
                        <input type="date" name="date" style="width: 180px">
                    </form>
                    <form>
                        <label for="number">Safety Visa No.</label>
                        <input type="text" name="number">
                    </form>
                </div>
            </div>
            <div class="container-bottom">
                <div class="board-left">
                    <div class="row">
                        <form>
                            <label for="medical">Medical</label>
                            <input type="text" name="medical">
                        </form>
                        <form>
                            <label for="vaccine">Vaccination Status</label>
                            <input type="text" name="vaccine">
                        </form>
                    </div>
                    <div class="row">
                        <form>
                            <label for="safety">Safety Induction</label>
                            <input type="text" name="safety">
                        </form>
                        <form>
                            <label for="date">Date Expired</label>
                            <input type="date" name="date" style="width: 180px">
                        </form>
                    </div>
                </div>
                <div class="board-right">
                    <form>
                        <label for="number">E-Vetting (CGSO)</label>
                        <input type="text" name="number">
                    </form>
                </div>
            </div>
        </div>
        <div class="btn">
            <div class="btn-save">
                <i class="fa-solid fa-floppy-disk"></i>
                <a href="#">Save</a>
            </div>
        </div>
    </div>
@endsection
