function validarCampos(valor) {
    
    let regEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    
    let valor1 = valor.replace(/[^0-9]/g, '')
    if (regEmail.test(valor)) {

        return true;

    } else {

        return false;
    }

};