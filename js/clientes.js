var clientes = [
    {
        'id': 1,
        'nome': 'Luis Santos Silveira',
        'idade': 18
    },
    {
        'id': 2,
        'nome': 'Ricardo Lopes Alves',
        'idade': 30
    },
    {
        'id': 3,
        'nome': 'Gustavo Silva Junior',
        'idade': 26
    }
];

var numero = "5(1)9-876-543-21";
var nomes = [];

clientes.forEach(function(cliente){
    var nomeCompleto = cliente.nome.split(' ');
    var nome = nomeCompleto[0];
    var sobrenome = nomeCompleto[nomeCompleto.length - 1];

    nomes.push(nome + " " + sobrenome);
});

document.getElementById("script").innerHTML=nomes;

numero = numero.replace(/[^0-9]/g, '');
numeroNovo = "(" + numero.substring(0, 2) + ")_" + numero.substring(2, 3) + "_" + numero.substring(3, 7) + "-" + numero.substring(7);

document.getElementById("numero").innerHTML=numeroNovo;