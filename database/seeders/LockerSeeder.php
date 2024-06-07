<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Locker;

class LockerSeeder extends Seeder
{
    public function run()
    {
        Locker::factory()->count(10)->create();
    }
}
