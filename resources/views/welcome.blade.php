@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="com-md-6">
            <div class="card">
                text
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Contact Form</div>

                <div class="card-body">
                    <form action="/" method="post" encrypt="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                        <div class="err">{{ $errors->first('name') }}</div>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>                        
                        <div class="err">{{ $errors->first('email') }}</div>
                      </div>
                      <div class="form-group">
                        <label for="query">Query Type</label>
                        <select class="form-control" name="query" id="query" value="{{ old('query') }}" required>
                          <option>General Query</option>
                          <option>Account Management</option>
                          <option>Technical Support</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" required>
                        <div class="err">{{ $errors->first('subject') }}</div>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" required>{{ old('message') }}</textarea>
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
