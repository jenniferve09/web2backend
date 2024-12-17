<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear un usuario por defecto';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = new \App\Models\User();
        $user->name = 'administrador';
        $user->email = 'admin@gmail.com';
        $user->password = 'asd123';
        $user->isAdmin = '1';
        $user->save();
    }
}