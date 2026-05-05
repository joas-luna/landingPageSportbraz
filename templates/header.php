<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #202020;
            padding: 15px 0;
            display: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;

        }

        header nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        header nav ul li a {
            font-family: sans-serif;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        header nav ul li a:hover {
            color: #06b400;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        #logo-nome img{
            gap: 10px;
            width: 30%;
        }
    </style>
</head>
<body>

    <header>
        <nav id="cabecalho">
            <div id="logo-nome">
                <img src="img/logotipo-2.png" alt="Logo da empresa">            
            </div>

                <ul class = "links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    
</body>
</html>