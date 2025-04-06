<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    // Commande à exécuter dans le terminal
    protected $signature = 'generate:sitemap';

    // Description dans la liste des commandes artisan
    protected $description = 'Génère automatiquement le fichier sitemap.xml';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/services'))
            ->add(Url::create('/realisations'))
            ->add(Url::create('/contact'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap généré avec succès !');
    }
}
