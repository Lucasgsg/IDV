<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Identificação Veicular</title>

        <!-- Custom style -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin">
            <h2 class="h3 mb-3 font-weight-normal">Favor, Identificar-se</h2>
            
            <label for="inputEmail" class="sr-only">Email:</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            
            <label for="inputPassword" class="sr-only">Senha:</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar-me
                </label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
        </form>
    </body>
</html>
