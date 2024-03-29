<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../global/rodape.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <a class="logo" href="../../">Hozpedaki</a>
            <img src="../../icons/user2.svg" alt="">
            <div class="txt-btn-entrar">
                <span class="text">Já possui conta?</span>
                <a class="BtnLogin" href="../entrar/">Entrar</a>
            </div>
        </div>
        <form action="../../routes/routes.php" method="post">
            <input type="hidden" name="action" value="register">
            <div class="form-register">
                <a class="title">Cadastre-se</a>
                <div class="line">
                    <div class="column">
                        <label>Seu nome:</label>
                        <input type="text" name="name" placeholder="Maria José Bezerra" required>
                    </div>
                    <div class="column">
                        <label>Seu celular:</label>
                        <input type="text" name="phone" id="tel" placeholder="11985763185" maxlength="14" required>
                    </div>
                    <div class="column">
                        <label>Seu CPF:</label>
                        <input type="text" name="cpf" id="cpf" placeholder="555.555.555-55" maxlength="14" required>
                    </div>
                    <div class="column">
                        <label>Seu e-mail:</label>
                        <input type="email" name="email" placeholder="nome@email.com" required>
                    </div>
                    <div class="column">
                        <label>CEP:</label>
                        <input type="text" name="cep" id="cep" placeholder="33333-333" maxlength="9" required>
                    </div>
                    <div class="column">
                        <label>Sua senha:</label>
                        <input type="password" name="password" placeholder="***********" required>
                    </div>
                    <div class="column">
                        <label>Data de nascimento:</label>
                        <input type="date" name="birth" required>
                    </div>
                    <div class="column">
                        <label>Tipo de Usuário:</label>
                        <select name="userType" id="">
                            <option value="">Selecione</option>
                            <option value="guest">Hóspede</option>
                            <option value="host">Hospedeiro</option>
                        </select>
                    </div>
                </div>
                <div class="column" id="btnRegister">
                    <button class="BtnRegister" type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="script.js"></script>

    <span class="rights">© Todos os direitos reservados a <a class="name-right" href="https://github.com/StephanieGdSantos">Stephanie Gomes dos Santos</a></span>

</body>
</html>