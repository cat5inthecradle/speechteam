<?php

use App\Team;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeamTest extends TestCase
{

    use DatabaseTransactions;

    public function testThatTeamsIndexShowsAllTeams()
    {
        $teams = factory(Team::class, 3)->create();

        $this
            ->visit(route('team.index'));

        foreach($teams as $team) {
            $this->see($team->title);
        }
    }

    public function testThatTeamIndexLinksToTeamPages()
    {
        $team = factory(Team::class)->create();

        $this
            ->visit(route('team.index'))
            ->click($team->title)
            ->seePageIs(route('team.show', [ 'id' => $team->id ]));
    }

    public function testThatTeamPagesAreAccessible()
    {
        $team = factory(Team::class)->create();

        $this
            ->visit(route('team.show', ['id' => $team->id]))
            ->see($team->title);
    }

    public function testThatTeamPagesListStudents()
    {
        $team = factory('App\Team')->create();
        $student = factory('App\Student')->create();
        $team->student()->save($student);

        $this
            ->visit(route('team.show', ['id' => $team->id]))
            ->see($student->name);
    }
}
