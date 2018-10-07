@extends ('dashboard.index')

@section ('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Reservation</h1>
        <hr>

        <form method="POST" action="/requests">
        {{csrf_field() }}

        <div class="form-group">
            <label for="occasion">Event/Occasion</label>
            <input type="text" name="occasion" class="form-control" id="occasion" required>
        </div>
        <div class="form-group">
            <label for="no_of_participants">No. of Participants</label>
            <input type="text" name="no_of_participants" class="form-control" id="no_of_participants" required>
        </div>
        <div class="form-group">
            <label for="datetime_start">Date/Time Start</label>
            <input type="datetime-local" id="datetime_start"
               name="datetime_start" required>
        </div>
        <div class="form-group">
            <label for="datetime_end">Date/Time End</label>
            <input type="datetime-local" id="datetime_end"
               name="datetime_end" required>
        </div>
        <div class="form-group">
            <label for="facility_id">Facility</label>
            <select name="facility_id" id="facility_id">
                <option value=""> </option>
                @foreach($facilities as $facility)
                <option value="{{$facility->id}}">{{$facility->name}}</option>
                @endforeach 
            </select>
        </div>
        
        <div class="form-group">
            <label for="endorsed_by">Endorsed By</label> <br>
            <select name="endorsed_by" id="endorsed_by">
                <option value=""> </option>
                @foreach($endorsers as $endorser)
                <option value="{{$endorser->id}}">{{$endorser->name}}</option>
                @endforeach 
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
</div>

@endsection