var btnCadastrar = document.querySelector("#btnCadastrar");
let tableCliente = document.querySelector("#tabelaCliente");
let form;
let cliente = {};

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



btnCadastrar.addEventListener('click', (event) => {
    event.preventDefault();
    form = document.querySelector("#formInput");
    cliente = capitarFomr(form);

    let tbCadastro = document.querySelector("#tbCadastro")
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


    trCliente.className = "cliente"
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
    tbCadastro.querySelector("tbody").appendChild(trCliente)


});

function capitarFomr(form) {
    debugger
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

    document.getElementById('nome').value = "";
    document.getElementById('cidade').value = "";
    document.getElementById('telefone').value = "";

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