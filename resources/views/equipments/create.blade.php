@extends ('dashboard.index')

@section ('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Equipment</h1>
        <hr>

        <form method="POST" action="/equipments">
        {{csrf_field() }}

        <div class="form-group">
            <label for="name">Equipment Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
</div>

@endsection