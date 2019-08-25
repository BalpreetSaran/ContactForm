@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">App Info</div>
                <div class="card-body">
                    <p>In this app, a user can sumbit the contact form and saves the data into database.</p>
                    <p>An admin user is able to check all form submissions after login. They can also download json data from api using basic authentication.</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Form</div>

                <div class="card-body">
                    <form action="/" method="post" encrypt="multipart/form-data">
                        @csrf
                      <div class="form-group row">
                        <label for="name" class="col-sm-2">Name</label>
                        <input type="text" class="form-control col-sm-10" name="name" id="name" value="{{ old('name') }}" required>
                        <div class="err">{{ $errors->first('name') }}</div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2">Email</label>
                        <input type="email" class="form-control col-sm-10" name="email" id="email" value="{{ old('email') }}" required>                        
                        <div class="err">{{ $errors->first('email') }}</div>
                      </div>
                      <div class="form-group row">
                        <label for="query" class="col-sm-2">Query Type</label>
                        <select class="form-control col-sm-10" name="query" id="query" value="{{ old('query') }}" required>
                          <option>General Query</option>
                          <option>Account Management</option>
                          <option>Technical Support</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="subject" class="col-sm-2">Subject</label>
                        <input type="text" class="form-control col-sm-10" name="subject" id="subject" value="{{ old('subject') }}" required>
                        <div class="err">{{ $errors->first('subject') }}</div>
                      </div>
                      <div class="form-group row">
                        <label for="message" class="col-sm-2">Message</label>
                        <textarea class="form-control col-sm-10" name="message" id="message" rows="3" required>{{ old('message') }}</textarea>
                        <div class="err">{{ $errors->first('message') }}</div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
