<?php

class TeamFaker
{
    include 'adjectives.php';

    public function adjective()
    {
        return array_rand($this->adjectives);
    }
}
