<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet" />

    <!-- StyleSheet -->
    <link rel="stylesheet" href="/CSS/AdminDashboard.css">

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./Images/logo.png">
                    <h2>LOGO HERE!</h2>
                </div>
                <div class="close" id="close_btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Blank</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Blank</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Blank</h3>
                    <span class="Notification-count">19</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>

        <!--End of Aside-->

        <!--Main Section (Center Screen)-->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="Livestock">
                    <span class="material-symbols-outlined">
                        pets
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Livestocks</h3>
                            <h1>102</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Livestocks -->

                <div class="Disease">
                    <!--ICon-->
                    <span class="material-symbols-outlined">
                        pets
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Diseases</h3>
                            <h1>05</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <!-- End of Disease -->

                <div class="Treatment">
                    <!--ICon-->
                    <span class="material-symbols-outlined">
                        pets
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Treatment</h3>
                            <h1>10</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <!-- End of Treatment -->

            </div>
            <div class="lists">
                <h2>Livestocks Lists</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Livestock ID</th>
                            <th>Livestock Weight</th>
                            <th>Classification</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12345</td>
                            <td>150kg</td>
                            <td>Pig</td>
                            <td class="warning">Diseased</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>

        <!--END OF MAIN-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">
                        light_mode
                    </span>
                    <span class="material-symbols-outlined">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey</p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            
        </div>
    </div>


</body>

</html>