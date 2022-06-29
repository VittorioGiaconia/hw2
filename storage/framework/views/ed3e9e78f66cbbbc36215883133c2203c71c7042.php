<html>
    <head>
    <link rel="stylesheet" href="<?php echo e(url('css/homepage.css')); ?>"/>
    <script src= "<?php echo e(url('js/formula1.js')); ?>" defer="true"></script> 
    <script type= "text/javascript"> const URL3 = "<?php echo e(url('formula1_insert')); ?>/";</script>
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
    <a href="<?php echo e(url('search')); ?>">Cerca tu</a>
  </nav>
  <nav class="media_nav">
    <a>Menu</a>
    </nav>
        
        <img class="copertina" src="img/Motorline-4.png" />
 

        <div>
      <span class='nome_username' >Formula 1 <br> <?php echo e($username); ?> </span>
    </div>
    <div>
      <span class='titolo_news' >Le news degli ultimi giorni</span>
    </div>
      <section id="library">
      </section>
      <div>  
      <footer>
        <h5 class='foot'>Vittorio Giaconia <br>
        1000001633 </h5>
      </footer> 
    </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/formula1.blade.php ENDPATH**/ ?>