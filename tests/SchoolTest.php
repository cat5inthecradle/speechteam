<?php

use App\School;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SchoolTest extends TestCase
{
    use DatabaseTransactions;

    public function testThatSchoolIndexShowsAllSchools()
    {
        $schools = factory(School::class, 3)->create();

        $this
            ->visit(route('school.index'));

        foreach($schools as $school) {
            $this->see($school->name);
        }
    }

    public function testThatTeamIndexLinksToTeamPages()
    {
        $school = factory(School::class)->create();

        $this
            ->visit(route('school.index'))
            ->click($school->name)
            ->seePageIs(route('school.show', [ 'school' => $school->id ]));
    }

    public function testThatTeamPagesAreAccessible()
    {
        $school = factory(School::class)->create();

        $this
            ->visit(route('school.show', ['school' => $school->id]))
            ->see($school->title);
    }
}
