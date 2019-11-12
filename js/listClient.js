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