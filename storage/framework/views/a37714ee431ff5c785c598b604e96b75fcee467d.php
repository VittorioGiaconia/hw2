<html>
<head>
    <link rel="stylesheet" href= "<?php echo e(url('css/login.css')); ?>">
    <script src="<?php echo e(url('js/register.js')); ?>" defer></script>
    <script type= "text/javascript">
    const REGISTER_ROUTE = "<?php echo e(url('register')); ?>/";
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
                    <?php if($error == 'empty_fields'): ?>
                    <section class='error'> Compilare tutti i campi </section>
                    <?php elseif($error== 'existing'): ?>
                    <section class='error'> Nome utente gia esistente </section>
                    <?php elseif($error== 'existing_email'): ?>
                    <section class='error'> Email gia utilizzata </section>
                    <?php elseif($error== 'password'): ?>
                    <section class='error'> La password deve contenere almeno 8 caratteri</section>
                    <?php endif; ?>

                    <?php echo csrf_field(); ?>
                    <div><input type="text" name="nome" id="contatto_nome" placeholder="Nome"  onkeyup="validazione_nome()" value='<?php echo e(old("nome")); ?>'>
                    <span id='errore_nome'></span>
                    </div>
                    <div><input type="text" name="cognome" id='contatto_cognome' placeholder="Cognome" onkeyup="validazione_cognome()"  value='<?php echo e(old("cognome")); ?>''>
                    <span id='errore_cognome'></span>
                    </div>
                <div><input type="text" name="username" id='contatto_username' placeholder="Username"  onkeyup="validazione_username()" value='<?php echo e(old("username")); ?>'>
                    <span id='errore_username'></span>
                    </div>
                    <div><input type="text" name="email" id='contatto_email' placeholder="Email"  onkeyup="validazione_email()" value='<?php echo e(old("email")); ?>'>
                    <span id='errore_email'></span>
                    </div>
                    <div><input type="text" name="password" id='contatto_password' placeholder="Password"  onkeyup="validazione_password()" value='<?php echo e(old("password")); ?>' >
                    <span id='errore_password'></span>
                    </div>
                    <input class="bottone_login "type='submit' value="Sign up" />  
                    <div class="domanda"> Hai gia un account? <a href='<?php echo e(url("login")); ?>'>Login</a></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/register.blade.php ENDPATH**/ ?>