@extends ('dashboard.index')

@section ('content')

<div class="container">
    <h1>List of Facilities</h1>
    <hr>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Managed By</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facilities as $facility)
            <tr>
                <td>{{ $facility->id }}</td>
                <td>{{ $facility->name }}</td>
                <td>{{ $facility->description }}</td>
                <td>{{ $facility->capacity }}</td>
                <td>{{ $facility->managed_by }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection