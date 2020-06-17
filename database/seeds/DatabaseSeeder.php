<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Classification_movieSeeder::class);
        $this->call(Gener_movieSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(VoteSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(Type_productSeeder::class);
        $this->call(Classification_productSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(ReservationSeeder::class);
    }
}
