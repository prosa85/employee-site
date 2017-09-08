@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Auth::user()->isAdmin())    
                @include('admin.sidebar')

                <div class="col-md-9">
                @else
                <div class="col-md-12">
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Absence Request Forms</div>
                    <div class="panel-body">
                    <a class="btn btn-primary pull-right" href="/requestforms/create" role="button">new absence request</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Hello {{ Auth::user()->name }} -->
                    <h1>My Absence Requests</h1>
                    <div class="table-responsive">
                        @if(Auth::check())
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>date_of_request</th>
                                        <th>status</th>
                                        <th>type_of_absence</th>
                                        <th>hr_status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( Auth::user()->requestforms()->get() as $request)
                                        <tr>
                                            <td> {{ $request->date_of_request }} </td>
                                            <td> {{ $request->status }} </td>
                                            <td> {{ $request->type_of_absence }} </td>
                                            <td> {{ $request->hours }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
