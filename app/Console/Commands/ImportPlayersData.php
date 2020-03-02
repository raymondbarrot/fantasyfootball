<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Player;

class ImportPlayersData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:importPlayersData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $json=file_get_contents("https://fantasy.premierleague.com/api/bootstrap-static/");
        $data = json_decode($json, true);
        
        foreach($data['elements'] as $key=>$item)
        {

            //using eloquent model 'Player' to save to db
            $player = new Player;

            $player->id = $item['id'];
            $player->first_name = $item['first_name'];
            $player->second_name = $item['second_name'] ;
            $player->form = $item['form'];
            $player->total_points = $item['total_points'];
            $player->influence = $item['influence'];
            $player->creativity = $item['creativity'];
            $player->threat = $item['threat'];
            $player->ict_index = $item['ict_index'];

            $player->minutes = $item['minutes'];
            $player->goals_scored = $item['goals_scored'];
            $player->assists = $item['assists'];
            $player->goals_conceded = $item['goals_conceded'];
            $player->own_goals = $item['own_goals'];
            $player->penalties_saved = $item['penalties_saved'];
            $player->penalties_missed = $item['penalties_missed'];
            $player->yellow_cards = $item['yellow_cards'];
            $player->red_cards = $item['red_cards'];
            $player->web_name = $item['web_name'];

            $player->save();

        }
        
    }
}
