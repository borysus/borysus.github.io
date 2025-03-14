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
    <title>Spotkanie <?=$nrSpotkania?> - Kalkulator</title>
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
            <a class="nav-link" aria-current="page" href="index.php">Generator liczb losowych</a></li>
            <li><a class="nav-link active" aria-current="page" href="kalkulator.php">Kalkulator</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <main class="container mt-5">
        <h2>Kalkulator</h2>
        <form method="post">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label" for="liczba1">Liczba 1</label>
                        <input type="number" name="liczba1" for="liczba1" id="liczba1" class="form-control">
                        <!-- Tutaj dodaj input typu liczbowego, z atrybutem name "liczba1", id "liczba1", klasą "form-control" -->
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label" for="dzialanie">Działanie</label>
                        <select class="form-control" name="dzialanie" id="dzialanie">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <!-- Stwórz select o klasie form-control, name i id "dzialanie" -->
                            <!-- Stwórz opcję selecta dla każdego działania, tj. +, -, *, /. Opcja posiada parametr value - do niego przypisz działanie -->
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label" for="liczba2">Liczba 2</label>
                        <input type="number" for="liczba2" name="liczba2" id="liczba2" class="form-control">
                        <!-- Tutaj dodaj input typu liczbowego, z atrybutem name "liczba2", id "liczba2", klasą "form-control" -->
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="generuj" for="generuj" value="Generuj" class="btn btn-outline-primary">
                    <!-- Tutaj dodaj input typu submit, z atrybutem name "generuj", value "Generuj", klasą "btn btn-outline-primary" -->
                </div>
            </div>
        </form>
        <?php
        $valid = isset($_POST['liczba1']) && isset($_POST['liczba2']);
        if ($valid){
            $liczba1 = $_POST['liczba1'];
            $liczba2 = $_POST['liczba2'];
            $dzialanie = $_POST['dzialanie'];
            if ($liczba2 == 0 && $dzialanie == $_POST['dzialanie']){
                echo "NIE DZIELIMY PRZEZ 0";
            }
            else {
                $wynik;
                switch ($dzialanie){
                    case '+' : $wynik = $liczba1 + $liczba2; break;
                    case '-' : $wynik = $liczba1 - $liczba2; break;
                    case '*' : $wynik = $liczba1 * $liczba2; break;
                    case '/' : $wynik = $liczba1 / $liczba2; break;
                }
                echo $wynik;
            }
        }
        /*sprawdź czy wszystkie parametry z tablic POST istnieją - funkcja isset()
        zapisz wynik do zmiennej $valid - kolejne wywołania funkcji isset połącz operatorem &&
        przykład - $valid = isset() && isset();*/
        //jeżeli zmienna $valid jest prawdziwa (wystarczy wpisac samo $valid)
            //do zmiennej $liczba1 przypisz wartość liczba1 z tablicy $_POST
            //do zmiennej $liczba2 przypisz wartość liczba2 z tablicy $_POST
            //do zmiennej dzialanie przypisz wartość dzialanie z tablicy $_POST
            //jeżeli liczba2 jest zerem, a działanie to dzielenie
                //wypisz komunikat o niedzieleniu przez 0
            //w przeciwnym wypadku
                //stworz zmienna $wynik;
                //uzyj instrukcji switch..case ze zmienną $dzialanie
                    //w przypadku wartości '+', do zmiennej $wynik przypisujemy dodanie $liczba1 do $liczba2. Kończymy natychmiast switcha instrukcją break;

                //wypisz tekst "$liczba1 $dzialanie $liczba2 = $wynik"
        
        ?>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>