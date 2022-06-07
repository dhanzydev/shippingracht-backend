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
                <a href="#" class="text-white header fs-4 fw-bold text-decoration-none position-fixed">{{ $data->title }}</a>
                <hr>
            </div>
            <div id="sidebar-nav" class="sidebar-nav">
                <ul class="list-unstyled list-group position-fixed" id="listHeader">

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
            <div class="main-content" id="content">
                {!! $data->materi !!}
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

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        // Display heading from content materi

        var listHeader = document.getElementById('listHeader');
        var content = document.getElementById('content');

        //Get all heading
        const elementh1 = document.getElementsByTagName("h1");
        const elementh2 = document.getElementsByTagName("h2");
        const elementh3 = document.getElementsByTagName("h3");
        const elementh4 = document.getElementsByTagName("h4");
        const elementh5 = document.getElementsByTagName("h5");
        const elementh6 = document.getElementsByTagName("h6");


        // Create list
        if (elementh1 != null) {
            for(var i = 0; i < elementh1.length; i++) {
                // Create list item
                var li = document.createElement('li');
                var tagA = document.createElement("a");
                var text = elementh1[i].innerText;
                var textReplace = text.replace(/\s/g, '');


                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh1[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh1[i].setAttribute("id", textReplace);
            }
        }

        if (elementh2 != null) {
            for(var i = 0; i < elementh2.length; i++) {
                var li = document.createElement('li');
                var tagA = document.createElement("a");
                var text = elementh2[i].innerText;
                var textReplace = text.replace(/\s/g, '');

                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh2[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh2[i].setAttribute("id", textReplace);
            }
        }

        if (elementh3 != null) {
            for(var i = 0; i < elementh3.length; i++) {
                var li = document.createElement('li');
                var tagA = document.createElement("a");
                var text = elementh3[i].innerText;
                var textReplace = text.replace(/\s/g, '');

                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh3[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh3[i].setAttribute("id", textReplace);
            }
        }

        if (elementh4 != null) {
            for(var i = 0; i < elementh4.length; i++) {
                var tagA = document.createElement("a");
                var li = document.createElement('li');
                var text = elementh4[i].innerText;
                var textReplace = text.replace(/\s/g, '');

                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh4[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh4[i].setAttribute("id", textReplace);
            }
        }

        if (elementh5 != null) {
            for(var i = 0; i < elementh5.length; i++) {
                var tagA = document.createElement("a");
                var li = document.createElement('li');
                var text = elementh5[i].innerText;
                var textReplace = text.replace(/\s/g, '');

                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh5[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh5[i].setAttribute("id", textReplace);
            }
        }

        if (elementh6 != null) {
            for(var i = 0; i < elementh6.length; i++) {
                var tagA = document.createElement("a");
                var li = document.createElement('li');
                var text = elementh6[i].innerText;
                var textReplace = text.replace(/\s/g, '');

                tagA.setAttribute("href", "#" + textReplace);
                tagA.setAttribute("class", "text-decoration-none text-black pb-0 mb-0 text-white");
                tagA.innerText = elementh6[i].innerText;
                li.appendChild(tagA);
                listHeader.appendChild(li);

                elementh6[i].setAttribute("id", textReplace);
            }
        }

        console.log(listHeader);

    </script>

</body>

</html>
