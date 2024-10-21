<?php $this->load->view('section/header')?>

    <div class="rounded shadow px py">
        <p>La liste des besoins:</p>
        <table class="w-full">
            <tr>
                <th>Nom du matériel</th>
                <th>Quantité total</th>
                <th>Demandeur</th>
                <th></th>
            </tr>
            <?php foreach($full_besoins as $besoin) { ?>
                <tr>
                    <td><?php echo $besoin['nom_materiel'] ?></td>
                    <td><?php echo $besoin['total_quantite'] ?></td>
                    <td><?php echo $besoin['unite_materiel'] ?></td>
                    <td><a href="<?php echo base_url('home_controller/resoudre_besoins/' . $besoin['id_besoin']) ?>">Résoudre</a></td>
                </tr>
            <?php } ?>
        </table><br><br>
        <p>Détails besoins par département:</p>
        <table class="w-full">
            <tr>
                <th>Nom du matériel</th>
                <th>Quantité demandée</th>
                <th>Demandeur</th>
                <th>Département</th>
            </tr>
            <?php foreach($besoins as $besoin) { ?>
                <tr>
                    <td><?php echo $besoin['nom_materiel'] ?></td>
                    <td><?php echo $besoin['quantite_materiel'] ?></td>
                    <td><?php echo $besoin['email_user'] ?></td>
                    <td><?php echo $besoin['nom_departement'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php $this->load->view('section/footer')?>