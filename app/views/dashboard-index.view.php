<?php require('./app/partials/header.php') ?>
<?php require('./app/partials/nav.php') ?>

<main class="main-container">
    <?php require './app/modal/upload.php' ?>
    <!-- row1 -->
    <div class="container ">
        <!-- banner -->
        <div class='d-flex'>
            <p style="font-size:23px;text-transform: uppercase; font-weight:500; color:#377630;">Dashboard</p>
        </div>

        <!-- content -->
        <div class="d-flex justify-content-start  flex-wrap ">
            <!-- Analysed image -->
            <div class="cardDashboard d-flex flex-row shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#CFD9FF;border-radius: 50%;margin-right:10px">
                    <img src="../../src/analysedImage.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">ANALYSED IMAGES</p>
                    <p class="cardtext2"><?= $countAnalyzedimage ?></p>
                </div>
            </div>

            <!-- uploaded images -->
            <div class="cardDashboard d-flex flex-row  flex-wrap shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#CAE0F4;border-radius: 50%;margin-right:10px">
                    <img src="../../src/images.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">UPLOADED IMAGES</p>
                    <p class="cardtext2"><?= $imagecount ?></p>
                </div>
            </div>


            <!-- total projects -->
            <div class="cardDashboard d-flex flex-row shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#E4FBDF;border-radius: 50%;margin-right:10px">
                    <img src="../../src/plant.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">TOTAL PROJECTS</p>
                    <p class="cardtext2"><?= $allProjects ?></p>
                </div>
            </div>


            <!-- Registered users -->
            <div class="cardDashboard d-flex flex-row shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#FFFBC7;border-radius: 50%;margin-right:10px">
                    <img src="../../src/users.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">REGISTERED USERS</p>
                    <p class="cardtext2"><?= $registeredFarmer ?></p>
                </div>
            </div>

        </div>

    </div>

    <!-- row2 -->
    <div class="container" style="margin-top:-35px">
        <div class="d-flex  ">
            <!-- image upload -->
            <div class="cardDashboard" style="width:360px;height:280px">
                <div style="margin-top:5px" class="row flex-row align-items-center">
                    <div class="col-6">
                        <img src="../../src/garlic10.png" height="80" width="130" style="position:absolute;opacity:0.5;border-radius:10px">
                        <img src="../../src/garlic10.png" height="80" width="130" style="position:relative;bottom:-10px;right:-8px;border-radius:10px">
                    </div>
                    <div class="col-6" style="margin-left:0">
                        <img src="../../src/bars.png" height="80" width="130">
                    </div>
                </div>
                <div style="margin-top:20px" class="row flex-row align-items-center">
                    <div class="col-6">
                        <img src="../../src/garlic11.png" height="80" width="130" style="position:absolute;opacity:0.5;border-radius:10px">
                        <img src="../../src/garlic11.png" height="80" width="130" style="position:relative;bottom:-10px;right:-8px;border-radius:10px">
                    </div>
                    <div class="col-6" style="margin-left:0">
                        <img src="../../src/bars.png" height="80" width="130">
                    </div>
                </div>
                <div style="margin-top:20px" class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Upload image
                    </button>
                </div>
            </div>

            <!-- list uploaded -->
            <div class="row flex-nowrap " style="padding-left:10px; padding-right:10px;white-space: nowrap; width:900px; height: 300px ; overflow-x:scroll; overflow-y:hidden;scrollbar-width: none">
                <!-- list -->

                <?php foreach ($fetchImages as $images) : ?>

                    <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
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
                                <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
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

    <!-- row3 -->
    <div class="container">
        <!-- <div class="d-flex"> -->
        <div class="d-flex justify-content-between flex-row ">
            <div style="width:73%">
                <div>
                    <p>List of Farmers</p>
                </div>
                <div style="overflow-y:scroll;height:700px;  scrollbar-width: none;">

                    <?php foreach ($Data as $Datarow) : ?>

                        <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                            <div class=" col col-5 d-flex flex-row">
                                <div class=" flex-col " style="margin-right:10px">
                                    <img src="<?= $Datarow['userProfile'] == 'icon' ?  './../../src/user1.jpg' :$Datarow['userProfile']  ?>" width="40" height="40" style="border-radius: 50%;box-shadow: 0px 0px 3px 3px rgba(0, 0, 0, 0.1);" />
                                </div>
                                <div>
                                    <p class="cardtext3"><?= $Datarow['name'] ?></p>
                                    <p class="cardtext4"><?= $Datarow['email'] ?></p>
                                </div>
                            </div>
                            <div class="col col-5 flex-col">
                                <p class="cardtext3"><?= $Datarow['address'] ?></p>
                                <p class="cardtext4"><?= $Datarow['dateCreated'] ?></p>
                            </div>
                            <div class="col col-2">
                                <p class="cardtext4 ongoing">1 Ongoing</p>
                                <p class="cardtext4 completed">0 Completed</p>
                            </div>
                            <div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>

            <!-- upload image 9of farmers -->
            <div style="width:25%">
                <div>
                    <p>Recent Uploads</p>
                </div>
                <div class='cardDashboardlist2 d-flex flex-row ' style="overflow-y:scroll;max-height:700px;  scrollbar-width: none;">
                    <div class="container2">
                    <?php foreach ($fetchImages as $images) : ?>
                            <div class="timeline-item" date-is="<?= $images['dateuploaded'] ?>">
                                <p class="cardtext3"><?= $images['name'] ?></p>
                                <p class="cardtext4"><?= $images['address'] ?></p>
                                <img src="<?= $images['images'] ?>" width="150" height="190" />
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

<?php require('./app/partials/footer.php') ?>