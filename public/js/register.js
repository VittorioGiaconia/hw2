function validazione_nome(){

    const nome = document.getElementById('contatto_nome');
    const valore_nome = nome.value;
    if( valore_nome.length === 0){
        errore_nome.innerHTML = 'Inserire il Nome';
        return false;
    }
    errore_nome.innerHTML='';
       
}
function validazione_cognome(){
    const cognome = document.getElementById('contatto_cognome');
    const valore_cognome = cognome.value;
    if( valore_cognome.length === 0){
        errore_cognome.innerHTML = 'Inserire il Cognome';
        return false;
    }
    errore_cognome.innerHTML='';
    
}

function validazione_username(){
    const username = document.getElementById('contatto_username');
    const valore_username = username.value;
    if( valore_username.length === 0){
        errore_username.innerHTML = 'Inserire username';
        return false;
    }
    else{
        errore_username.innerHTML ='';
    }
}
function validazione_email(){
    const email = document.getElementById('contatto_email');
    const valore_email = email.value;
    if( valore_email.length === 0){
        errore_email.innerHTML = 'Inserire email';
        return false;   
    }else{
        if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(email.value).toLowerCase())) {
            errore_email.innerHTML='Email non valida';
        } else {
            fetch(REGISTER_ROUTE + "email/" +encodeURIComponent(String(valore_email).toLowerCase())).then(OnResponse).then(jsonEmail);
        }
    }
}
function validazione_password(){
    const password = document.getElementById('contatto_password');
    const valore_password = password.value;
    if( valore_password.length === 0){
        errore_password.innerHTML = 'Inserire password';
        return false;
    }
    if( valore_password.length < 8 ){
        errore_password.innerHTML = 'Caratteri password minimi: 8';
        return false;
    }
    errore_password.innerHTML='';

}
function jsonEmail(json) {

    if (json.exists===true) {
       errore_email.innerHTML='Email già in uso'; 
        
    }else{
        errore_email.innerHTML ='';
    }
}

function OnResponse(response) {
    return response.json();
}

const errori = [];

document.querySelector('.nome input').addEventListener('blur', validazione_nome);
document.querySelector('.cognome input').addEventListener('blur', validazione_cognome);
document.querySelector('.username input').addEventListener('blur', validazione_username);
document.querySelector('.email input').addEventListener('blur', validazione_email);
document.querySelector('.password input').addEventListener('blur', validazione_password);
