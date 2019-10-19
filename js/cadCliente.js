let btnCadastrar = document.querySelector("#btnCadastrar");
let tableCliente = document.querySelector("#tabelaCliente");
let masckInput = document.querySelectorAll("#input");

//
let form = document.querySelector("#formInput");
// MASCARAS DOS INPUTS
form.addEventListener('keypress', (event) => {
    if (form.inputName.length > 50) {
        event.preventDefault();
    }

    //Mascara CPF
    if (form.inputCpf.value || form.inputCpf.length <= 14) {
        form.inputCpf.maxLength = "14";
        inputNumber(event);
        if (form.inputCpf.value.length == 3 || form.inputCpf.value.length == 7) {
            form.inputCpf.value += ".";
        }
        if (form.inputCpf.value.length == 11) {
            form.inputCpf.value += "-";
        }

    } else {
        event.stopImmediatePropagation();
    }

    // MASCARA DO TELEFONE 1
    if (form.inputTel1.value || form.inputTel1.length <= 15) {
        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
        inputNumber(event);

        if (form.inputTel1.value.length == 1) {
            form.inputTel1.value = '(' + form.inputTel1.value;
        }

        if (form.inputTel1.value.length == 3) {
            form.inputTel1.value += ') ';
        }
        if (form.inputTel1.value.length == 10) {
            form.inputTel1.value += '-';
        }
        form.inputTel2.required = false;

    } else {
        event.stopImmediatePropagation();
    }

    // MASCARA DO TELEFONE
    if (form.inputTel2.value || form.inputTel2.length <= 15) {
        // form.inputTel1.value = form.inputTel1.value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");

        inputNumber(event);
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
        event.stopImmediatePropagation();
    }

    //MASCARA CEP - E SETANDO FALSO NO REQUERIIDO DELE
    if (form.inputCep.value || form.inputCep.length <= 10) {

        inputNumber(event);
        if (form.inputCep.value.length == 1 && form.inputCep.value != 0) {
            form.inputCep.value = "0" + form.inputCep.value;
        }
        if (form.inputCep.value.length == 6) {
            form.inputCep.value += "-";
        }
        form.inputCep.required = false;
    } else {
        event.stopImmediatePropagation();
    }



});

// FUNÇÃO PARA PEGAR APENAS OS DIGITOS DO TECLADO
var inputNumber = function(event) {
    debugger;
    var charCode = event.charCode;
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
    if (form.inputCep.required || form.inputTel2.required /*|| form.inputRua.required || form.inputBairro.required || form.inputNum.required || form.inputCidade.required || form.inputEstado.required*/ ) {
        alert("Por Favor preenche campos obrigatorios");
        event.stopImmediatePropagation();
        event.preventDefault();

        i = form.lenth;
    } else {
        let cliente = capitarFomr(form);


        let tbCadastro = document.querySelector("#tbCadastro")


        let trCliente = document.createElement("tr");
        let tdNome = document.createElement("td");
        let tdCidade = document.createElement("td");
        let tdTel1 = document.createElement("td");
        let tdTel2 = document.createElement("td");
        let tdCpf = document.createElement("td");
        let tdEmail = document.createElement("td");
        let tdDtNasci = document.createElement("td");
        let tdCep = document.createElement("td");
        let tdBairro = document.createElement("td");
        let tdRua = document.createElement("td");
        let tdNum = document.createElement("td");
        let tdEstado = document.createElement("td");
        let tdInput = document.createElement("td");

        tdNome.innerHTML = cliente.nome;
        tdCidade.innerHTML = cliente.cidade;
        tdTel1.innerHTML = cliente.tel1;
        tdTel2.innerHTML = cliente.tel2;
        tdCpf.innerHTML = cliente.cpf;
        tdEmail.innerHTML = cliente.email;
        tdDtNasci.innerHTML = cliente.dtNascimento;
        tdCep.innerHTML = cliente.cep;
        tdBairro.innerHTML = cliente.bairro;
        tdRua.innerHTML = cliente.rua;
        tdNum.innerHTML = cliente.num;
        tdEstado.innerHTML = cliente.estado;
        tdInput.innerHTML = "<button type='submit' class='btnInput'>Deletar</button>"


        trCliente.className = "table table-stripediente"

        tdNome.className = "nome"
        tdCpf.className = "cpf"
        tdDtNasci.className = "dtNasci"
        tdTel1.className = "tel1"
        tdTel2.className = "tel2"
        tdEmail.className = "email"
        tdCep.className = "cep"
        tdRua.className = "rua"
        tdNum.className = "num"
        tdBairro.className = "bairro"
        tdCidade.className = "cidade"
        tdEstado.className = "estado"

        trCliente.appendChild(tdNome)
        trCliente.appendChild(tdCpf)
        trCliente.appendChild(tdDtNasci)
        trCliente.appendChild(tdTel1)
        trCliente.appendChild(tdTel2)
        trCliente.appendChild(tdEmail)
        trCliente.appendChild(tdCep)
        trCliente.appendChild(tdRua)
        trCliente.appendChild(tdNum)
        trCliente.appendChild(tdBairro)
        trCliente.appendChild(tdCidade)
        trCliente.appendChild(tdEstado)
        trCliente.appendChild(tdInput)
        tbCadastro.querySelector("tbody").appendChild(trCliente)

        limparFormulario();
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


function alterar() {

    h1 = document.createElement("h1");
    h1.innerHTML = inputTest;

    h1.className = "TesteH1";

    console.log("choegou " + inputTest)
};

//apaga linha

let removerCliente = document.querySelector("#tabCliente")

removerCliente.addEventListener("click", (event) => {

    if (event.target.className == "btnInput") {
        event.target.parentNode.parentNode.remove()
    }

})