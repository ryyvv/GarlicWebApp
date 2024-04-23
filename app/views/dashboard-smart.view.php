<?php require('./app/partials/header.php') ?>
<?php require('./app/partials/nav.php') ?>

<main class="main-container">
    <!-- row1 -->
    <div style="margin-left:20px">
        <!-- banner -->
        <div class='d-flex'>
            <p style="font-size:23px;text-transform: uppercase; font-weight:500; color:#377630;">Garlic Insect Pests and Diseases Recogition</p>
        </div>

        <!-- content -->
        <div class="d-flex justify-content-start ">
            <!-- Analysed image -->
            <div class="row flex-wrap " style="margin:0px;width:2200px;overflow-y:scroll;scrollbar-width: none">
                <!-- list --> 
                <?php foreach ($fetchImages as $images) : ?>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px;margin-bottom:20px">
                        <div style="margin-top:5px" class="row  justify-content-center align-items-center">
                            <div class="col " style="justify-content:center;align-items:center">
                                <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                                <img src="<?= $images['images'] ?>" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                            </div>
                        </div>
                        <div>
                            <p class="cardtext7"><?= $images['result'] ?></p>
                            <p>Plant: <?= $images['title'] ?></p>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="flex-col " style="margin-right:10px">
                                <img src="<?= $images['images'] == 'icon' ?  './../../src/user1.jpg' :$images['images']  ?>" width="20" height="20" style="border-radius: 50%;" />
                            </div>
                            <div>
                                <p class="cardtext5"><?= $images['name'] ?></p>
                                <p class="cardtext6"><?= $images['address'] ?></p>
                            </div>

                        </div>
                        <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                            <i class='bx bx-cloud-upload ' style="color:gray"></i>
                            <p class="cardtext6" style="margin-left:5px"><?= $images['dateuploaded'] ?></p>
                        </div>
                    </div>

                <?php endforeach ?>
               
        
            </div>

        </div>

    </div>

</main>

<?php require('./app/partials/footer.php') ?>