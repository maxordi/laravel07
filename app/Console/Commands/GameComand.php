<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Psy\Readline\Hoa\Console;

class GameComand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The game guess the number';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $number = rand(0, 10);
        while (true) {
            $ask = readline('Какое число загадал компьютер? ');

            if ($ask == $number) {
                echo 'Вы выйграли! ' . PHP_EOL;
                break;
            }

            if ($ask > $number) {
                echo 'Загаданное число меньше вашего ' . PHP_EOL;
            }
            if ($ask < $number) {
                echo 'Загаданное число больше вашего ' . PHP_EOL;
            }
        }

        return Command::SUCCESS;
    }
}
