<html>
<head>
    <link rel="stylesheet" href="<?php echo e(url('css/login.css')); ?>">
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
                    <?php echo csrf_field(); ?>
                    <p class="nome_sito">MotorLine</p>
                    <?php if($error == 'empty_fields'): ?>
                    <section class='error'> Compilare tutti i campi </section>
                    <?php elseif($error== 'wrong'): ?>
                    <section class='error'> Credenziali non valide </section>
                    <?php endif; ?>
                    <div class="username">
                    <div><input type="text" name="username" placeholder="Username" value='<?php echo e(old("username")); ?>' ></div>
                    </div>
                    <div class="password">
                    <div><input type="password" name="password" placeholder="Password" ></div>
                    </div>
                    <input class="bottone_login" type='submit' value="Login"/>
                    <div class="domanda"> Non hai un account? <a href='<?php echo e(url("register")); ?>'>Registrati</a></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>