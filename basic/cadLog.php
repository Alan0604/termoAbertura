<!DOCTYPE html>
<html lang="pt-br">
<head
    <meta charset="utf-8">
</head>

<body>
    <div id="cadastro">
        <fieldset id="fildCadastro">
            <legend>CADASTRO</legend>
            Os * DEVEM ser preenchidos!
            <br>
            <label for="nome">*Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" required autofocus>

            <br>

            <label for="email">*Email: </label>
            <input type="email" name="email" id="email" placeholder="email@gmail.com" required>

            <br>

            <label for="senha">*Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="********" required>

            <br>

            <label for="repetir">*Repetir Senha: </label>
            <input type="password" name="repetir" id="repetir" placeholder="********" required>

            <br>

            <label for="telefone">*Telefone: </label>
            <input type="text" name="telefone" id="telefone" placeholder="(45)3268-7777" required>

            <br>

            <label for="genero">*Genero: </label>
            <input type="radio" name="genero" id="genero" value="Masculino" required checked>Masculino
            <input type="radio" name="genero" id="genero" value="Feminino" required>Feminino

            <br>

            <label for="cidade">*Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Santa Helena" required>
            <br>

            <label for="cep">*CEP: </label>
            <input type="text" name="cep" id="cep" size="5" maxlength="5" placeholder="85892" required>
            -
            <input type="text" name="cep2" id="cep2" size="3" maxlength="3" placeholder="000" required>

            <br>

            <label for="estado">*Estado: </label>
            <input type="text" name="estado" id="estado" placeholder="Paraná" required>

            <br>

            <label for="sigla">*Sigla: </label>
            <input type="text" name="sigla" id="sigla" placeholder="PR" required>

            <br>

            <label for="pais">*Pais: </label>
            <input type="text" name="pais" id="pais" placeholder="Brasil" required>

            <br>

            <label for="uf">*UF: </label>
            <input type="text" name="uf" id="uf" placeholder="BR" required>

            <br><br>

            <fieldset id="fildProfissional">
                <legend>DADOS PROFISSIONAIS</legend>

                <label for="atuacao">*Área de atuação: </label>
                <input type="text" name="atuacao" id="atuacao" placeholder="Área de atuação" required>

                <br>

                <label for="empresa">*Empresa: </label>
                <input type="text" name="empresa" id="empresa" placeholder="Nome da empresa" required>

                <br>

                <label for="missao">*Missão: </label>
                <input type="text" name="missao" id="missao" placeholder="Missão da empresa" required>

                <br>

                <label for="foco">*Foco: </label>
                <input type="text" name="foco" id="foco" placeholder="Foco principal" required>

                <br>
            </fieldset>
            <input type="submit" value="CADASTRAR">
        </fieldset>
    </div>

    <div id="login">
        <br>
        <fieldset id=fildLogin>
            <legend>LOGIN</legend>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="email@gmail.com" required>

            <br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="*******" required>

            <br>

            <input type="checkbox" value=""> Esqueci minha senha

            <br>

            <input type="button" value="LOGIN">
        </fieldset>
    </div>
</body>
</html>
