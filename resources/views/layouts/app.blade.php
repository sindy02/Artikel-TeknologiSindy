<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'TeknoSindy')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #243047;
            line-height: 1.7;
        }

        header {
            background: #102a43;
            color: white;
            padding: 18px 7%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: #7dd3fc;
        }

        .container {
            width: 86%;
            max-width: 1100px;
            margin: 35px auto;
        }

        .hero {
            background: linear-gradient(135deg, #102a43, #2563eb);
            color: white;
            padding: 55px 35px;
            border-radius: 18px;
            margin-bottom: 35px;
        }

        .hero h1 {
            font-size: 38px;
            line-height: 1.3;
            margin-top: 0;
        }

        .button {
            display: inline-block;
            background: #fbbf24;
            color: #102a43;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .category {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            text-align: center;
            background: #102a43;
            color: white;
            padding: 22px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero h1 {
                font-size: 30px;
            }
        }

        @media (max-width: 520px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .container {
                width: 92%;
            }

            header {
                padding: 18px 4%;
            }

            .hero {
                padding: 35px 22px;
            }

            nav {
                gap: 12px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">TeknoSindy.</div>

            <nav>
                <a href="{{ route('beranda') }}">Beranda</a>
                <a href="{{ route('artikel.index') }}">Artikel</a>
                <a href="{{ route('kategori') }}">Kategori</a>
                <a href="{{ route('tentang') }}">Tentang</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 TeknoSindy. Website Informasi Teknologi.</p>
    </footer>

</body>
</html>