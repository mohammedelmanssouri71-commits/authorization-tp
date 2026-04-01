<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'titre'      => 'Introduction à Laravel',
                'contenu'    => 'Laravel est un framework PHP élégant et expressif. Il facilite le développement web grâce à une syntaxe claire et des outils puissants comme Eloquent ORM, les migrations et les seeders.',
                'statut'     => 'publie',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre'      => 'Les bases de Tailwind CSS',
                'contenu'    => 'Tailwind CSS est un framework utility-first qui permet de styliser rapidement vos interfaces sans quitter votre HTML. Il offre une flexibilité maximale et une personnalisation poussée.',
                'statut'     => 'publie',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre'      => 'Comprendre les migrations Laravel',
                'contenu'    => 'Les migrations sont un système de contrôle de version pour votre base de données. Elles permettent de créer, modifier et supprimer des tables de façon structurée et partageable.',
                'statut'     => 'publie',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre'      => 'API REST avec Laravel Sanctum',
                'contenu'    => 'Laravel Sanctum fournit un système d\'authentification léger pour les SPA et les API. Il gère les tokens API et les sessions de façon simple et sécurisée.',
                'statut'     => 'brouillon',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre'      => 'Optimiser les requêtes Eloquent',
                'contenu'    => 'Le N+1 problem est un piège courant avec les ORM. Laravel offre des outils comme eager loading (with()), lazy loading et query scopes pour optimiser vos requêtes.',
                'statut'     => 'brouillon',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
