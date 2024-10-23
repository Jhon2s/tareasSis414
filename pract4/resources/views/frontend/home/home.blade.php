<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
   
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Portafolio</a>
            <a href="#">Servicios</a>
            <a href="#">Contactos</a>
        </nav>
        <section class="texto-header">
            <h1> promocion y ofertas del 30%</h1>
            <h2>pagina para ver cosas</h2>

        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L500.00,149.60 L-0.00,149.60 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="{{ asset('frontend/images/ilustracion2.svg')}}" alt="" class="imagen-about-us">
                <div class="contenido-texto">
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat corporis expedita laborum nam est temporibus voluptatum eveniet cupiditate ducimus consequuntur corrupti nulla reiciendis, possimus ipsam labore, et voluptatem accusamus quae.</p>
                    <h3><span>2</span>Los mejores productos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat corporis expedita laborum nam est temporibus voluptatum eveniet cupiditate ducimus consequuntur corrupti nulla reiciendis, possimus ipsam labore, et voluptatem accusamus quae.</p>  
            </div>
            
        </div>

        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img1.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img2.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img3.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img4.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img5.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img6.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img7.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('frontend/images/img8.jpg')}}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('frontend/images/icono1.png')}}" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                   
                </div>
            </div>

        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Comentarios</h2>
            <div class="cards">
                <div class="card">
                    <img src="{{ asset('frontend/images/face1.jpg')}}" alt="">
                    <div class="contenido-texto-card">
                        <h4>Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, possimus?</p>
                    </div>
                    
            </div>
            <div class="card">
                <img src="{{ asset('frontend/images/face2.jpg')}}" alt="">
                <div class="contenido-texto-card">
                    <h4>Name</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, possimus?</p>
                </div>
                
            </div>
        </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo"Nuestros servicios></h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="{{ asset('frontend/images/ilustracion1.svg')}}" alt="">
                        <h3>Name </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, voluptas?</p>

                    </div>
                    <div class="servicio-ind">
                        <img src="{{ asset('frontend/images/ilustracion4.svg')}}" alt="">
                        <h3>Name </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, voluptas?</p>

                    </div>
                    <div class="servicio-ind">
                        <img src="{{ asset('frontend/images/ilustracion3.svg')}}" alt="">
                        <h3>Name </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, voluptas?</p>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4>Phone</h4>
                <p>671256715</p>
            </div>
            <div class="contenedor-foo">
                <h4>Email</h4>
                <p>hyoga.cisne@gmail.com</p>
            </div>
            <div class="contenedor-foo">
                <h4>Direccion</h4>
                <p>La calle la paz</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eaque. </h2>
    </footer>

    
</body>
</html>