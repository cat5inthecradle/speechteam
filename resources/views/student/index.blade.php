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
                            <th>Student Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td><a href="{{ route('student.show', ['student_id' => $student->id]) }}">{{ $student->name}}</a></td>
                        </tr>
                        @empty
                        <tr><td colspan='0'>Sorry, no Students are available.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
