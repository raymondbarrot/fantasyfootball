<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Player;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'PlayersTableSeeder']);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // test for retrieving all the players
    public function test_list_all_players(){
        $response = $this->json('GET', '/api/players');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                     '*' => [ 'id', 'first_name', 'second_name' ],
                 ]);
    }

    // test for retrieving a single player
    public function test_get_single_player(){


        $response = $this->json('GET', '/api/player/1');
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
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
                    'created_at',
                    'updated_at'
                ],
                'success' => [
                    'status',
                ]
            ]);
    }

    // test for retrieving a player that doesn't exist
    public function test_no_single_player(){
        $response = $this->json('GET', '/api/player/111111111');

        $response
            ->assertStatus(404)
            ->assertJsonStructure([
                'data' => [
                    'message'
                ],
                'success' => [
                    'status',
                ]
            ]);
    }
}
