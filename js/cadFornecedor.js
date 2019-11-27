let btnCadastrar = document.querySelector("#cadastrarFornecedor");
let form = document.querySelector("#formInput");

//MASCARAS DE CNPJ

let cnpj = document.querySelector("#inputcnpj")

cnpj.addEventListener('keypress' , (event)=>{

    inputNumber(event);

    if(cnpj.value.length == 2){
        cnpj.value = cnpj.value += '.'
    }if(cnpj.value.length == 6){
        cnpj.value = cnpj.value += '.'
    }if(cnpj.value.length == 10){
        cnpj.value = cnpj.value += '/'
    }if(cnpj.value.length == 15){
        cnpj.value = cnpj.value += '-'
    }

})

//MASCARA INSCRIÇÃO ESTADUAL

let inscEstadual = document.querySelector("#inputNumInscricao")

inscEstadual.addEventListener("keypress", (event)=>{
    inputNumber(event);
})

//MASCARA CEP

let cep = document.querySelector("#inputCEP")

cep.addEventListener("keypress" , (event)=>{

    inputNumber(event);

    if(cep.value.length == 5){
        cep.value = cep.value += '-'
    }

})

//MASCARA TELEFONE

let telefone = document.querySelector("#inputTelefone")

telefone.addEventListener("keypress" , (event)=>{

    inputNumber(event);

    if(telefone.value.length == 1){
        telefone.value = '(' + telefone.value
    }if(telefone.value.length == 3){
        telefone.value = telefone.value += ')'
    }if(telefone.value.length == 4){
        telefone.value = telefone.value += ' '
    }if(telefone.value.length == 10){
        telefone.value = telefone.value += '-'
    }

})

btnCadastrar.addEventListener("click",(event) => {

    if(form.inputCodEmpresa == "" || form.inputcnpj == "" || form.inputNumInscricao == "" || form.inputNmEmpresa =="" || form.inputNmFantasia){
        
        event.stopImmediatePropagation();
        event.preventDefault();

    } else {

        let fornecedor = capitarFomr(form);

        if(!validarCampos(fornecedor.regCnpj)){

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'CNPJ INVÁLIDO',
            });

            event.preventDefault();

        } else if (!validarCampos(fornecedor.regtel)){

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'TELEFONE INVÁLIDO',
            });

            event.preventDefault();

        } else if (!validarCampos(fornecedor.regCep)){

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'CEP INVÁLIDO',
            });

            event.preventDefault();

        } else {

            form.method = "POST";
            form.action = "../controler/fornecedorDAO.php";

        }

    }

})

function capitarFomr(form) {

    fornecedor = {
        codEmpresa: form.inputCodEmpresa.value,
        cnpj: form.inputCpf.value,
        numInscricao: form.inputNumInscricao.value,
        nmEmpresa: form.inputNmEmpresa.value,
        nmFantasia: form.inputNmFantasia.value,
    };
    return fornecedor;
}

function validarCampos(valor) {
    let regCep = /[0-9]+$/;
    let regCnpj = /[0-9]+$/;
    let regtel = /\([0-9]{2}\)\ [0-9]{4,5}-[0-9]{4}$/;
    
    let valor1 = valor.replace(/[^0-9]/g, '')
    if (regCep.test(valor) || regtel.test(valor) || regCnpj.test(valor)) {

        return true;

    } else {
        return false;
    }
}

// FUNÇÃO PARA PEGAR APENAS OS DIGITOS DO TECLADO
var inputNumber = function(event) {
    var charCode = event.charCode;
    if (charCode != 0) {
        if (charCode < 48 || charCode > 57) {
            event.preventDefault();
            return event;
        }
    }
}