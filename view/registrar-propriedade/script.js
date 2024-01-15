document.getElementById('cpf').addEventListener('input', function(event){
    let cpf = event.target.value;
    cpf = cpf.replace(/\D/g, "");

    if (cpf.length > 9) 
    {
        cpf = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6, 9)}-${cpf.slice(9)}`;
    } 
    else if (cpf.length > 6) 
    {
        cpf = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6)}`;
    } 
    else if (cpf.length > 3) 
    {
        cpf = `${cpf.slice(0, 3)}.${cpf.slice(3)}`;
    }

    event.target.value = cpf;
})

document.getElementById('cep').addEventListener('input', function(event){
    let cep = event.target.value;
    cep = cep.replace(/\D/g, "");

    if (cep.length > 5) 
    {
        cep = `${cep.slice(0, 5)}-${cep.slice(5, 8)}`;
    }

    event.target.value = cep;
})