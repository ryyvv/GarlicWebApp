<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <!-- <img src="logo.png" alt=""> -->
            </span>

            <div class="text logo-text">
                <!-- <span class="name">Codinglab</span> -->
                <img src="../src/garliclogo.png" width="100px" height="auto" />
                <span class="profession">NICER Garlic</span>
            </div>
        </div>
        <!-- enable toggle if screensize decrease -->
        <!-- <i class='bx bx-chevron-right toggle'></i> -->
    </header>

    <div class="menu-bar">
        <div class="menu">

            <span class="menus nav-text">Menu</span>
            <ul class="menu-links">
                <li class="nav-link <?= urlIs('/') ? 'activebar' : 'unactivebar' ?>">
                    <a href="/">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class=" <?= urlIs('/smart') ? 'activebar' : 'unactivebar' ?> nav-link ">
                    <a href="/smart">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">Smart AI tool</span>
                    </a>
                </li>

                <li class="nav-link <?= urlIs('/admin') ? 'activebar' : 'unactivebar' ?>">
                    <a href="/admin">
                        <i class='bx bxs-user-detail icon'></i>
                        <span class="text nav-text">Sub-Admin</span>
                    </a>
                </li>

                <li class="nav-link <?= urlIs('/farmer') ? 'activebar' : 'unactivebar' ?>">
                    <a href="/farmer">
                        <i class='bx bxs-user-detail icon'></i>
                        <span class="text nav-text">Farmers</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="nav-link">
                <a href="#">
                    <i class='bx bx-user icon'></i>
                    <div class="text logo-text flex">
                        <span class="account nav-text">Ryan James J. Pascual</span>
                        <span class="accountspan nav-text">Admin</span>
                    </div>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

        </div>
    </div>

</nav>