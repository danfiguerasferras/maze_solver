<?php

/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 17/12/2017
 * Time: 8:48
 */

require "maze.php";
require "player.php";

class requestReader
{
    var $request='{
    "game": {
        "id": "uuid"
    },
    "player": {
        "id": "uuid",
        "name": "string",
        "position": {
            "y": 10,
            "x": 10
        },
        "previous": {
            "y": 10,
            "x": 9
        },
        "area": {
            "y1": 2,
            "x1": 2,
            "y2": 18,
            "x2": 18
        }
    },
    "maze": {
        "size": {
            "height": 20,
            "width": 20
        },
        "goal": {
            "y": 20,
            "x": 20
        },
        "walls": [
            {
                "y": 15,
                "x": 15
            }
        ]
    },
    "ghosts": [
        {
            "y": 12,
            "x": 12
        }
    ]
}';
    var $transformedRequest;
    var $game_id;
    var $player;
    var $maze;
    var $ghosts;

    public function transformRequest($request)
    {
        $request = $this->request;
        $this->transformedRequest = json_decode($request);
        var_dump($this->transformedRequest);

        echo "<br /><br />";
        $this->setGameId();
        $this->setPlayer();
    }

    function setGameId(){
        $this->game_id = $this->transformedRequest->game->id;
    }

    function setPlayer(){
        $this->player = new player();
        $this->player->id = $this->transformedRequest->player->id;
        $this->player->name = $this->transformedRequest->player->name;
        $this->player->position = $this->transformedRequest->player->position;
        $this->player->previousPosition = $this->transformedRequest->player->previous;
        $this->player->visionArea = $this->transformedRequest->player->area;
    }

}