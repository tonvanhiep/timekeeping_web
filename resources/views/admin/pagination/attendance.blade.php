<div class="board">
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Office</td>
                <td>Timkeeper</td>
                <td>Date</td>
                <td>Time</td>
                {{-- <td>Status</td> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                @php $dt = new DateTime($item->timekeeping_at); @endphp
                <tr>
                    <td class="name">
                        <h5>{{ $item->last_name }} {{ $item->first_name }}</h5>
                    </td>
                    <td class="id">
                        <p>{{ $item->id }}</p>
                    </td>
                    <td class="office">
                        <p>{{ $item->office_name }}</p>
                    </td>
                    <td class="timekeeper">
                        <p>{{ $item->timekeeper_id }}</p>
                    </td>
                    <td class="date">
                        <p>{{ $dt->format('d/m/Y') }}</p>
                    </td>
                    <td class="time">
                        <p>{{ $dt->format('H:i:s') }}</p>
                    </td>
                    {{-- <td class="status">
                        <p class="pass">Proc...</p>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.components.pagination')
