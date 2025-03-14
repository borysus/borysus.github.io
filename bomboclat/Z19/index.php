<?php
$nrSpotkania = 19;
$naglowek = "Spotkanie nr $nrSpotkania";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotkanie <?=$nrSpotkania?> - Generator</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Spotkanie <?=$nrSpotkania?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Generator liczb losowych</a></li>
            <li><a class="nav-link" aria-current="page" href="kalkulator.php">Kalkulator</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <main class="container mt-5">
        <h2>Generator liczb losowych</h2>
        <form method="post">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label" for="min">Min</label>
                        <input class="form-control" for="min" name="min" id="min" type="number">
                        <!-- Tutaj dodaj input typu liczbowego, z atrybutem name "min", id "min", klasą "form-control" -->
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label" for="max">Max</label>
                        <input class="form-control" for="max" name="max" id="max" type="number">
                        <!-- Tutaj dodaj input typu liczbowego, z atrybutem name "max", id "max", klasą "form-control" -->
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-outline-primary" name="generuj" value="Generuj">
                    <!-- Tutaj dodaj input typu submit, z atrybutem name "generuj", value "Generuj", klasą "btn btn-outline-primary" -->
                </div>
            </div>
        </form>
        <?php
        $valid = isset($_POST['generuj']) && isset($_POST['min']) && isset($_POST['max']);
        if ($valid){
            $min = $_POST['min'];
            if ($min == ''){
                $min = 1;
            }
            $max = $_POST['max'];
            if ($max == ''){
                $max = 10;
            }
            $liczba = random_int($min, $max);
            echo $liczba;   
        }

        /*sprawdź czy wszystkie parametry z tablic POST istnieją - funkcja isset()
        zapisz wynik do zmiennej $valid - kolejne wywołania funkcji isset połącz operatorem &&
        przykład - $valid = isset() && isset();*/
        //jeżeli zmienna $valid jest prawdziwa (wystarczy wpisac samo $valid)
            //do zmiennej $min przypisz wartość min z tablicy $_POST
            //jeżeli $min jest pustym tekstem, przypisz do $min 1
            //do zmiennej $max przypisz wartość max z tablicy $_POST
            //jeżeli $max jest pustym tekstem, przypisz do $max 10
            //do zmiennej $liczba przypisz wynik funkcji random_int z parametrami $min oraz $max
            //wypisz tekst "Losowa liczba z zakresu ($min - $max) wynosi: $liczba"
        
        ?>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>