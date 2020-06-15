<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket = new \App\Ticket();
        $ticket->name = 'Peatón';
        $ticket->description = 'Máximo 1 persona por ticket';
        $ticket->price = '2000';
        $ticket->save();

        $ticket->name = 'Automóvil';
        $ticket->description = 'Máximo 5 personas por ticket';
        $ticket->price = '5000';
        $ticket->save();

        $ticket->name = 'Bicicleta';
        $ticket->description = 'Máximo 2 personas por ticket';
        $ticket->price = '3000';
        $ticket->save();

        $ticket->name = 'Motocicleta';
        $ticket->description = 'Máximo 2 personas por ticket';
        $ticket->price = '4000';
        $ticket->save();
    }
}
