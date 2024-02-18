<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/global/navbar.css">
    <link rel="stylesheet" href="view/global/rodape.css">
    <link rel="stylesheet" href="style.css">
    <title>Hozpedaki</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <a href="#" class="logo">Hozpedaki</a>
                <span class="slogan">O seu lar digital, onde a hospedagem ganha vida!</span>
            </div>
            <ul>
                <li class="dropdown">
                    <div class="user">
                        <img class="user-icon" src="icons/user1.svg" alt="">
                        <span class="username">Olá</span>
                        <img class="down" src="icons/down.svg" alt="">
                    </div>

                    <div class="dropdown-menu">
                        <a class="menu" href="view/entrar/">Entrar</a>
                        <a class="menu" href="view/cadastrar/">Cadastrar</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <form class="search" action="" method="get">
        <div>
            <div class="item-search">
                <img class="img" src="icons/bandeira.svg" alt="">
                <select name="local" id="">
                    <option value="">Local</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="item-search">
                <img class="img" src="icons/calendario.svg" alt="">
                <input type="date" name="data">
            </div>
            <div class="item-search">
                <img src="icons/hospede.svg" alt="">
                <select name="hospedes" id="">
                    <option value="">Hóspedes</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="Mais">6+</option>
                </select>
            </div>
        </div>
        <button class="BtnSearch" type="submit">Buscar</button>
    </form>
    
    <div class="all-houses">
        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/index.php?id=5">Reservar</a>
            </div>
        </div>

        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/">Reservar</a>
            </div>
        </div>

        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/">Reservar</a>
            </div>
            
        </div>

        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/">Reservar</a>
            </div>
        </div>

        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/">Reservar</a>
            </div>
        </div>

        <div class="house">
            <div class="house-items">
                <div class="house-image">
                    <img src="images/beachHouse.jpg" alt="">
                </div>
                <div class="title-avaliation">
                <h1 class="name-house">Aconchego de casal</h1>
                <div>
                    <span class="avaliation">9.0</span>
                    <img src="icons/star.svg" alt="">
                </div>
                </div>
                <span class="price">R$120/dia</span>
                <div class="details">
                    <span class="txt-details">São Luis de Monte Belo, Brasil</span>
                    <span class="txt-details">1 quarto, 1 sala, 1 cozinha, 1 banheiro</span>
                    <span class="txt-details">2 pessoas</span>
                </div>
                <a class="BtnReserve" href="view/detalhes/">Reservar</a>
            </div>
            
        </div>
    </div>

    <span class="rights">© Todos os direitos reservados a <a class="name-right" href="https://github.com/StephanieGdSantos">Stephanie Gomes dos Santos</a></span>

    <script src="script.js"></script>
</body>
</html>