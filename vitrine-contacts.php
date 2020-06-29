<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style/vitrine.css">
<head><meta charset="utf-8">
<title>Title of the document</title>
</head>

<header>
<?php
include 'header.php'
?>
    
</header>

<body>
    <main>
        <h2>Contact</h2>

        <div class="Formulaire">
            <form action="action_page.php">
               <label for="nom">Votre nom</label>
               <br>
               <input type="text" id="nom" name="firstname" placeholder="Votre nom"><br><br><br><br>
       
               
       
               <label for="email">votre email</label>
               <br>
               <input type="text" id="nom" name="firstname" placeholder="Email.."><br><br><br><br>

               <label for="amélioration">Comment améliorer mon site?</label>
               <br>
               <input type="text" id="nom" name="firstname" placeholder="Idées.."><br><br><br>
       
               <input type="submit" value="envoyer">
            </div>
    
    </main>
</body>

<footer>
<?php
include 'footer.php'
?>
</footer>

</html>