@extends ('dashboard.index')

@section ('content')

<div class="container">
    <h1>List of Equipments</h1>
    <hr>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipments as $equipment)
            <tr>
                <td>{{ $equipment->id }}</td>
                <td>{{ $equipment->name }}</td>
                <td>{{ $equipment->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection