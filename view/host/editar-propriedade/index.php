<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global/navbar.css">
    <link rel="stylesheet" href="../../global/rodape.css">
    <link rel="stylesheet" href="style.css">

    <title>Hozpedaki</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <a href="../../../" class="logo">Hozpedaki</a>
                <span class="slogan">O seu lar digital, onde a hospedagem ganha vida!</span>
            </div>
            <ul>
                <li class="dropdown">
                    <div class="user">
                        <img class="user-icon" src="../../../icons/user1.svg" alt="">
                        <span class="username">Olá</span>
                        <img class="down" src="../../../icons/down.svg" alt="">
                    </div>
                    <div class="dropdown-menu">
                        <a class="menu" href="../../">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="form-register">
        <h2>EDITAR PROPRIEDADE</h2>
        <form action="../../../routes/routes.php?id=" method="post" enctype="multipart/form-data">
            <input type="text" name="action" id="edit-house">
            <div style="display: grid; grid-template-columns: 1fr 1fr; align-items: end; gap: 160px;">
                <div class="side-form">
                    <div class="title-input">
                        <label>Nome da propriedade: </label>
                        <input class="input" type="text" value="" required>
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>CEP:</label>
                            <input class="input" type="text" id="cep" maxlength="9" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Estado: </label>
                            <input class="input" type="text" value="" required>
                        </div>
                    </div>

                    <div class="title-input">
                        <label>Cidade: </label>
                        <input class="input" type="text" value="" required>
                    </div>

                    <div class="title-input">
                        <label>Rua/Avenida: </label>
                        <input class="input" type="text" value="" required>
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Bairro: </label>
                            <input class="input" type="text" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Nº: </label>
                            <input class="input" type="text" value="" required>
                        </div>
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Tamanho (m²): </label>
                            <input class="input" type="number" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Disponível: </label>
                            <select name="" id="" required>
                                <option value="">Selecione</option>
                                <option value="">Sim</option>
                                <option value="">Não</option>
                            </select>
                        </div>   
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Quartos: </label>
                            <input class="input" type="number" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Sala: </label>
                            <input class="input" type="number" value="" required>
                        </div>
                    </div>
                </div>
                
                <div class="side-form">
                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Cozinha: </label>
                            <input class="input" type="number" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Banheiro: </label>
                            <input class="input" type="number" value="" required>
                        </div>
                        
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Hóspedes: </label>
                            <input class="input" type="number" value="" required>
                        </div>
                        
                        <div class="title-input">
                            <label>Piscina: </label>
                            <select name="" id="" required>
                                <option value="">Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="two-inputs">
                        <div class="title-input">
                            <label>Café da Manhã: </label>
                            <select name="" id="" required>
                                <option value="">Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        
                        <div class="title-input">
                            <label>Reembolsável: </label>
                            <select name="" id="" required>
                                <option value="">Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div> 
                    </div>

                    <div class="title-input">
                        <label for="">Descrição:</label>
                        <textarea class="input-desc" name="" id="" cols="30" rows="10" value="" required></textarea>
                    </div>
                </div>

            </div>

            <div class="images">
                <label>Fotos</label>
                <div style="display: flex; gap: 20px">
                    <label class="picture" tabindex="0">
                        <input class="input-image" id="image1" accept="image/*" type="file" name="img1" required/>
                        <div class="preview-input"><img src="" alt=""></div>
                    </label>
                    <label class="picture">
                        <input class="input-image" id="image2" accept="image/*" type="file" name="img2" required/>
                        <div class="preview-input"><img src="" alt=""></div>
                    </label>
                    <label class="picture">
                        <input class="input-image" id="image3" accept="image/*" type="file" name="img3" required/>
                        <div class="preview-input"><img src="" alt=""></div>
                    </label>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end; gap: 20px;">
                <button type="submit">Editar Propriedade</button>
            </div>
        </form>
    </div>

    <span class="rights">© Todos os direitos reservados a <a class="name-right" href="https://github.com/StephanieGdSantos">Stephanie Gomes dos Santos</a></span>

    <script src="script.js"></script>
</body>
</html>