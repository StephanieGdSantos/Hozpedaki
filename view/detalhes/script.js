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
        text.style = '-webkit-line-clamp: 3;'
    }
}