<?php

namespace App\Console\Commands;

use App\Category;
use App\Entity;
use App\Repositories\Contracts\VisitOsloRepository;
use Illuminate\Console\Command;

class FeedDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitoslo:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates data of VisitOslo API.';

    protected $visitOslo; 
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct( VisitOsloRepository $visitOslo )
    {
        $this->visitOslo = $visitOslo; 

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach( $this->visitOslo->getAll() as $entity ) 
        {
            Entity::create( [ 
                'name' => $entity->name
            ] );

            Category::create( [
                'name' => $entity->categoryList->category->name     
            ] );
        }
    }
}
