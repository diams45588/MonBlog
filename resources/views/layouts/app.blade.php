<!DOCTYPE html>
<html lang="fr" class="bg-gray-100 text-gray-900">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Le Blog de Diaminatou')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        a {
            color: #3490dc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #2779bd;
            text-decoration: underline;
        }
        header {
            background-color: rgba(52, 73, 94, 0.85);
            color: white;
        }
        header a {
            color: white;
        }
        header a:hover {
            color: #7f8c8d;
        }
        footer {
            background-color: rgba(52, 73, 94, 0.85);
            color: white;
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }
        .container {
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }
        nav ul li a {
            font-size: 1.125rem;
            font-weight: 600;
        }
        nav ul li a:hover {
            color: #7f8c8d;
        }
        main {
            background-color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 0.5rem;
            padding: 2rem;
            margin-top: 2rem;
            flex-grow: 1;
            min-height: 60vh;
        }
        .prose h1, .prose h2, .prose h3 {
            font-family: 'Georgia', serif;
            font-weight: bold;
            color: #34495e;
        }
        .prose p {
            line-height: 1.8;
            margin-bottom: 1.25rem;
        }
        ul.list-disc {
            list-style-type: disc;
            padding-left: 1.5rem;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="{{ url('/') }}" style="font-size: 1.5rem; font-weight: bold; color: white; text-decoration: none;">Le Blog de Diaminatou</a>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/articles') }}">Articles</a></li>
                    <li><a href="{{ url('/about') }}">À propos</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 flex-grow bg-white shadow rounded">
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-4 py-4 text-center text-gray-600">
            &copy; 2025 Le Blog de Diaminatou. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
