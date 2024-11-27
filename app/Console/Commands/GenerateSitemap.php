<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the site';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Get all routes and filter for GET routes only
        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return in_array('GET', $route->methods()) && !$route->getName() == null;
        });

        foreach ($routes as $route) {
            $uri = $route->uri();

            // Exclude specific routes if necessary (e.g., API or store routes)
            if (str_contains($uri, 'storage')) {
                continue;
            }

            $sitemap->add(
                Url::create(url($uri))
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority($this->getPriority($uri))
            );
        }

        // Write the sitemap to the public directory
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }

    /**
     * Get priority based on URI.
     *
     * @param string $uri
     * @return float
     */
    private function getPriority(string $uri): float
    {
        // Adjust priorities based on your logic
        if ($uri === '/') {
            return 1.0;
        } elseif (str_contains($uri, 'contact') || str_contains($uri, 'inscription')) {
            return 0.7;
        } elseif (str_contains($uri, 'marrakech') || str_contains($uri, 'paris')) {
            return 0.9;
        }

        return 0.8; // Default priority
    }
}
