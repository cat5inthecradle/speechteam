<?php

use App\Team;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeamTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
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
            ->seePageIs(route('team.show', [ 'team' => $team->id ]));
    }

    public function testThatTeamPagesAreAccessible()
    {
        $team = factory(Team::class)->create();

        $this
            ->visit(route('team.show', ['team' => $team->id]))
            ->see($team->title);
    }
}
