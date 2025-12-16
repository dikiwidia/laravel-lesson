<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Illuminate\Console\Command;

class DeleteAllTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for clear all data todo';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Todo::truncate();
        $this->info("Todo berhasil dihapus semua");
    }
}
