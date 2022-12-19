<div class="board">
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Office</td>
                <td>Position</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="person">
                        <img src="{{ asset("$item->avatar") }}" alt="avatar {{ $item->first_name }} {{ $item->last_name }}">
                        <div class="person-description">
                            <h5>{{ $item->last_name }} {{ $item->first_name }}</h5>
                            <p>...</p></p>
                        </div>
                    </td>
                    <td class="id">
                        <p>{{ $item->id }}</p>
                    </td>
                    <td class="office">
                        <p>{{ $item->office_name }}</p>
                    </td>
                    <td class="position">
                        <h5>{{ $item->department }}</h5>
                        <p>{{ $item->position }}</p>
                    </td>
                    <td class="status">
                        <p @if ($item->status == 2) style="background-color: darkgray" @endif class="active">{{ statusEmployeeMean($item->status) }}</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.components.pagination')
