<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeAtoms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-atoms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->choice('Choice type component', ['Atom', 'Molecule', 'Organism'], 0);
        $name = $this->ask('Name');
        $this->info("You choice $id");
        $js = $this->confirm('Add js?');
        $this->info("Create {$id}: with js? ({$js}). Name: {$name}");
    }
}
