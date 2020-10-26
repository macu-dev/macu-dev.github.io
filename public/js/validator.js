
class Validator {

  constructor(errorClass){
    this.errorClass = errorClass??'';
  }

  validateString(value, {min=0, max=Infinity}){
    const regexp = new RegExp(/^([a-zA-ZÀ-ÿ\u00f1\u00d1 ,']+[a-zA-ZÀ-ÿ\u00f1\u00d1.]+)+$/);
    return value.length >= min && value.length <= max && regexp.test(value);
  }

  validateEMail(value, parameters){
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(value);
  }

  isValid(values) {
    let errorMessages = [];
    let correctValue = [];
    
    values.forEach(v => {
      const e = document.getElementById(v.id);
      let val = e.value;

      if (!this['validate'+ v.type](val, v.parameters)) {
        errorMessages.push(`El contenido del campo '${v.fillname}' con el valor '${val}',  es incorrecto.`);
        
        if (this.errorClass !=='') {
          e.classList.add(this.errorClass);
          e.onchange = ()=>{e.classList.remove(this.errorClass)};
          e.onkeyup = e.onchange;
        }
      }else{
        correctValue.push({fillname: v.fillname, name: e.name, value: val})
      }
    });

    return { isvalid: errorMessages.length == 0, errorMessages, correctValue };
  }

}
