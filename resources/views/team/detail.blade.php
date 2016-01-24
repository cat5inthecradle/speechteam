@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $team->title }}
            </div>
            <div class="panel-body">
                Some information about the team...
            </div>
        </div>
    </div>
</div>
@endsection
