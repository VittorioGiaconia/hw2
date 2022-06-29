<html>
<head>
    <link rel="stylesheet" href= "{{ url('css/login.css') }}">
    <script src="{{ url('js/register.js') }}" defer></script>
    <script type= "text/javascript">
    const REGISTER_ROUTE = "{{ url('register')}}/";
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    
</head>
<body>
    <main>
        <div class="all">
            <div class="contenitore">
                <div id='error'></div>
            <form class="contenitore_interno" name='login' method='post' id='form' >
                    <p class="nome_sito">MotorLine</p>
                    @if($error == 'empty_fields')
                    <section class='error'> Compilare tutti i campi </section>
                    @elseif($error== 'existing')
                    <section class='error'> Nome utente gia esistente </section>
                    @elseif($error== 'existing_email')
                    <section class='error'> Email gia utilizzata </section>
                    @elseif($error== 'password')
                    <section class='error'> La password deve contenere almeno 8 caratteri</section>
                    @endif

                    @csrf
                    <div><input type="text" name="nome" id="contatto_nome" placeholder="Nome"  onkeyup="validazione_nome()" value='{{ old("nome") }}'>
                    <span id='errore_nome'></span>
                    </div>
                    <div><input type="text" name="cognome" id='contatto_cognome' placeholder="Cognome" onkeyup="validazione_cognome()"  value='{{ old("cognome") }}''>
                    <span id='errore_cognome'></span>
                    </div>
                <div><input type="text" name="username" id='contatto_username' placeholder="Username"  onkeyup="validazione_username()" value='{{ old("username") }}'>
                    <span id='errore_username'></span>
                    </div>
                    <div><input type="text" name="email" id='contatto_email' placeholder="Email"  onkeyup="validazione_email()" value='{{ old("email") }}'>
                    <span id='errore_email'></span>
                    </div>
                    <div><input type="text" name="password" id='contatto_password' placeholder="Password"  onkeyup="validazione_password()" value='{{ old("password") }}' >
                    <span id='errore_password'></span>
                    </div>
                    <input class="bottone_login "type='submit' value="Sign up" />  
                    <div class="domanda"> Hai gia un account? <a href='{{ url("login") }}'>Login</a></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>