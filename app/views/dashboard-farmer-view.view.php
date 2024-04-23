<?php require('./app/partials/header.php') ?>
<?php require('./app/partials/nav.php') ?>

<main class="main-container">
    <!-- row1 -->
    <div class="container ">
        <!-- banner -->
        <div class='d-flex'>
            <p style="font-size:23px;text-transform: uppercase; font-weight:500; color:#377630;">Farmers</p>
        </div>

        <!-- content -->
        <div class="row d-flex justify-content-start  flex-wrap  ">
            <div class="col col- 8 align-items-center">
                <!-- farmers account -->
                <div class="row d-flex  cardDashboard" style="margin-bottom:35px">
                    <div class="row d-flex flex-row flex-wrap">
                        <div class="col flex-col col-3">
                            <img src="../../src/user5.jpg" width="120" height="120" alt="">
                        </div>
                        <div class="col flex-col col-4 ">
                            <div class="col flex-col margin15bottom">
                                <p class="cardtext8">USERID</p>
                                <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                            </div>
                            <div class="col flex-col margin15bottom">
                                <p class="cardtext8">NAME</p>
                                <p class="cardtext3 margin-5top">Ryan James J. Pascual</p>
                            </div>
                            <div class="col flex-col margin15bottom">
                                <p class="cardtext8">EMAIL</p>
                                <p class="cardtext3 margin-5top">pascualryan134@gmail.com</p>
                            </div>
                        </div>
                        <div class="col flex-col col-3">
                            <div class=" flex-col margin15bottom">
                                <p class="cardtext8">DATE CREATED</p>
                                <p class="cardtext3 margin-5top">January 29, 2023</p>
                            </div>
                            <div class=" flex-col margin15bottom">
                                <p class="cardtext8">ADDRESS</p>
                                <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                            </div>
                        </div>
                        <div class="col flex-col col-2 margin15bottom">
                            <p class="cardtext8">PROJECTS</p>
                            <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                            <p class="cardtext3 margin-5top">1 Completed</p>
                        </div>
                    </div>
                </div>

                <div class='d-flex'>
                    <p style="font-size:15px;margin:0px;font-weight:500; color:#377630;">List of Projects</p>
                </div>

                <!-- Projects -->
                <div style="height:920px ;overflow-x:hidden; overflow-y:scroll;scrollbar-width: none;">
                    <div class="row cardOngoing cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardCompleted cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardOngoing cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardCompleted cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardCompleted cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardCompleted cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cardCompleted cardDashboard align-items-center " style="margin-bottom:18px!important;margin:5px">
                        <div class="col col-4 cardList2">
                            <div class="row row-12 flex-nowrap  align-items-center">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:30px;opacity:0.5;height:140px; width:140px" alt="image1">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-80px;height:170px; width:170px;z-index:2" alt="image2">
                                <img src="../../src/garlic11.png" class="image_stack " style="left:-190px;opacity:0.5;height:140px; width:140px" alt="image3">
                            </div>
                        </div>
                        <div class="col col-8">
                            <div class="d-flex row flex-row ">
                                <div class="col col-6">
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">PLANTID</p>
                                        <p class="cardtext3 margin-5top">JEKJKDKLEKDKE</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">DATE PLANTED</p>
                                        <p class="cardtext3 margin-5top">November 12, 2023</p>
                                    </div>
                                    <div class="col flex-col margin15bottom">
                                        <p class="cardtext8">AREA & LOCATION</p>
                                        <p class="cardtext3 margin-5top">2 hectares</p>
                                        <p class="cardtext3 margin-5top">Suyo Dingras, Ilocos Norte</p>
                                    </div>
                                </div>
                                <div class="col flex-col col-6 margin15bottom">
                                    <p class="cardtext8">ANALYZED</p>
                                    <p class="cardtext3 margin-5top"> 1 Ongoing</p>
                                    <p class="cardtext3 margin-5top">1 Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-4" style="margin-left:20px;margin-top:-30px">
                <div class='d-flex'>
                    <p style="font-size:15px;margin:0px;font-weight:500; color:#377630;">Analyzed Images</p>
                </div>

                <div style="height:1150px; overflow-x:hidden; overflow-y:scroll;scrollbar-width: none;">
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex  cardDashboard align-items-center " style="margin-bottom:15px!important;margin:5px">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col flex-col col-6">
                                <img src="../../src/garlic11.png" width="130" height="130" alt="">
                            </div>
                            <div class="col flex-col col-6 ">
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">RESULT</p>
                                    <p class="cardtext3 margin-5top">5% Purple blotch </p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">PLANT NAME</p>
                                    <p class="cardtext3 margin-5top">Garlic2</p>
                                </div>
                                <div class="col flex-col margin15bottom">
                                    <p class="cardtext8">DATE UPLOADED</p>
                                    <p class="cardtext3 margin-5top">December 20,2023</p>
                                    <p class="cardtext3 margin-5top">Day 24</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</main>

<?php require('./app/partials/footer.php') ?>