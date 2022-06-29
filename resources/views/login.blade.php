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
                    @csrf
                    <p class="nome_sito">MotorLine</p>
                    @if($error == 'empty_fields')
                    <section class='error'> Compilare tutti i campi </section>
                    @elseif($error== 'wrong')
                    <section class='error'> Credenziali non valide </section>
                    @endif
                    <div class="username">
                    <div><input type="text" name="username" placeholder="Username" value='{{ old("username") }}' ></div>
                    </div>
                    <div class="password">
                    <div><input type="password" name="password" placeholder="Password" ></div>
                    </div>
                    <input class="bottone_login" type='submit' value="Login"/>
                    <div class="domanda"> Non hai un account? <a href='{{ url("register") }}'>Registrati</a></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>