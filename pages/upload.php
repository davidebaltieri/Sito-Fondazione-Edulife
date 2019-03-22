    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/script.js"></script>

    <title>Upload</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-center">
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link ncol" href="#">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ncol" href="//codeply.com">News e Eventi</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link ncol" href="//codeply.com">Progetti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ncol" href="#">Chi siamo</a> 
                        </li>
                        <li class="nav-item">
                                <a class="nav-link ncol" href="#">Contatti</a> 
                        </li>
                    </ul>
                </div>
            </nav>
    </header>    

    <form action="../php/up_progetti.php" method="POST">
        <div class="container">
            <div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo">
            </div>
        
            <div class="form-group">
                <label for="text">Contenuto</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>

            <div class="form-group">
                <label for="file">Inserisci immagine</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <div class="form-group">
                <label for="tipo">Progetto - Evento - News</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option>Progetto</option>
                    <option>Evento</option>
                    <option>News</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        
    </form>


</body>
</html>