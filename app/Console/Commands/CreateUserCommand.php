<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {username} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = $this->argument('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Invalid email address!');
            return;
        }

        $username = $this->argument('username');
        $password = $this->secret('Choose your password');

        $user = new User();
        $user->email = $email;
        $user->username = $username;
        $user->password = Hash::make($password);

        try {
            $user->save();
            $this->info("User created!");
        } catch (\Exception $e) {
            $this->error("Error creating user: " . $e->getMessage());
        }
    }
}
