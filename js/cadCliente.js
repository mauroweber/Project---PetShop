let btnCadastrar = document.querySelector("#btnCadastrar");
let tableCliente = document.querySelector("#tabelaCliente");
let masckInput = document.querySelectorAll("#input");

//
let form = document.querySelector("#formInput");
// MASCARAS DOS INPUTS
form.addEventListener('keypress', (event) => {

    //Mascara CPF
    if (form.inputCpf.value.length <= 14 && form.inputCpf.value.length >= 0) {
        let type = 1;
        form.inputCpf.maxLength = "14";
        inputNumber(event, type);
        if (form.inputCpf.value.length == 3 || form.inputCpf.value.length == 7) {
            form.inputCpf.value += ".";
        }
        if (form.inputCpf.value.length == 11) {
            form.inputCpf.value += "-";
        }



    } else {
        event.cancelable();

    }




    // MASCARA DO TELEFONE 1
    if (form.inputTel1.value.length <= 15) {
        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
        let type = 1;
        inputNumber(event, type);
        if (form.inputTel1.value.length == 1) {
            form.inputTel1.value = '(' + form.inputTel1.value;
        }

        if (form.inputTel1.value.length == 3) {
            form.inputTel1.value += ') ';
        }
        if (form.inputTel1.value.length == 10) {
            form.inputTel1.value += '-';
        }

    } else {
        type = 0;
    }

    // MASCARA DO TELEFONE2
    if (form.inputTel2.value.length <= 15) {
        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
        let type = 1;
        inputNumber(event, type);
        if (form.inputTel2.value.length == 1) {
            form.inputTel2.value = '(' + form.inputTel2.value;
        }

        if (form.inputTel2.value.length == 3) {
            form.inputTel2.value += ') ';
        }
        if (form.inputTel2.value.length == 10) {
            form.inputTel2.value += '-';
        }

    } else {
        type = 0;
    }

    //MASCARA CEP - E SETANDO FALSO NO REQUERIIDO DELE
    if (form.inputCep.value.length <= 10) {
        let type = 1;
        inputNumber(event, type);
        if (form.inputCep.value.length == 1 && form.inputCep.value != 0) {
            form.inputCep.value = "0" + form.inputCep.value;
        }
        if (form.inputCep.value.length == 6) {
            form.inputCep.value += "-";
        }


    } else {
        type = 0;
    }

});

// FUNÇÃO PARA PEGAR APENAS OS DIGITOS DO TECLADO
let inputNumber = function(event, type) {

    let charCode = event.charCode;
    if (charCode != 0 && type == 1) {
        if (charCode < 48 || charCode > 57) {
            event.preventDefault();
            return event;
        }
    }


}



btnCadastrar.addEventListener('click', (event) => {



    //PEGANDO OS INPUTS E VERICIDANDO SE ESTÃO REQUERIDOS
    // E DA UM ALERT NA PAGINA
    // DA PARA MELHORAR DEPOIS VOU REFATORAR ESTE CODIGO
    debugger
    if (!form.inputCep.required || !form.inputTel2.required || !form.inputRua.required || !form.inputBairro.required ||
        !form.inputNum.required || !form.inputCidade.required || !form.inputEstado.required) {
        alert("Por Favor preenche campos obrigatorios");
        event.stopImmediatePropagation();
        event.preventDefault();
        i = form.lenth;
    } else {
        let cliente = capitarFomr(form);

        if (validarCampos(cliente.cpf) || validarCampos(cliente.email) || validarCampos(cliente.cep) ||
            validarCampos(cliente.tel1) || validarCampos(cliente.tel2)) {
            event.preventDefault();
            limparFormulario();
            form.action = "teste";
        } else {

        }


    }
});

function capitarFomr(form) {

    cliente = {
        nome: form.inputName.value,
        cpf: form.inputCpf.value,
        dtNascimento: form.inputDtNasc.value,
        tel1: form.inputTel1.value,
        tel2: form.inputTel2.value,
        email: form.inputEmail.value,
        cep: form.inputCep.value,
        rua: form.inputCep.value,
        num: form.inputNum.value,
        bairro: form.inputBairro.value,
        cidade: form.inputCidade.value,
        estado: form.inputEstado.value

    };

    return cliente;
}

function limparFormulario() {
    document.querySelector('nome').value = "";
    document.querySelector('cidade').value = "";
    document.querySelector('telefone').value = "";
    document.querySelector('nome').value = "";
    document.querySelector('cpf').value = "";
    document.querySelector('dtNasci').value = "";
    document.querySelector('t1').value = "";
    document.querySelector('t2').value = "";
    document.querySelector('email').value = "";
    document.querySelector('cep').value = "";
    document.querySelector('rua').value = "";
    document.querySelector('num').value = "";
    document.querySelector('bairro').value = "";
    document.querySelector('cidade').value = "";
    document.querySelector('estado').value = "";

}

function validarCampos(valor) {
    let regCep = /[0-9]+$/;
    let regtel = /\([0-9]{2}\)\ [0-9]{4,5}-[0-9]{4}$/;
    let regEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    let regcpf = /\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$/;

    if (regCep.test(valor) || regtel.test(valor) || regEmail.test(valor) || regcpf.test(valor)) {
        return true;
    } else {
        return false;
    }

};

function alterar() {

    h1 = document.createElement("h1");
    h1.innerHTML = inputTest;

    h1.className = "TesteH1";

    console.log("choegou " + inputTest)
};

//apaga linha
//let removerCliente = document.querySelector("#tabCliente")
// removerCliente.addEventListener("click", (event) => {
//     if (event.target.className == "btnInput") {
//         event.target.parentNode.parentNode.remove()
//     }
// })s