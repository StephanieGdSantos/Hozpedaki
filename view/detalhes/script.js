function SelectImage(selectedImage)
{
    const principalImage = document.getElementById('principal-image');
    principalImage.src = selectedImage.src;
}

function ShowMore()
{
    let text = document.querySelector('.text-description')
    text.style = '-webkit-line-clamp: 999;'

    let BtnSeeMore = document.querySelector('#see-more')

    if (text.getAttribute('data-see') === 'false')
    {
        text.setAttribute('data-see', 'true')
        BtnSeeMore.innerHTML = 'Ver menos'
        text.style = '-webkit-line-clamp: 999;'
    }
    else
    {
        text.setAttribute('data-see', 'false')
        BtnSeeMore.innerHTML = 'Ver mais'
        text.style = '-webkit-line-clamp: 4;'
    }
}
console.log(window.location)
const id = window.location.toString().split('=')[1]
console.log(id)
window.onload = ()=>{
    fetch(`../../routes/routes.php/detalhes/${id}`)
    .then(resp=>resp.json())
    .then(function(data){

        var bedrooms = data.bedrooms > 1 ? bedrooms = ' quartos, ' : bedrooms = ' quarto, '
        var livingRoom = data.livingRoom > 1 ? livingRoom = ' salas,' : livingRoom = ' sala, '
        var kitchen = data.kitchen > 1 ? kitchen = ' cozinhas, ' : kitchen = ' cozinha, '
        var bathroom = data.bathroom > 1 ? bathroom = ' banheiros' : bathroom = ' banheiro'

        document.querySelector('.house-title h2').innerHTML = data.title
        document.querySelector('#txt-hospedes').value = data.guests
        document.querySelector('.text-description').innerHTML = data.description
        document.querySelector('.rooms').innerHTML = data.bedrooms + bedrooms + data.livingRoom + livingRoom + 
        data.kitchen + kitchen + data.bathroom + bathroom
        document.querySelector('.text-local').innerHTML = data.cep + ', ' + data.city + ', ' + data.state;
        document.querySelector('.img1').src = data.img1_path
        document.querySelector('.img2').src = data.img2_path
        document.querySelector('.img3').src = data.img3_path
        document.querySelector('.principal-image').src = data.img1_path
    }
    )
}