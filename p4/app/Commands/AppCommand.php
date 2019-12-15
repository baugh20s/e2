<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function migrate()
    {
        $this->app->db()->createTable('past_games', [
            'user_move' => 'varchar(255)',
            'computer_move' => 'varchar(255)',
            'result' => 'text',
            'date_time' => 'timestamp',
        ]);
    }

    public function seed()
    {
        # Set up game details
        # `id` is omitted as that's created automatically
        $past_game = [
            'user_move' => 'rock',
            'computer_move' => 'scissors',
            'result' => 'user',
            'date_time' => '2019-12-10 00:00:01',
        ];

        # Insert game
        $this->app->db()->insert('past_games', $past_game);
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
