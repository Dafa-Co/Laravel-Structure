<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHPUnit\Exception;

/**
 *
 */
class AdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:admin {
    --O|open : Open browser.
    }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate admin user.';

    protected static array $admin_data = [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => 'admin',
        'remember_token' => 'sfdsggbesr',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Adding an admin user
        $user = \App\Models\User::firstOrCreate(
            array_only(static::$admin_data, [ 'email' ]),
            array_except(static::$admin_data, [ 'email' ])
        );
        $user->markEmailAsVerified();

        $columns = array_keys(static::$admin_data);
        $this->table($columns, [ $user->only($columns) ]);

        $this->info("Done!");
        if( $this->option('open') ) {
            $this->comment("Open: " . url('/'));
            try {
                shell_exec("xdg-open \"" . url('/') . "\" || open \"" . url('/') . "\" || start \"" . url('/') . "\"");
            } catch(Exception $exception) {

            }
        }

        return Command::SUCCESS;
    }
}
