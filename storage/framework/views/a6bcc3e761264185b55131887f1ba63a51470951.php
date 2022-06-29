<html>
    <head>
    <link rel="stylesheet" href="<?php echo e(url('css/homepage.css')); ?>"/>
    <script src= "<?php echo e(url('js/search.js')); ?>" defer="true"></script>
    <script type= "text/javascript"> const URL5 = "<?php echo e(url('search_insert')); ?>/";</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
        <title>
            MotorLine
        </title>
    </head>
    <body>
    
    <p><a class="logout" href="<?php echo e(url('logout')); ?>">Logout</a></p>
    
    <nav>
    <a href="<?php echo e(url('preferiti')); ?>">Preferiti</a>
    <a href="<?php echo e(url('home')); ?>">Moto GP</a>
    <a href="<?php echo e(url('motocross')); ?>">Motocross</a>
    <a href="<?php echo e(url('bike')); ?>">Bike</a>
    <a href="<?php echo e(url('formula1')); ?>">Formula 1</a>
    
    <nav class="media_nav">
    <a>Menu</a>
    </nav>
        
    
  </nav>
        <img class="copertina" src="img/Motorline-5.png" />
 

        <div>
      <span class='nome_username' >Cerca tu <br> <?php echo e($username); ?> </span>
    </div>
    <div>
      <span class='titolo_news' >Le news degli ultimi giorni</span>
    </div> 
      <form id="primo_form">
        <h3>Inserisci la categoria di ciò che vuoi cercare
        Sport-Gare-Corse e non solo </h3>
        <input type='text' id="oggetto_ricercato">
        <input type='submit' value="cerca">
      </form> 
      <section id="library">
        
      </section>
      <div>  
      <footer>
        <h5 class='foot'>Vittorio Giaconia <br>
        1000001633 </h5>
      </footer> 
    </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/search.blade.php ENDPATH**/ ?>