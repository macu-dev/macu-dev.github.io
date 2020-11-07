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