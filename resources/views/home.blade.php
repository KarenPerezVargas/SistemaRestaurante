<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>JHON CERNA</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="/hm/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="/hm/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="/hm/css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Platos a la carta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Reservar</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="/hm/imgs/zarla-hogareos.png" class="brand-img" alt="">
                <span class="brand-txt">MISKYCHALLWA</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Menu del dia<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Reseñas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Ubicación</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{auth()->user()->username}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <li><a class="dropdown-item" href="{{route('perfil')}}">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Mis Favoritos</a></li>
                        <li><a class="dropdown-item" href="{{route('salir')}}">Cerrar Sesíon</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">MISKYCHALLWA</h1>
            <h2 class="display-4 mb-5">"Sabores inolvidables &amp; servidos con pasión"</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">Ver Nuestra Galeria</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Historia</h2>
                        <p>Había una vez un restaurante llamado "Miskychallwa", cuyo nombre en quechua significa "Dulce Encuentro". Este restaurante era conocido por su ambiente acogedor y su cocina fusión que combinaba sabores tradicionales con técnicas modernas. Su fundador, JHON, provenía de una familia de chefs y siempre soñó con abrir su propio negocio. <br>JHON arduamente para convertir su sueño en realidad. Con pocos recursos, abrió las puertas de Miskychallwa en un pequeño local del centro de la ciudad. Desde el primer día, los comensales quedaron cautivados por los sabores únicos y exquisitos que ofrecía el restaurante. <br> A medida que el boca a boca se extendía, Miskychallwa se volvió un lugar de moda. Pronto, la prensa local comenzó a destacar su propuesta gastronómica innovadora. Los clientes hacían largas filas para probar los platos creativos y coloridos que JHON preparaba con amor y dedicación.<br>La fama de Miskychallwa traspasó fronteras. Los críticos gastronómicos elogiaron la combinación perfecta entre tradición y vanguardia que JHON lograba en sus platos. El restaurante se convirtió en un destino obligado para los amantes de la buena comida de todo el mundo.<br> A medida que crecía en éxito, JHON nunca perdió de vista sus raíces. Valoraba los ingredientes locales y apoyaba a los pequeños productores. Además, se aseguraba de que su equipo recibiera una capacitación constante y tuviera oportunidades de crecimiento profesional.<br>Con el tiempo, Miskychallwa se convirtió en un referente mundial de la alta gastronomía. JHON fue reconocida como una de las chefs más influyentes de su generación. Sin embargo, su mayor satisfacción siempre fue ver a los clientes disfrutar de sus creaciones y sentirse transportados por los sabores.<br>La historia de Miskychallwa se convirtió en una inspiración para muchos emprendedores. Demostró que con pasión, creatividad y trabajo duro, los sueños pueden hacerse realidad. El restaurante se convirtió en un lugar donde los comensales no solo disfrutaban de deliciosos platillos, sino también experimentaban un dulce encuentro con la cultura y la tradición gastronómica.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">ESPECIALIDAD DE LA CASA</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-6.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-7.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-8.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-9.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-10.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-11.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="/hm/imgs/gallary-12.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <h2 class="section-title mb-5">RESERVAR UNA MESA</h2>
            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="email" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="CORREO ELECTRONICO">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="NUMERO DE INVITADOS" max="20" min="0">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="12/12/12">
                </div>
            </div>
            <a href="#" class="btn btn-lg btn-primary" id="rounded-btn">ENCONTRAR MESA</a>
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">MENU DEL DIA</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-4 mb-5">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#foods" role="tab" aria-controls="pills-home" aria-selected="true">PLATOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile" aria-selected="false">BEBIDAS</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="/hm/imgs/blog-1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$5</a></h1>
                                <h4 class="pt20 pb20">Reiciendis Laborum </h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="/hm/imgs/blog-2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$12</a></h1>
                                <h4 class="pt20 pb20">Adipisci Totam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="/hm/imgs/blog-3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$8</a></h1>
                                <h4 class="pt20 pb20">Dicta Deserunt</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="juices" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="/hm/imgs/blog-4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$15</a></h1>
                                <h4 class="pt20 pb20">Consectetur Adipisicing Elit</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="/hm/imgs/blog-5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$29</a></h1>
                                <h4 class="pt20 pb20">Ullam Laboriosam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="/hm/imgs/blog-6.jpg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3</a></h1>
                                <h4 class="pt20 pb20">Fugit Ipsam</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">RESEÑAS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Alcides Alvarado</h3>
                    <h6 class="testmonial-subtitle">Alcalde</h6>
                    <div class="testmonial-body">
                        <p>"¡Increíble experiencia en este restaurante! Desde el momento en que entré, fui recibido con una cálida bienvenida y un ambiente encantador. El servicio fue impecable, con un personal amable y atento que estuvo pendiente de todas nuestras necesidades. La comida fue simplemente deliciosa, con platos exquisitamente preparados y una presentación impresionante. Sin duda, fue una experiencia gastronómica que recordaré por mucho tiempo".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Nora Alvarado</h3>
                    <h6 class="testmonial-subtitle">Abogada</h6>
                    <div class="testmonial-body">
                        <p>"No puedo dejar de elogiar este restaurante por su excelente servicio y comida de primera calidad. Desde el primer momento, nos sentimos como en casa, gracias a la atención amigable y profesional del personal. Los platos que pedimos superaron nuestras expectativas, con sabores únicos y una combinación perfecta de ingredientes frescos. Definitivamente, recomendaría este lugar a todos aquellos que busquen una experiencia culinaria memorable".</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Elmer Alvarado</h3>
                    <h6 class="testmonial-subtitle">Alcalde</h6>
                    <div class="testmonial-body">
                        <p>"Una experiencia gastronómica espectacular. Desde el momento en que ingresé, fui sorprendido por un ambiente elegante y acogedor. El equipo de servicio nos trató como reyes, brindándonos recomendaciones personalizadas . La comida fue simplemente excepcional, con platos creativos y una presentación impecable. Sin duda, este restaurante se ha convertido en uno de mis favoritos y estoy ansioso por volver pronto".</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Stephany Perez</h3>
                    <h6 class="testmonial-subtitle">Enfermeria</h6>
                    <div class="testmonial-body">
                        <p>"Mi visita a este restaurante fue verdaderamente memorable. Desde el momento en que entré, quedé impresionado por la elegancia y el ambiente acogedor. El servicio fue excepcional, con un personal amable y conocedor que nos brindó recomendaciones maravillosas. Cada plato que probamos fue una delicia para el paladar, con ingredientes frescos y una presentación artística. Esta experiencia culinaria definitivamente superó mis expectativas y no puedo esperar para regresar".

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Karen Perez</h3>
                    <h6 class="testmonial-subtitle">Ingeniera</h6>
                    <div class="testmonial-body">
                        <p>"No tengo más que elogios para este restaurante. La calidad de la comida y el servicio son insuperables. Desde el momento en que ingresé, fui recibido con una sonrisa y un trato amable. Cada plato que probamos fue una explosión de sabores, con ingredientes frescos y combinaciones únicas. El personal estuvo atento a cada detalle y nos hizo sentir como huéspedes especiales. Recomiendo encarecidamente este lugar para aquellos que buscan una experiencia culinaria excepcional".</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Olga Alvarado</h3>
                    <h6 class="testmonial-subtitle">Doctora</h6>
                    <div class="testmonial-body">
                        <p>"¡Una experiencia gastronómica que me dejó sin palabras! Este restaurante es simplemente excepcional. El ambiente elegante y sofisticado creó el escenario perfecto para disfrutar de una comida de primer nivel. El servicio fue impecable, con un equipo profesional y amigable que nos guió a través de un menú excepcional. Cada plato fue una obra maestra culinaria, con sabores delicados y una presentación impresionante. Sin duda, este lugar se destaca como uno de los mejores en la ciudad".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>ENCUÉNTRANOS</h3>
                <p>Te invitamos a adentrarte en el maravilloso mundo de sabores y sensaciones en "Miskychallwa". En nuestro acogedor restaurante, te esperamos con los brazos abiertos para que vivas una experiencia culinaria única. Cada plato que preparamos es una obra de arte, cuidadosamente elaborada con ingredientes frescos y de calidad. Nuestro equipo de talentosos chefs está ansioso por sorprenderte con combinaciones de sabores que te transportarán a lugares lejanos. Te invitamos a dejarte llevar por la magia de nuestros aromas y texturas, a disfrutar de cada bocado y a crear recuerdos inolvidables en cada visita. ¡Te esperamos con ilusión para compartir contigo el dulce encuentro de Miskychallwa!</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> jiron tacna #340</p>
                    <p><span class="ti-support pr-3"></span>948536059</p>
                    <p><span class="ti-email pr-3"></span>jhoncernaalvarado566@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>ENVÍANOS UN CORREO ELECTRÓNICO</h3>
                <P class="text-muted">jhoncernaalvarado566@gmail.com</P>
            </div>
            <div class="col-sm-4">
                <h3>LLÁMANOS</h3>
                <P class="text-muted">948536059</P>
            </div>
            <div class="col-sm-4">
                <h3>ENCUÉNTRANOS</h3>
                <P class="text-muted">Jiron tacna #340</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="/hm/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/hm/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="/hm/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="/hm/vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="/hm/js/foodhut.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>