<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1</title>
</head>
<body>
    <?php
        include "Mail.php";
        //Instanciation de mon obket
        $mail = new Mail("mail1", "mail2");

        echo $mail->send();
    ?>
</body>
</html>
