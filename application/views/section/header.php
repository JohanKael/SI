<?php
    $user_info = $this->session->userdata('user_info');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Document</title>
</head>
<body>

    <div class="navbar">
        <span>
            <h2>Logo</h2>
            <span class="link">
                <?php if($user_info['email_user'] == 'achat@app.work'){ ?>
                    <a href="<?php echo base_url('home_controller/liste_besoins')?>">Liste des besoins</a>
                <?php } ?>
                <a href="<?php echo base_url('home_controller')?>">Ajout de besoins</a>
            </span>
        </span>
        <a href="<?php echo base_url('login_controller/disconnect')?>" class="disconnect">Se déconnecter</a>
    </div>
    <div class="content">

    