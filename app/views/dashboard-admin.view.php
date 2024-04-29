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
        <div class="row  justify-content-start    ">
            <div class="cardDashboard">
                <!-- Search&#ofdisplaydata -->
                <div class="row" style="padding-right:20px;padding-left:20px;margin-top:25px">
                    <div class="col col-4">
                        <p>set Page display</p>
                        <!-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                    </div>
                    <div class="col col-8">
                        <div class="row justify-content-end">
                        <div class="col col-8">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="col col-3">
                            <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#staticBackdropCreate">Add Sub-Admin</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="row" style="padding:20px">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">OFFICE</th>
                                <th scope="col">DATE CREATED</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#staticBackdropUpdate">Edit</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ryan James J. Pascual</td>
                                <td>pascualryan134@gmail.com</td>
                                <td>MMSU NICER Garlic</td>
                                <td>October 20, 2023</td>
                                <td>ACTIVE</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require './app/modal/admin-update.view.php' ?>
    <?php require './app/modal/admin-create.view.php' ?>
</main>

<?php require('./app/partials/footer.php') ?>