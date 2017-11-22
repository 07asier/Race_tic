@extends('layouts.app')

@section('content')


    <div class="form-group">
        <label for="status" class="col-sm-3 control-label">Status</label>
        <div class="col-sm-9">
            <select class="form-control" id="status" name="status">
                <option>Paid</option>
                <option>Unpaid</option>
            </select>
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 control-label" for="message">Your message</label>
        <div class="col-md-9">
            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
        </div>
    </div>







@endsection