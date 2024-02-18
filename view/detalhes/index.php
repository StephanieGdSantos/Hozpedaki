<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../global/navbar.css">
    <link rel="stylesheet" href="../global/rodape.css">
    <title>Hozpedaki</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <a href="../../" class="logo">Hozpedaki</a>
                <span class="slogan">O seu lar digital, onde a hospedagem ganha vida!</span>
            </div>
            <ul>
                <li class="dropdown">
                    <div class="user">
                        <img class="user-icon" src="../../icons/user1.svg" alt="">
                        <a class="username">Olá</a>
                        <img class="down" src="../../icons/down.svg" alt="">
                    </div>

                    <div class="dropdown-menu">
                        <a class="menu" href="../entrar/">Entrar</a>
                        <a class="menu" href="../cadastrar/">Cadastrar</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <form action="" method="post">
        <input type="text" name="action" value="reserve" hidden>
    <div style="display: flex; gap: 30px;">
        <img style="cursor: pointer;" src="../../icons/arrow-left.svg" alt="" onclick="history.back()">
        <div class="search">
            <div>
                <div class="item-search">
                    <label class="title" for="txt-inicio">Início</label>
                    <img class="img" src="../../icons/calendario.svg" alt="">
                    <input type="date" id="txt-inicio" name="data">
                </div>
                <div class="item-search">
                    <label class="title" for="txt-final">Final</label>
                    <img class="img" src="../../icons/calendario.svg" alt="">
                    <input type="date" id="txt-final" name="data">
                </div>
                <div class="item-search">
                    <label class="title" for="txt-hospedes">Hóspedes</label>
                    <img src="../../icons/hospede.svg" alt="">
                    <input type="text" id="txt-hospedes" value="4" readonly>
                </div>
                <div class="local">
                    <img src="../../icons/local.svg" alt="">
                    <span class="text-local">Jardim Boa Vista, São Paulo, Brasil</span>
                </div>
            </div>
        </div>
    </div>

    <div class="details">
        <div class="image-description">
            <div class="image" id="div-principal-image">
                <img class="principal-image" id="principal-image" src="../../images/beachHouse.jpg" alt="">
            </div>
            <div class="description">
                <div class="div-title">
                    <div class="house-title">
                        <h2>Apartamento Aconchegante em Bairro Nobre de São Paulo</h2>
                    </div>
                    <a style="color: #5D3587; font-size: 15pt;">9 <img src="../../icons/star.svg" alt=""></a>
                </div>
                <div class="div-text-description">
                    <p data-see="false" class="text-description">Bem-vindo ao seu novo lar! Este encantador apartamento localizado em um 
                    bairro nobre de São Paulo oferece conforto e praticidade para um estilo de vida tranquilo. Ideal 
                    para um casal, este espaço foi projetado para atender às necessidades modernas com elegância.
                    Bem-vindo ao seu novo lar! Este encantador apartamento localizado em um 
                    bairro nobre de São Paulo oferece conforto e praticidade para um estilo de vida tranquilo. Ideal 
                    para um casal, este espaço foi projetado para atender às necessidades modernas com elegância.</p>
                    <span id="see-more" style="cursor: pointer; color: #5D358F; text-decoration: underline;" onclick="ShowMore()">Ver mais</span>
                </div>
                <div class="text-details">
                    <span class="rooms">1 quarto, sala, cozinha, banheiro</span>
                    <span class="guests">2 Hóspedes</span>
                </div>
                <button type="submit" class="BtnReserve" href="">Reservar</button>
            </div>
        </div>
        <div class="all-images">
            <div class="other-images">
                <img class="img1" src="../../images/beachHouse.jpg" alt="" onclick="SelectImage(this)">
            </div>
            <div class="other-images">
                <img class="img2" src="../../images/hotel.jpg" alt="" onclick="SelectImage(this)">
            </div>
            <div class="other-images">
                <img class="img3" src="../../images/beachHouse.jpg" alt="" onclick="SelectImage(this)">
            </div>
        </div>
    </div>
    </form>

    <span class="rights">© Todos os direitos reservados a <a class="name-right" href="https://github.com/StephanieGdSantos">Stephanie Gomes dos Santos</a></span>

    <script src="script.js"></script>

</body>
</html>