<html>
    <head>
    <link rel="stylesheet" href="{{ url('css/homepage.css') }}"/>
    <script src= "{{ url('js/motocross.js') }}" defer="true"></script> 
    <script type= "text/javascript"> const URL3 = "{{ url('motocross_insert') }}/";</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>
            MotorLine
        </title>
    </head>
    <body>
    
    <p><a class="logout" href="{{ url('logout') }}">Logout</a></p>
    
    <nav>
    <a href="{{ url('preferiti') }}">Preferiti</a>
    <a href="{{ url('home') }}">Moto GP</a>
    <a href="{{ url('bike') }}">Bike</a>
    <a href="{{ url('formula1') }}">Formula 1</a>
    <a href="{{ url('search') }}">Cerca tu</a>
  </nav>
  <nav class="media_nav">
    <a>Menu</a>
    </nav>
        <img class="copertina" src="img/Motorline-2.png" />
        
    <div>
      <span class='nome_username' >Motocross <br> {{$username}}</span>
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
</html>