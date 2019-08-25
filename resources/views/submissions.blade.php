@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-8">
                            Form Submissions
                        </div>
                        <div class="col col-md-4">
                            <form action="/home" method="get">
                                <div class="input-group">
                                    <input type="search" name="search" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-prepend">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>            
                    </div>
                </div>

                <div class="card-body">
                    <table id="sortable" class="table w-100">
                        <thead>
                            <tr>
                                <th class="sort">Submitted at</th>
                                <th class="sort">Name</th>
                                <th class="sort">Email</th>
                                <th class="sort">Query Type</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissions as $submission)
                            <tr>
                                <td>{{ $submission->created_at }}</td>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->email }}</td>
                                <td>{{ $submission->query }}</td>
                                <td>{{ $submission->subject }}</td>
                                <td>{{ $submission->message }}</td>
                            </tr>                                    
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $submissions->links() }}
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
