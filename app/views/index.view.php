<?php require('./app/partials/header.php') ?>
<?php require('./app/partials/nav.php') ?>

<main class="main-container">
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
                    <p class="cardtext2">2,026</p>
                </div>
            </div>

            <!-- uploaded images -->
            <div class="cardDashboard d-flex flex-row  flex-wrap shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#CAE0F4;border-radius: 50%;margin-right:10px">
                    <img src="../../src/images.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">UPLOADED IMAGES</p>
                    <p class="cardtext2">2,026</p>
                </div>
            </div>


            <!-- total projects -->
            <div class="cardDashboard d-flex flex-row shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#E4FBDF;border-radius: 50%;margin-right:10px">
                    <img src="../../src/plant.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">TOTAL PROJECTS</p>
                    <p class="cardtext2">691</p>
                </div>
            </div>


            <!-- Registered users -->
            <div class="cardDashboard d-flex flex-row shadow p-3 mb-5 bg-body-tertiary rounded align-items-center">
                <div class="flex-row align-items-center" style="padding:10px;background-color:#FFFBC7;border-radius: 50%;margin-right:10px">
                    <img src="../../src/users.png" width="30" height="30" style="justify-content:center; align-items:center;">
                </div>
                <div class="flex-col" style="padding-right:40px!important;">
                    <p class="cardtext1">REGISTERED USERS</p>
                    <p class="cardtext2">36</p>
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
                    <button type="button" class="btn btn-outline-success ">Upload image</button>
                </div>
            </div>

            <!-- list uploaded -->
            <div class="row flex-nowrap " style="padding-left:10px; padding-right:10px;white-space: nowrap; width:900px; height: 300px ; overflow-x:scroll; overflow-y:hidden;scrollbar-width: none">
                <!-- list -->


                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row  justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row  justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row  justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

                <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                    <div style="margin-top:5px" class="row justify-content-center align-items-center">
                        <div class="col " style="justify-content:center;align-items:center">
                            <!-- <img src="../../src/garlic10.png" height="120" width="150" style="position:absolute;opacity:0.5;border-radius:10px"> -->
                            <img src="../../src/garlic10.png" height="120" width="150" style="position:relative;top:-10px;right:-12px;border-radius:10px">
                        </div>
                    </div>
                    <div>
                        <p class="cardtext7">Purple Blotch</p>
                        <p>ID:KHFEBKDFLLEKLNDM</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="flex-col " style="margin-right:10px">
                            <img src="../../src/user1.jpg" width="20" height="20" style="border-radius: 50%;" />
                        </div>
                        <div>
                            <p class="cardtext5">Ryan James J. Pascual</p>
                            <p class="cardtext6">ryy@gmail.com</p>
                        </div>

                    </div>
                    <div class="d-flex flex-row align-items-center" style="margin-top:10px">
                        <i class='bx bx-cloud-upload ' style="color:gray"></i>
                        <p class="cardtext6" style="margin-left:5px">January 10, 2024</p>
                    </div>
                </div>

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

                    <?php
                    if ($fetchUserTable > 0) {

                        $i = 0;
                        foreach ($fetchUserTable as $key => $userRow) {
                    ?>
                            <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                                <div class="d-flex flex-row">
                                    <div class="flex-col " style="margin-right:10px">
                                        <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%;" />
                                    </div>
                                    <div>
                                        <p class="cardtext3">Ryan James J. Pascual</p>
                                        <p class="cardtext4">ryy@gmail.com</p>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                                    <p class="cardtext4">January 12, 2022</p>
                                </div>
                                <div class="flex-col">
                                    <p class="cardtext4 ongoing">1 Ongoing</p>
                                    <p class="cardtext4 completed">0 Completed</p>
                                </div>
                                <div>
                                </div>
                            </div>

                        <?php
                        }
                    } else {
                        ?>
                        <div class="cardDashboard align-items-center" style="width:210px;height:280px;margin-right:15px">
                            <p>No record found!</p>
                        </div>

                    <?php
                    }
                    ?>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col " style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%;" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext4 ongoing">1 Ongoing</p>
                            <p class="cardtext4 completed">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">1 Ongoing</p>
                            <p class="cardtext4">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class='cardDashboardlist d-flex flex-row flex-wrap justify-content-between align-items-center'>
                        <div class="d-flex flex-row">
                            <div class="flex-col" style="margin-right:10px">
                                <img src="../../src/user1.jpg" width="40" height="40" style="border-radius: 50%" />
                            </div>
                            <div>
                                <p class="cardtext3">Ryan James J. Pascual</p>
                                <p class="cardtext4">ryy@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext3">Suyo Dingras, Ilocos Norte</p>
                            <p class="cardtext4">January 12, 2022</p>
                        </div>
                        <div class="flex-col">
                            <p class="cardtext4 ongoing">1 Ongoing</p>
                            <p class="cardtext4 completed">0 Completed</p>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- upload image 9of farmers -->
            <div style="width:25%">
                <div>
                    <p>Recent Uploads</p>
                </div>
                <div class='cardDashboardlist2 d-flex flex-row ' style="overflow-y:scroll;height:700px;  scrollbar-width: none;">
                    <div class="container2">
                        <div class="timeline-item" date-is="20-07-2024">
                            <p class="cardtext3">Ryan James J. Pascual</p>
                            <p class="cardtext4">Suyo Dingras, Ilocos Norte</p>
                            <img src="../../src/garlic2.jpg" width="auto" height="190" />
                        </div>
                        <div class="timeline-item" date-is="20-07-2024">
                            <p class="cardtext3">Ryan James J. Pascual</p>
                            <p class="cardtext4">Suyo Dingras, Ilocos Norte</p>
                            <img src="../../src/garlic2.jpg" width="auto" height="190" />
                        </div>
                        <div class="timeline-item" date-is="20-07-2024">
                            <p class="cardtext3">Ryan James J. Pascual</p>
                            <p class="cardtext4">Suyo Dingras, Ilocos Norte</p>
                            <img src="../../src/garlic2.jpg" width="auto" height="190" />
                        </div>
                        <div class="timeline-item" date-is="20-07-2024">
                            <p class="cardtext3">Ryan James J. Pascual</p>
                            <p class="cardtext4">Suyo Dingras, Ilocos Norte</p>
                            <img src="../../src/garlic2.jpg" width="auto" height="190" />
                        </div>
                        <div class="timeline-item" date-is="20-07-2024">
                            <p class="cardtext3">Ryan James J. Pascual</p>
                            <p class="cardtext4">Suyo Dingras, Ilocos Norte</p>
                            <img src="../../src/garlic2.jpg" width="auto" height="190" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require('./app/partials/footer.php') ?>