<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Computer Solutions</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo(base_url('public/styles.css'))?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
              integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
              crossorigin="anonymous">
    </head>

    <header class="sticky-top">
        <nav class="navbar border-bottom">
            <div class="d-inline-flex">
                <a href="#" class="mr-auto text-decoration-none" id="menu-toggle">
                    <span class="text-light"><i class="fas fa-bars fa-2x"></i></span>
                </a>
                <a href="<?php echo(base_url('public/')) ?>" class="mr-auto">
                    <img src="<?php echo(base_url('public/img/logo_computer_solutions_white.png'))?>" width="150px" alt="" loading="lazy">
                </a>
            </div>
        </nav>
    </header>

    <body>
        <div class="d-flex" id="wrapper">
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading p-0 pb-3 pt-3">
                    <a href="<?php echo(base_url('public/')) ?>" class="list-group-item list-group-item-action bg-transparent border-0 p-0">
                        <img class="img-fluid" src="<?php echo(base_url('public/img/logo_computer_solutions.png'))?>" alt="">
                    </a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="<?php echo(base_url('public/')) ?>" class="list-group-item list-group-item-action">
                        <i class="fas fa-store-alt fa-fw fa-lg"></i>Home
                        <span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                    <a href="<?php echo(base_url('public/customers')) ?>" class="list-group-item list-group-item-action">
                        <i class="far fa-user fa-fw fa-lg"></i>Customers
                        <span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                    <a href="<?php echo(base_url('public/products')) ?>" class="list-group-item list-group-item-action">
                        <i class="fas fa-cart-arrow-down fa-fw fa-lg"></i>Products
                        <span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                    <a href="<?php echo(base_url('public/contact')) ?>" class="list-group-item list-group-item-action">
                        <i class="far fa-envelope fa-fw fa-lg"></i>Contact
                        <span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" id="active">
                        <i class="far fa-id-card fa-fw fa-lg"></i>Profiles
                        <span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                </div>
            </div>
            <div id="page-content-wrapper">

                <div class="container-fluid">
                    <h1 class="mt-4 rounded-lg text-light p-3">Armaggecode Team...</h1>

                    <div class="container">
                        <div class="row mt-5">
                            <div class="row row-cols-1 row-cols-md-3" id="cards-profile">
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="<?php echo(base_url('public/img/avatar_samuel.jpg'))?>"
                                             class="card-img-top rounded-circle w-50 mx-auto mt-2" alt="...">
                                        <div class="card-body">
                                            <div class="h4 text-center">
                                                <a href="https://github.com/squinteroagudelo" target="blank"><i class="fab fa-github fa-lg"></i></a>
                                                <a href="https://www.linkedin.com/in/samuel-quintero-agudelo-471b8540/" target="blank"><i class="fab fa-linkedin fa-lg"></i></a>
                                                <a href="https://www.instagram.com/samuelquiinteroa/" target="blank"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                            <h3 class="card-title text-center">Samuel Quintero</h3>
                                            <p class="text-center mt-n2">Full-stack Developer</p>
                                            <p class="text-center mt-n4">CESDE University</p>
                                            <p class="card-text text-justify">
                                                I'm a software developer specialised in frontend and backend development
                                                for complex scalable web apps. I also have mobile development skills for
                                                Android.
                                            </p>
                                            <div class="text-center skills">
                                                <span class="badge">HTML</span>
                                                <span class="badge">CSS</span>
                                                <span class="badge">JavaScript</span>
                                                <span class="badge">PHP</span>
                                                <span class="badge">C#</span>
                                                <span class="badge">Java</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="<?php echo(base_url('public/img/avatar_anny.png'))?>"
                                             class="card-img-top rounded-circle w-50 mx-auto mt-2" alt="...">
                                        <div class="card-body">
                                            <div class="h4 text-center">
                                                <a href="https://github.com/yuranyz/" target="blank"><i class="fab fa-github fa-lg"></i></a>
                                                <a href="https://www.linkedin.com/in/yurany-zuluaga-9b8a2a1b3/" target="blank"><i class="fab fa-linkedin fa-lg"></i></a>
                                                <a href="https://www.instagram.com/any.zuluaga/?hl=es-la" target="blank"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                            <h3 class="card-title text-center">Yurany Zuluaga</h3>
                                            <p class="text-center mt-n2">Software Developer Assistant</p>
                                            <p class="text-center mt-n4">CESDE University</p>
                                            <p class="card-text text-justify">
                                                Design Lover. Available to provide crazy ideas or the actions that
                                                innovation demands, within the project owner requirements.
                                            </p>
                                            <div class="text-center skills">
                                                <span class="badge">Web Layout</span>
                                                <span class="badge">Front-end</span>
                                                <span class="badge">Database Analyst</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="<?php echo(base_url('public/img/avatarMelany.svg'))?>"
                                             class="card-img-top rounded-circle w-50 mx-auto mt-2" alt="...">
                                        <div class="card-body">
                                            <div class="h4 text-center">
                                                <a href="https://github.com/melanygaviriarivera" target="blank"><i class="fab fa-github fa-lg"></i></a>
                                                <a href="https://www.linkedin.com/in/melany-gaviria-rivera-337a221b3/" target="blank"><i class="fab fa-linkedin fa-lg"></i></a>
                                                <a href="https://www.instagram.com/melanygaviriarivera/?hl=es-la" target="blank"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                            <h3 class="card-title text-center">Melany Gaviria</h3>
                                            <p class="text-center mt-n2">Software Developer Assistant</p>
                                            <p class="text-center mt-n4">CESDE University</p>
                                            <p class="card-text text-justify">
                                                Web designer, with emphasis in Front-end, Database developer and with
                                                knowledge in the code editors visual studio,Sql,Android studio.
                                            </p>
                                            <div class="text-center skills">
                                                <span class="badge">HTML</span>
                                                <span class="badge">CSS</span>
                                                <span class="badge">JavaScript</span>
                                                <span class="badge">PHP</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="<?php echo(base_url('public/img/avatar_cristian.png'))?>"
                                             class="card-img-top rounded-circle w-50 mx-auto mt-2" alt="...">
                                        <div class="card-body">
                                            <div class="h4 text-center">
                                                <a href="https://github.com/kristhian1146" target="blank"><i class="fab fa-github fa-lg"></i></a>
                                                <a href="https://www.linkedin.com/in/cristian-puerta-5313bb1a7/" target="blank"><i class="fab fa-linkedin fa-lg"></i></a>
                                                <a href="https://www.instagram.com/cris_pb10/" target="blank"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                            <h3 class="card-title text-center">Cristian Puerta</h3>
                                            <p class="text-center mt-n2">Software Developer Assistant</p>
                                            <p class="text-center mt-n4">CESDE University</p>
                                            <p class="card-text text-justify">
                                                Front-end web designer, databasedeveloper with knowledge of html.
                                            </p>
                                            <div class="text-center skills">
                                                <span class="badge">HTML</span>
                                                <span class="badge">CSS</span>
                                                <span class="badge">JavaScript</span>
                                                <span class="badge">PHP</span>
                                                <span class="badge">Android</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="<?php echo(base_url('public/img/avatar_santiago.jpeg'))?>"
                                             class="card-img-top rounded-circle w-50 mx-auto mt-2" alt="...">
                                        <div class="card-body">
                                            <div class="h4 text-center">
                                                <a href="https://github.com/floufire" target="blank"><i class="fab fa-github fa-lg"></i></a>
                                                <a href="https://www.linkedin.com/in/santiago-zapata-pineda-17a9bb1b4/" target="blank"><i class="fab fa-linkedin fa-lg"></i></a>
                                                <a href="https://www.instagram.com/anoderbaitsdeduts/" target="blank"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                            <h3 class="card-title text-center">Santiago Zapata</h3>
                                            <p class="text-center mt-n2">Software Developer Assistant</p>
                                            <p class="text-center mt-n4">CESDE University</p>
                                            <p class="card-text text-justify">I'm a software developer with great skills
                                                                              for PHP back-end programming and
                                                                              Javascript data distribution in frontend
                                            </p>
                                            <div class="text-center skills">
                                                <span class="badge">HTML</span>
                                                <span class="badge">CSS</span>
                                                <span class="badge">JavaScript</span>
                                                <span class="badge">PHP</span>
                                                <span class="badge">C#</span>
                                                <span class="badge">Java</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous"></script>

        <script src="<?php echo (base_url('public/main.js')) ?>"></script>
    </body>

</html>
