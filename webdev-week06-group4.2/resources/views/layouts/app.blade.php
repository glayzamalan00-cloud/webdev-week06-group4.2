<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CCC Portal</title>
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: #f5f3fa;
            color: #815f8f;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        header {
            background: linear-gradient(135deg, #ab4eb8, #4c3aa8);
            color: white;
            text-align: center;
            padding: 40px 20px 30px;
        }
        header h1 {
            margin: 0;
            font-size: 2.6rem;
        }
        header p {
            margin: 10px 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* NAV (hiwalay sa header, sagad ang lapad) */
        nav {
            background: linear-gradient(90deg, #d490dd, #5b45c9);
            display: flex;
            justify-content: center;
            gap: 40px;
            padding: 18px 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 18px;
            border-radius: 6px;
            transition: background 0.2s;
        }
        nav a:hover {
            background: rgba(189, 146, 183, 0.2);
        }

        /* CONTENT */
        main {
            flex: 1;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        main h2 { color: #8f2a8f; }
        main h3 { color: #9c589c; }

        /* FOOTER */
        footer {
            background: #b458b8;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>CCC Portal</h1>
        <p>Student Information and Campus Services Portal</p>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 CCC Portal
    </footer>
</body>
</html>