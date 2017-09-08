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
                    <div class="panel-heading">Create New requestform</div>
                    <div class="panel-body">
                        <a href="{{ url('/requestforms') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/requestforms', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('RequestForms.requestforms.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
