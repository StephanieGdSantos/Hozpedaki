document.getElementById('cep').addEventListener('input', function(event){
    let cep = event.target.value;
    cep = cep.replace(/\D/g, "");

    if (cep.length > 5) 
    {
        cep = `${cep.slice(0, 5)}-${cep.slice(5, 8)}`;
        console.log(cep)
    }

    event.target.value = cep;
})

document.getElementById('tel').addEventListener('input', function(event){
    let tel = event.target.value;
    tel = tel.replace(/\D/g, "");

    if (tel.length > 2) 
    {
        tel = `(${tel.slice(0, 2)})${tel.slice(2, 7)}-${tel.slice(7, 11)}`;
        console.log(tel)
    }
    event.target.value = tel;
})

console.log(window.location)
// const id = window.location.toString().split('=')[1]
const id = 3
const user = window.location.toString().split('/')[5]
console.log(user)
window.onload = ()=>{
    fetch(`../../../routes/routes.php/${user}/dados-pessoais/${id}`)
    .then(resp=>resp.json())
    .then(function(personalData){
        document.querySelector('#name').value = personalData.name
        document.querySelector('#cpf').value = personalData.cpf
        document.querySelector('#cep').value = personalData.cep
        document.querySelector('#birth').value = personalData.birth
        document.querySelector('#tel').value = personalData.phone
        document.querySelector('#email').value = personalData.email
        document.querySelector('#password').value = personalData.password
        document.querySelector('#user').value = personalData.userType
    }
    )
}