let btnCadastrar = document.querySelector("#btnCadastrar");
let form = document.querySelector("#formInput");

// MASCARAS DOS INPUTS
form.addEventListener('keypress', (event) => {

    //Mascara CPF
    if (form.inputCpf.value.length < 14 && form.inputCpf.value.length >= 0) {
        form.inputCpf.maxLength = "14";
        if (form.inputCpf.value.length == 3 || form.inputCpf.value.length == 7) {
            form.inputCpf.value += ".";
        }
        if (form.inputCpf.value.length == 11) {
            form.inputCpf.value += "-";
        }
    }

    // MASCARA DO TELEFONE 1
    if (form.inputTel1.value.length <= 15 && form.inputTel1.value.length > 0) {

        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
        if (form.inputTel1.value.length == 1) {
            form.inputTel1.value = '(' + form.inputTel1.value;
        }
        if (form.inputTel1.value.length == 3) {
            form.inputTel1.value += ') ';
        }
        if (form.inputTel1.value.length == 10) {
            form.inputTel1.value += '-';
        }
    }

    // MASCARA DO TELEFONE2
    if (form.inputTel2.value.length <= 15 && form.inputTel2.value.length > 0) {
        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");

        if (form.inputTel2.value.length == 1) {
            form.inputTel2.value = '(' + form.inputTel2.value;
        }
        if (form.inputTel2.value.length == 3) {
            form.inputTel2.value += ') ';
        }
        if (form.inputTel2.value.length == 10) {
            form.inputTel2.value += '-';
        }
    }

    //MASCARA CEP - E SETANDO FALSO NO REQUERIIDO DELE
    if (form.inputCep.value.length < 10 && form.inputCep.value.length > 0) {

        if (form.inputCep.value.length == 1 && form.inputCep.value.length > 0) {
            form.inputCep.value = "0" + form.inputCep.value;
        }
        if (form.inputCep.value.length == 6) {
            form.inputCep.value += "-";
        }
    }
});

// FUNÇÃO PARA PEGAR APENAS OS DIGITOS DO TECLADO
let inputNumber = (event) => {

    let charCode = event.charCode;
    if (charCode != 0) {
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
    if (form.inputCep.value == "" || form.inputTel2.value == "" || form.inputRua.value == "" || form.inputBairro.value == "" ||
        form.inputNum.value == "" || form.inputCidade.value == "" || form.inputEstado.value == "") {
        event.stopImmediatePropagation();
        event.preventDefault();

    } else {
        let cliente = capitarFomr(form);

        if (!validarCampos(cliente.cpf)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'CPF INVALIDO',
            });
            event.preventDefault();

        } else if (!validarCampos(cliente.email)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Email Invalido',
            });
            event.preventDefault();

        } else if (!validarCampos(cliente.cep)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Cep Invalido',
            });
            event.preventDefault();

        } else if (!validarCampos(cliente.tel1)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Telefone Invalido',
            });
            event.preventDefault();

        } else if (!validarCampos(cliente.tel2)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Telefone Invalido',
            });
            event.preventDefault();

        } else {
            form.method = "POST";
            form.action = "../controler/cadClientControler.php";
        }
    }
});

function capitarFomr(form) {

    cliente = {
        nome: form.inputName.value,
        cpf: form.inputCpf.value,
        dtNascimento: form.inputNasc.value,
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

function validarCampos(valor) {
    let regCep = /[0-9]+$/;
    let regtel = /\([0-9]{2}\)\ [0-9]{4,5}-[0-9]{4}$/;
    let regEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    let regcpf = /\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$/;

    let valor1 = valor.replace(/[^0-9]/g, '')
    if (regCep.test(valor) || regtel.test(valor) || regcpf.test(valor) || regEmail.test(valor)) {

        return true;

    } else {
        return false;
    }

};