<html>
<head>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     
</head>
<body>

    <main>  
        <div class="all">
            <div class="contenitore">
                <form class="contenitore_interno" name='login' method='POST'>
                <p class="nome_sito">MotorLine</p>
                    <p class="titolo_start"> Le notizie che non sapevi di volere. <br> Tutti gli sport, motoGp, e altro ancora</p>
                    <div class="domanda"> Hai gia un account? <a href='{{ url("login") }}'>Login</a></div>
                    <div class="domanda"> Non hai un account? <a href='{{ url("register") }}'>Registrati</a></div>
                    
                </form>
            </div>
        </div>
    </main>
</body>
</html>