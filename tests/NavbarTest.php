<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NavbarTest extends TestCase
{
    public function testThatNavbarLinksToAllTheThings()
    {
        $this
            ->visit('/')
            ->see('Teams')
            ->see('Schools')
            ->see('Students');
    }
}
