<?php

use App\Student;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StudentTest extends TestCase
{

    use DatabaseTransactions;

    public function testThatStudentsIndexShowsAllStudents()
    {
        $students = factory(Student::class, 3)->create();

        $this
            ->visit(route('student.index'));

        foreach($students as $student) {
            $this->see($student->name);
        }
    }

    public function testThatStudentIndexLinksToStudentPages()
    {
        $student = factory(Student::class)->create();

        $this
            ->visit(route('student.index'))
            ->click($student->name)
            ->seePageIs(route('student.show', [ 'student' => $student->id ]));
    }

    public function testThatStudentPagesAreAccessible()
    {
        $student = factory(Student::class)->create();

        $this
            ->visit(route('student.show', ['student' => $student->id]))
            ->see($student->name);
    }
}
