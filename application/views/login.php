<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h2>Bienvenue sur l'application de gestion de système d'informations,</h2>
        <p>Derrière ce login se trouve un monde meilleur</p>
    </div>
    <form action="<?php echo base_url('login_controller/login') ?>" method="post">
        <p>Entrez vos identifiants :</p>
        <input type="email" name="email" id="" placeholder="votre email">
        <input type="password" name="password" id="" placeholder="votre mot de passe">
        <input type="submit" value="Log in">
    </form>
</body>
</html>