function onJson(json){
  const results = json.articles;
    
  let max_results = 15;
  for(let i=0; i<max_results; i++)
  {
    const news = results[i];
    const new1= document.createElement('div');
    const autore = news.author;
    const title = news.title;
    const descrizione_ = news.content;
    const selected_image = news.urlToImage;
    const link = news.url;
    
  
    new1.classList.add('new1');
    
    const autore1 = document.createElement('h3');
    autore1.textContent = autore;
    const link1 = document.createElement('h4');
      link1.textContent = link;
    const caption = document.createElement('h1');
    caption.textContent = title;
    const descrizione = document.createElement('span');
    descrizione.textContent = descrizione_;
    const img = document.createElement('img');
    img.src = selected_image;
    
    const img2 = document.createElement("img"); 
    img2.classList.add('mipiace');
    img2.src = "stella.png";
    const linkbotton=document.createElement('a');
    linkbotton.href=news.url;
    linkbotton.textContent="Continua a leggere";

    new1.appendChild(img);
    new1.appendChild(caption);
    new1.appendChild(autore1);
    new1.appendChild(descrizione);
    new1.appendChild(link1);
    new1.appendChild(linkbotton);
    new1.appendChild(img2);
    library.appendChild(new1);
  }
  const immagine=document.querySelectorAll('.new1');
  for(let b of immagine){
    b.addEventListener('click', seleziona);
  }

}


function seleziona(event)
{
  
  const scelta = event.currentTarget;
  const autore_1 = scelta.querySelector('h3').textContent;
  const titolo_1 = scelta.querySelector('h1').textContent;
  const descrizione_1 = scelta.querySelector('span').textContent;
  const immagine_1 = scelta.querySelector('img').src; 
  const link_1 = scelta.querySelector('h4').textContent; 
  const image = scelta.querySelector('.mipiace');
  image.src = 'stella1.png';
 
  console.log(titolo_1);
  console.log(autore_1);  
  console.log(descrizione_1);  
  console.log(immagine_1);  
  console.log(link_1);

  let new_img = immagine_1;
  let Slesh=(immagine_1.split('/').length - 1);
 
  for(let i=0;i<Slesh ;i++){
    new_img = new_img.replace("/","-----");
  }
  
  let new_link = link_1;
  let Slesh2= (link_1.split('/').length - 1);

  for(let i=0;i<Slesh2 ;i++){
    new_link = new_link.replace("/","-----");
  }
  fetch(URL5 +encodeURIComponent(autore_1) + '/'+encodeURIComponent(titolo_1) +'/'+ encodeURIComponent(descrizione_1) +'/'+ encodeURIComponent(new_img)+'/'+ encodeURIComponent(new_link));

}

  function onResponse(Response){
    return Response.json();
  
  }
  
  function search(event){
    event.preventDefault();
  
    const ricerca = document.querySelector('#oggetto_ricercato')
    const ricerca_valore = encodeURIComponent(ricerca.value);
    rest_url= url1 + 'everything?q='+ ricerca_valore +'&language=it&sortBy=publishedAt&apiKey=2fa3182f41284b2088b306e771799ebc';
    fetch(rest_url).then(onResponse).then(onJson);
  
  }
  
  
  const form = document.querySelector('#primo_form');
  form.addEventListener('submit', search);
  const url1= 'https://newsapi.org/v2/';
  
 
 
  
