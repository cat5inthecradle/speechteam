@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $school->name }}
            </div>
            <div class="panel-body">
                Some information about the school...
            </div>
        </div>
    </div>
</div>
@endsection
