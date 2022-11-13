    <body class="antialiased">
            @extends("layouts.appnavega")
            <div class="contenedor">
                <section class="contenido-header">
                    <section class="carrusel">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{asset("img/ManosCruzadas.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                  <p>Templo de Manos Cruzadas "Kotosh"</p>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{asset("img/HuanucoPampa.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                  <p>Huánuco Pampa</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/BellaDurmiente.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Tingo Maria</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/CastilloChupan.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Castillo de Chupan - Yarowilca</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/Tantamayo.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Tantamayo</p>
                                </div>
                              </div>
 
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                       
                        <a href="#beneficios">Ver Más</a>
                    </section>  
                    
                    <img src="{{asset("img/PortadaPagina.jpg")}}" height="660">
                </section>
            </div>  
            <section class="about-us">
                <div class="contenedor1">
                    <h2 class="titulo">Servicios Turisticos</h2>
                    <div class="contenedor-articulo">
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Hotel.png")}}" width="100" height="100">
                            <h3>Alojamiento</h3>
                            <p>Un hotel con vistas, una tienda de campaña en un camping en plena naturaleza, un apartamento en el centro de la ciudad… En Huánuco hay una variada oferta de alojamiento</p>
                            <a href="/alojamiento">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Restaurantes.png")}}" width="100" height="100">
                            <h3>Restaurantes</h3>
                            <p>Una de las mejores formas de disfrutar de Huánuco es a través del paladar. Descubrirás una cultura gastronómica sorprendente a través de económicos menús del día y de restaurantes de renombre</p>
                            <a href="/restaurante">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Transporte.png")}}" width="100" height="100">
                            <h3>Transporte</h3>
                            <p>En avión, en auto..Cualquier transporte sirve para llegar a Huánuco. Aquí encontraras todas las opciones disponibles para ayudaros a decidir qué medio de transporte te conviene más</p>
                            <a href="/transporte">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Clinica.png")}}" width="100" height="100">
                            <h3>Clinicas Hospitales</h3>
                            <p>contamos con una variedad de destinos especializados en turismo médico donde se unen prestadores de servicios turísticos y atención médica de la más alta calidad para atender las especialidades</p>
                            <a href="/clinicas">Ver Más ---></a>
                        </div>
                    </div>
                </div>
            </section> 
    </body>
