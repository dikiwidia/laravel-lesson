<?php

namespace Database\Seeders;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                "date" => Carbon::now()->addDays($i)->format("Y-m-d"),
                "checked_flag" => false,
            ];
            Todo::factory()->create($data);
        }
    }
}
