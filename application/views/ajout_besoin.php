<?php $this->load->view('section/header')?>

    <form action="<?php echo base_url('home_controller/ajout_besoin') ?>" method="post" class="border rounded px py shadow">
        <p>Selectionnez le besoin: </p>
        <select name="materiel" id="" class="select">
            <?php foreach($materiels as $materiel) { ?>
                <option value="<?php echo $materiel['id'] ?>"><?php echo $materiel['nom_materiel'] ?></option>
            <?php } ?>
        </select>
        <p>Entrez la quantité: </p>
        <input type="number" name="quantite" id="" min="1" class="input"><br><br>
        <input type="submit" value="Envoyer le besoin" class="button">
    </form>

<?php $this->load->view('section/footer')?>