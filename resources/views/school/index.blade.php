@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Schools</div>

            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>School Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($schools as $school)
                        <tr>
                            <td><a href="{{ route('school.show', ['school_id' => $school->id]) }}">{{ $school->name}}</a></td>
                        </tr>
                        @empty
                        <tr><td colspan='0'>Sorry, no Schools are available.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
