// document.getElementById('cpf').addEventListener('input', function(event){
//     let cpf = event.target.value;
//     cpf = cpf.replace(/\D/g, "");

//     if (cpf.length > 9) 
//     {
//         cpf = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6, 9)}-${cpf.slice(9)}`;
//     } 
//     else if (cpf.length > 6) 
//     {
//         cpf = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6)}`;
//     } 
//     else if (cpf.length > 3) 
//     {
//         cpf = `${cpf.slice(0, 3)}.${cpf.slice(3)}`;
//     }

//     event.target.value = cpf;
// })

document.getElementById('cep').addEventListener('input', function(event){
    let cep = event.target.value;
    cep = cep.replace(/\D/g, "");

    if (cep.length > 5) 
    {
        cep = `${cep.slice(0, 5)}-${cep.slice(5, 8)}`;
    }

    event.target.value = cep;
})

const inputFile1 = document.querySelector('#image1');
const inputFile2 = document.querySelector('#image2');
const inputFile3 = document.querySelector('#image3');
const pictureImage = document.querySelectorAll('.preview-input');
const pictureImageText = 'Escolha uma imagem';
pictureImage.forEach(picture => {
    picture.innerHTML = pictureImageText;
});

inputFile1.addEventListener('change', function(event){
    const inputTarget = event.target;
    const file = inputTarget.files[0];

    if(file)
    {

        const reader = new FileReader();

        reader.addEventListener('load', function(e){
            const thisReader = e.target;

            const img = document.createElement('img');
            img.src = thisReader.result;
            img.classList.add('selected-picture');

            pictureImage[0].innerHTML = '';

            pictureImage[0].appendChild(img);
        })

        reader.readAsDataURL(file);
    }
    else
    {

        pictureImage[0].innerHTML = pictureImageText;
    }
})


inputFile2.addEventListener('change', function(event){
    const inputTarget = event.target;
    const file = inputTarget.files[0];
    if(file)
    {

        const reader = new FileReader();

        reader.addEventListener('load', function(e){
            const thisReader = e.target;

            const img = document.createElement('img');
            img.src = thisReader.result;
            img.classList.add('selected-picture');

            pictureImage[1].innerHTML = '';

            pictureImage[1].appendChild(img);
        })

        reader.readAsDataURL(file);
    }
    else
    {

        pictureImage[1].innerHTML = pictureImageText;
    }
})



// function ClearInputs()
// {
//     const inputs = document.getElementsByClassName('input');
//     inputs.forEach(inputSelected => {
//         inputSelected.innerHTML = '';
//     });
// }