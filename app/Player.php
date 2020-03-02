<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $fillable = [
        'id',
        'first_name',
        'second_name',
        'form',
        'total_points',
        'influence',
        'creativity',
        'threat',
        'ict_index',
        'minutes',
        'goals_scored',
        'assists',
        'goals_conceded',
        'own_goals',
        'penalties_saved',
        'penalties_missed',
        'yellow_cards',
        'red_cards',
        'web_name',
    ];
}
