<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shipping Recht - Materi 1</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="/node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
    </head>

</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Sidebar -->
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-header d-flex">
                <a href="#" class="text-white header fs-4 fw-bold text-decoration-none position-fixed">Judul Materi</a>
                <hr>
            </div>
            <div id="sidebar-nav" class="sidebar-nav">
                <ul class="list-unstyled list-group position-fixed">
                    <li class="list-group-item">
                        <a class="dropdown-toggle text-decoration-none text-black pb-0 mb-0 text-white"
                            data-bs-toggle="collapse" href="#dropDown1" role="button" aria-expanded="false"
                            aria-controls="">
                            Materi 1
                        </a>
                        <ul class="collapse list-unstyled mt-3" id="dropDown1">
                            <li><a href="#subMateri1" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 1</a></li>
                            <li><a href="#subMateri2" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 2</a></li>
                            <li><a href="#subMateri3" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 3</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a class="dropdown-toggle text-decoration-none text-white pb-0 mb-0" data-bs-toggle="collapse"
                            href="#dropDown2" role="button" aria-expanded="false" aria-controls="">
                            Materi 2
                        </a>
                        <ul class="collapse list-unstyled mt-3" id="dropDown2">
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 1</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 2</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 3</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a class="dropdown-toggle text-decoration-none text-white pb-0 mb-0" data-bs-toggle="collapse"
                            href="#dropDown3" role="button" aria-expanded="false" aria-controls="">
                            Materi 3
                        </a>
                        <ul class="collapse list-unstyled mt-3" id="dropDown3">
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 1</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 2</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 3</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a class="dropdown-toggle text-decoration-none text-white pb-0 mb-0" data-bs-toggle="collapse"
                            href="#dropDown4" role="button" aria-expanded="false" aria-controls="">
                            Materi 4
                        </a>
                        <ul class="collapse list-unstyled mt-3" id="dropDown4">
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 1</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 2</a></li>
                            <li><a href="#" class="text-decoration-none text-white"><span
                                        class="fa fa-chevron-right ms-3 me-4"></span> Sub 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="page-content-wrapper">
            <!-- Navbar -->
            <!-- Navbar -->

            <!-- Main Content -->
            <nav
                class="navbar navbar-expand-lg navbar-light d-lg-none shadow bg-light border-bottom justify-content-start mb-4">
                <button class="navbar-toggler bg-light" id="hamburger" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="main-content">
                {{ $data->materi }}
            </div>
            <!-- Main Content -->
        </div>
        <!-- Main Content -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        // Make a sidebar
        var sidebar = document.querySelector('.sidebar');
        const btn = document.getElementById('hamburger');
        const nav = document.getElementById('sidebar-nav');
        const header = document.querySelector('.header');

        btn.addEventListener("click", () => {
            sidebar.classList.toggle("open");

            if (sidebar.classList.contains("open")) {
                sidebar.setAttribute("style", "margin-left: 0;");
                header.classList.add("d-block");
                return
            } else {
                sidebar.setAttribute("style", "margin-left: -240px;");
                header.classList.remove("d-block");
                return
            }
        })
    </script>
</body>

</html>
