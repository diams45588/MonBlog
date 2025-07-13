<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = [
            [
                'title' => 'Introduction à Laravel',
                'slug' => 'introduction-laravel',
                'content' => 'Laravel est un framework PHP open-source très populaire, connu pour sa syntaxe élégante et expressive. Il facilite le développement d\'applications web robustes grâce à ses nombreux outils intégrés comme l\'ORM Eloquent, le système de routage, et le moteur de templates Blade. Ce framework est idéal pour construire des applications modernes, sécurisées et performantes, tout en offrant une grande flexibilité aux développeurs.'
            ],
            [
                'title' => 'Le moteur Blade',
                'slug' => 'moteur-blade',
                'content' => 'Blade est le moteur de templates officiel de Laravel. Il permet de créer des vues dynamiques avec une syntaxe simple et puissante, facilitant la séparation de la logique et de la présentation. Blade supporte les layouts, les sections, les composants, et bien plus. Grâce à Blade, le développement front-end devient plus rapide et plus organisé, ce qui améliore la maintenabilité du code.'
            ],
            [
                'title' => 'Les routes dans Laravel',
                'slug' => 'routes-laravel',
                'content' => 'Le système de routage de Laravel permet de définir facilement les URL de votre application et de les associer à des contrôleurs ou des closures. Il supporte les routes avec paramètres, les groupes de routes, et les middlewares pour la gestion des accès. Cette flexibilité permet de structurer efficacement les différentes parties de votre application.'
            ],
            [
                'title' => 'Utilisation des contrôleurs',
                'slug' => 'utilisation-controleurs',
                'content' => 'Les contrôleurs dans Laravel permettent d\'organiser la logique métier de votre application. Ils reçoivent les requêtes, interagissent avec les modèles, et retournent des réponses ou des vues. Cela facilite la maintenance et la réutilisation du code, tout en assurant une séparation claire des responsabilités.'
            ]
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($slug) {
        $articles = [
            [
                'title' => 'Introduction à Laravel',
                'slug' => 'introduction-laravel',
                'content' => 'Laravel est un framework PHP open-source très populaire, connu pour sa syntaxe élégante et expressive. Il facilite le développement d\'applications web robustes grâce à ses nombreux outils intégrés comme l\'ORM Eloquent, le système de routage, et le moteur de templates Blade. Ce framework est idéal pour construire des applications modernes, sécurisées et performantes, tout en offrant une grande flexibilité aux développeurs.'
            ],
            [
                'title' => 'Le moteur Blade',
                'slug' => 'moteur-blade',
                'content' => 'Blade est le moteur de templates officiel de Laravel. Il permet de créer des vues dynamiques avec une syntaxe simple et puissante, facilitant la séparation de la logique et de la présentation. Blade supporte les layouts, les sections, les composants, et bien plus. Grâce à Blade, le développement front-end devient plus rapide et plus organisé, ce qui améliore la maintenabilité du code.'
            ],
            [
                'title' => 'Les routes dans Laravel',
                'slug' => 'routes-laravel',
                'content' => 'Le système de routage de Laravel permet de définir facilement les URL de votre application et de les associer à des contrôleurs ou des closures. Il supporte les routes avec paramètres, les groupes de routes, et les middlewares pour la gestion des accès. Cette flexibilité permet de structurer efficacement les différentes parties de votre application.'
            ],
            [
                'title' => 'Utilisation des contrôleurs',
                'slug' => 'utilisation-controleurs',
                'content' => 'Les contrôleurs dans Laravel permettent d\'organiser la logique métier de votre application. Ils reçoivent les requêtes, interagissent avec les modèles, et retournent des réponses ou des vues. Cela facilite la maintenance et la réutilisation du code, tout en assurant une séparation claire des responsabilités.'
            ]
        ];
        
        $article = collect($articles)->firstWhere('slug', $slug);
        if (!$article) abort(404);
        
        return view('articles.show', compact('article'));
    }
}
