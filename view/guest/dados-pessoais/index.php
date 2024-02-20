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
                        <p class="username">Olá</p>
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
        <h2>DADOS PESSOAIS</h2>
        <form action="../../../routes/routes.php" method="post">
            <input type="text" name="action" value="edit-register" hidden>
            <div style="display: grid; grid-template-columns: 1fr 1fr; align-items: end; gap: 160px;">
                <div class="side-form">
                    <div class="title-input">
                        <label>Nome: </label>
                        <input class="input" name="name" id="name" type="text" value="" required>
                    </div>
                    <div>
                        <label>CPF:</label>
                        <input class="no-mutable" type="text" name="cpf" id="cpf" value="" readonly>
                    </div>
                    <div class="title-input">
                        <label>CEP: </label>
                        <input class="input" type="text" name="cep" id="cep" value="" maxlength="9" required>
                    </div>
                    
                    <div class="title-input">
                        <label>Data de nascimento: </label>
                        <input class="no-mutable" type="date" name="birth" id="birth" value="" readonly>
                    </div>
                </div>
                <div class="side-form">

                    <div class="title-input">
                        <label>Celular (com DDD): </label>
                        <input class="input" type="text" name="phone" id="tel" value="" maxlength="14" required>
                    </div>
                    <div class="title-input">
                        <label>E-mail: </label>
                        <input class="input" type="text" name="email" id="email" value="" required>
                    </div>
                    <div class="title-input">
                        <label>Senha: </label>
                        <input class="input" type="password" name="password" id="password" value="">
                    </div>

                    <div class="title-input">
                        <label>Usuário: </label>
                        <input class="no-mutable" type="text" name="userType" id="user" value="" readonly>
                    </div>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: flex-end; gap: 20px;">
                <button type="submit">Atualizar</button>
            </div>
        </form>
    </div>

    <span class="rights">© Todos os direitos reservados a <a class="name-right" href="https://github.com/StephanieGdSantos">Stephanie Gomes dos Santos</a></span>

    <script src="script.js"></script>
</body>
</html>