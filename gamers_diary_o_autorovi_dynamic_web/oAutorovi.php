<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "assets/database.php";

        $sql = "INSERT INTO messages (firstname, surname, email, phonenumber, yourmessage) VALUES (?, ?, ?, ?, ?)";
    
        $statement = mysqli_prepare($connection, $sql);

        if($statement === false){
            echo mysqli_error($connection);
        } else {
            mysqli_stmt_bind_param($statement, "sssis", $_POST["firstname"], $_POST["surname"], $_POST["email"], $_POST["phonenumber"], $_POST["yourmessage"]);
        }
    
        if(mysqli_stmt_execute($statement) === false){
            echo mysqli_stmt_error($statement);
        }
          
    }

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon_author.jpg">
    <link rel="stylesheet" href="css/styly-oAutorovi-header.css">
    <link rel="stylesheet" href="css/styly-oAutorovi-main.css">
    <link rel="stylesheet" href="css/styly-oAutorovi-footer.css">
    <link rel="stylesheet" href="css/queries/queries-oAutorovi.css">
    <!--jQuery-->
    <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
    <!--jQuery script-->
    <script src="js/jQuery-oAutorovi.js"></script>
    <title>O autorovi</title>
</head>
<body>

    <?php require "assets/header.php" ?>

    <main>
        <img src="images/author_4.jpg" alt="" class="author-full-screen">
        <section class="row text-right">
            <img src="images/author_3.jpg" alt="">
            <h2>Pár slov o mně</h2>
            <p>
                Ahoj jmenuji se John Rific a v současné době se snažím rekvalifikovat v oboru IT. Primárně se soutředím na front-end webové technologie jako jsou <span class="text-imp">HTML, CSS a JavaScript</span>, ale také testovací nástroje jako je například <span class="text-imp">Cypress</span>. Studium těchto technologií mě velice baví a naplňuje. Pokud je to možné, vždy se snažím získávat informace z více zdrojů. Jako nejvíce efektivní se mi jeví studium dle videí například z youtube nebo z dalších českých či slovenských vyukových portálů. Posledních asi třináct let jsem pracoval ve výrobních firmách a to vždy na oddělení kvality. Prošel jsem celkem tři firmy a pracoval jsem i na vedoucích pozicích. Během let jsem jako kvalitář získal zkušenosti jak ze sériové, tak i ze zakázkové výroby.
            </p>
            <!--Vypnutí FLOATOVÁNÍ-->
            <div class="clearfix"></div>
        </section>
        
        <section class="row text-left">
            <img src="images/game_1.jpg" alt="">
            <h2>Nadšenec pro počítačové hry</h2>
            <p>
                Již od útlého věku jsem milovník počítačových a konzolových her. Nejraději mám platformu PlayStation 4, a to díky jejím exkluzivním hrám především ze studia Naughty Dog. Mám rád jak singleplayer tak i multiplayer. Nejvíce multiplayeru jsem doposud odehrál ve hře The Division 2, která musím říci, že je neskutečně návyková.
                <br><br>
                Mezi můj nejoblíbenější žánr patří 3rd person střílečky, všechny hry, které mají RPG prvky a samozřejmě strategie jako Total War. Pokud by jste si se mnou chtěli třeba zahrát najdete mě na <span class="text-imp">Steamu či PSN pod nickem Rific1989.</span>
            </p>
            <!--Vypnutí FLOATOVÁNÍ-->
            <div class="clearfix"></div>
        </section>

        <section class="row text-right">
            <img src="images/author_1.jpg" alt="">
            <h2>Výletování pěšky i na kole</h2>
            <p>
                Občas vyrazím na menší výlet a to buď pěšky nebo na kole. Mám rád dlouhé procházky nebo výjezdy, takže v tomto ohledu jsem spíše maratonec než sprinter. Pobyt v přírodě mi dodává novou energii a mohu se tak znovu plně zregenerovaný vrhnout na další pracovní úkoly, které mě čekají. Nejraději mám pro výlety naši krásnou zemi, ale sem tam zavítám i do zahraničí. Pokud se mám rozhodnout pro pobyt v horách nebo u moře, rozhodně stavím na první místo hory. Lákají mě krásné výhledy, náročné výšlapy a všudypřítomné nádherné prostředí.
            </p>
            <!--Vypnutí FLOATOVÁNÍ-->
            <div class="clearfix"></div>
        </section>

        <h1 class="row2 invitation">‚‚Pokud Vás zaujal můj profil a máte zájem o navázání spolupráce, můžete mne kontaktovat pomocí formuláře níže‘‘</h1>
        <section class="row">
            <!-- Přidat required do inputů!!!!!!!!!!! -->
            <form action="oAutorovi.php" method="POST" id="contact-form" class="row"> 
                <input type="text" name="firstname" placeholder="Jméno" required><br>
                <input type="text" name="surname" placeholder="Příjmení" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="phonenumber" placeholder="Telefonní číslo" required><br>
                <textarea name="yourmessage" cols="30" rows="10" placeholder="Text vaší zprávy..." required></textarea><br>
                <input type="submit" name="submit" value="Odeslat">
            </form>
    
            <!--Vypnutí FLOATOVÁNÍ-->
            <div class="clearfix"></div>
        </section>
    </main>

    <?php require "assets/footer.php" ?>

</body>
</html>