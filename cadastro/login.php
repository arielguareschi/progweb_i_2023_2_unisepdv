<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso restrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">        
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary"> 
    <main class="form-signin w-100 m-auto">
    <form action="logar.php" method="post">        
        <h1 class="h3 mb-3 fw-normal text-center">Acesso Restrito</h1>

        <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
        <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="senha">
        <label for="floatingPassword">Senha</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit" name="enviar" value="Acessar">Acessar</button>

        <br />
        <?php 
            if (isset($_GET['error'])){
        ?>
        <div class="form-floating">
            <div class="alert alert-danger mt-4">
                <?php echo $_GET['error']; ?>
            </div>
        </div>
        <?php 
            }
        ?>
    </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</body>
</html>