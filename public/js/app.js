/*animaciones */

new WOW().init()

// formulario
const form = document.getElementById('contact-form');
const validator = new Validator('ierror');

const values = [
  {id: "name", fillname: "nombre completo", type: 'String', parameters: {min:2, max:20}},
  {id: "email", fillname: "email", type: 'EMail'},
  {id: "subject", fillname: "asunto", type: 'String', parameters: {min:2, max:80}},
  {id: "message", fillname: "mensaje", type: 'String', parameters: {min:4, max:200}}
];

function submitForm(){
  let result = validator.isValid(values);
  if (result.isvalid) {
    Swal.fire({
      title: `Gracias 😀 por contactarme ${result.correctValue[0].value}`,
      width: 600,
      padding: '3em',
      background: '#fff',
      backdrop: `
        rgba(0,0,123,0.4)
        url("/img/thank.gif")
        left top
        no-repeat
      `,
      
    })

    form.reset();

  } else {

    let errorsDom = result.errorMessages.map( e =>`<p class="modalErrorMessage">${e}</p>`).join(""); 
    
    Swal.fire({
      imageUrl:'/img/sad.gif',
      title: 'Error :c',
      width: 350,
      height: 200,
      padding: '1em',
      background: '#fff',
      backdrop: `
        rgba(0,0,123,0.4)`,
      html: errorsDom,
    

    })

  }
}


// play music

let playButtons = document.querySelectorAll('.icon-player');
const music = document.querySelector('audio');
const songs = ['music/TheBeatles.mp3','music/Carpenters.mp3', 'music/BeeGees.mp3','music/XimenaSarinana.mp3','music/NataliaLafourcade.mp3', 'music/Queen.mp3'];

let lastPlayed=-1;

const playPauseMusic = (e) => {
  let element;
  element = getFirstParentOfType(e.target, 'svg').getAttribute('data-set');
  if (music.paused){
    playMusic(element);
    lastPlayed = element;
  } else if(lastPlayed == element) {
    pauseMusic(element);
  } else {
    pauseMusic(lastPlayed);
    playButtons = document.querySelectorAll('.icon-player');
    playButtons[lastPlayed].addEventListener('click', playPauseMusic);
    playMusic(element);
    lastPlayed = element;

  }
  playButtons = document.querySelectorAll('.icon-player');
  playButtons[element].addEventListener('click', playPauseMusic);
}

const playMusic = (element) => {
  music.addEventListener('canplaythrough', music.play, false);
  music.src = `${songs[element]}`;

  playButtons[element].outerHTML = `<svg height="327pt" class="icon-player" data-set="${element}" viewBox="-45 0 327 327" aria-label="pause icon" width="327pt" xmlns="http://www.w3.org/2000/svg"><path d="m158 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0"/><path d="m8 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0"/></svg>`;
  
}
const pauseMusic = (element) => {
  music.pause();
  playButtons[element].outerHTML =`<svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="${element}"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>`;
}


const getFirstParentOfType = (element, type, limit=100)  => {
  while(element.nodeName.toLowerCase() != type.toLowerCase() && 0 < limit--) {
    element = element.parentNode;
  }
  return element;
}



const addListenerBottons = (buttons , f) => {
  buttons.forEach (button => button.addEventListener('click', f))
}

addListenerBottons(playButtons, playPauseMusic);





