<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/estiloLogin.css">
    </head>
    <body>
        <div class="rerun"><a href="index.php">Voltar</a></div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Login</h1>
                <form method="POST" action="autenticacao.php">
                    <div class="input-container">
                        <input type="text" id="Username" required="required" name="emailLogin"/>
                        <label for="Username">Email</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Password" required="required" name="senhaLogin"/>
                        <label for="Password">Senha</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit"><span>Entrar</span></button>
                    </div>
                    <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
                </form>
            </div>

            <div class="card alt">
                <div class="toggle"></div>	
                <h1 class="title">Registrar-se<div class="close"></div></h1>

                <form method="POST" action="cadastro.php">
                    <div class="input-container">
                        <input type="text" id="Username" required="required" name="nomeUsuario"/>
                        <label for="Username">Seu nome</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="Username" required="required" name="email"/>
                        <label for="Username">Email</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Repeat Password" required="required" name="senha"/>
                        <label for="Repeat Password">Senha</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit"><span>Registrar!</span></button>
                    </div>
                </form>
            </div>
        </div>


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="javascript/login.js"></script>

    </body>
</html>
