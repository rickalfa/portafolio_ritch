<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Ricardo B.</title>

   
    <!-- Style of the plugin -->
    <link rel="stylesheet" href="{{ asset('resources/plugin/components/Font Awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('resources/plugin/whatsapp-chat-support.css')}}">
    <title>Portafolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!------------------     FONT AWESOME---------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('resources/styles/styles_base.css')}}">


</head>
<body>
    

         <!-- Responsive navbar-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
          <div class="container">
              <a class="navbar-brand" href="#!">Portafolio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre mi</a></li>
                      <li class="nav-item"><a class="nav-link" href="#portafolio">Portafolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                      <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                      <li class="nav-item"><a class="nav-link" href="#3dmodels">3D Web</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Header - set the background image for the header in the line below-->
      <header class="py-5 bg-image-full" style="background-image: url({{ asset('resources/img/galeria/colonie_space_primari_gaia_03.jpg')  }})">
   
  
          <div class="text-center my-5">

              <img class="img-fluid rounded-circle mb-4" height="128px" width="128px" src={{asset('resources/img/galeria/logo-cs.png')  }} alt="..." />
                <div class="d-flex justify-content-center" >
                    <div class="d-inline-flex" style="background-color: black; opacity: 0.5;">
                      <h1 class="text-white fs-3 fw-bolder" > Ricardo Betancourt</h1>
                    </div>
                </div>
                <div class="d-flex justify-content-center" >
                    <div class="d-inline-flex" style="background-color: black; opacity: 0.5;">

                        <p class="text-white-50 mb-0">Portafolio y diseños</p>

                    </div>
                  
                </div>
                
          </div>
      </header>

      <!-- Content section  SOBRE MI-->
      <section class="py-5" id="sobre-mi">
          <div class="container my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h2>Sobre Mi</h2>
                      <p class="lead">Soy un analista programador con experiencia en el desarrollo de aplicaciones web utilizando PHP y Laravel, con diseños en Bootstrap y SASS. 
                    </p>
                      <p class="mb-0">He trabajado en proyectos personales donde he sido responsable de todo el ciclo de vida de las aplicaciones,
                         desde el modelamiento de datos hasta el despliegue en servidores Ubuntu mediante SSH. Utilizo herramientas como MySQL Workbench y Oracle SQL Developer Database para gestionar bases de datos,
                          y también tengo conocimientos en desarrollo móvil con Android Studio y Kotlin.
                        Además de mis habilidades técnicas, destaco por mi capacidad de comunicación efectiva y colaboración en equipo,
                         lo que me permite integrarme rápidamente y aportar en entornos de trabajo dinámicos.</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- Image element - set the background image for the header in the line below-->
      <div class="py-5 bg-image-full" style="background-image: url({{ asset('resources/img/galeria/colonie_space_primari_gaia_03.jpg')  }});
           background-position: center; ">
          <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
          <div style="height: 20rem"></div>
      </div>
      <!-- Content section PORTAFOLIO -->
      <section class="py-5" id="portafolio">
          <div class="container my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h2>Proyectos Personales</h2>
                      <p class="lead">he desarrollado varios proyectos que reflejan mis habilidades en el desarrollo de aplicaciones web y la integración de tecnologías avanzadas. A continuación,
                         presento dos de mis proyectos más significativos:</p>
                 
                  <!-- END CARD PORTAFOLIO ----------------------------->
                    </div>
              </div>
          </div>

          <div class="container py-1">
            <div class="row">
                <div class="col-12 col-md-6">
                     <!-- START CARD PORTAFOLIO ---------------------------->
                     <div class="container mt-5">
                        <div class="card project-card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-4">
                                <img src={{ asset("resources/img/logo_col.png")}} height="64px" width="64px" alt="Circleoflinks" class="project-image rounded-circle mb-2">
                                <div class="project-description">
                                  <p>Circleoflinks es una red ficticia que conecta a profesionales y les permite postularse a ofertas laborales de diversas empresas. El principal objetivo de este proyecto fue aprender y aplicar conocimientos en el consumo y uso de APIs.</p>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <h2 class="card-title">Circleoflinks - API para Conectar Profesionales</h2>
                                <div class="accordion" id="projectAccordion">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Tecnologías Utilizadas
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#projectAccordion">
                                      <div class="accordion-body">
                                        <ul>
                                          <li><strong>Backend:</strong> PHP, Laravel</li>
                                          <li><strong>Frontend:</strong> Bootstrap, SASS</li>
                                          <li><strong>Base de Datos:</strong> MySQL</li>
                                          <li><strong>Despliegue:</strong> Servidor Ubuntu, SSH</li>
                                          <li><strong>APIs:</strong> Creación y consumo de APIs RESTful</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Consumo de APIs
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#projectAccordion">
                                      <div class="accordion-body">
                                        El reto principal fue entender cómo consumir APIs externas y utilizarlas de manera efectiva dentro de la plataforma. Esto se resolvió mediante la implementación de controladores específicos en Laravel para manejar las solicitudes y respuestas de la API.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Autenticación y Seguridad
                                      </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#projectAccordion">
                                      <div class="accordion-body">
                                        Se implementaron mecanismos de autenticación para asegurar que solo los usuarios autorizados puedan acceder a ciertas funciones de la plataforma.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <a href="https://github.com/rickalfa/circleoflinks-app" class="btn btn-link" target="_blank">
                              <i class="bi bi-github" style="color:black; font-size: 1.5rem;"></i> Ver en GitHub
                            </a>
                            <a href="https://circleoflinks.cloud/" class="btn btn-link" target="_blank">
                              <i class="bi bi-globe" style="color:black; font-size: 1.5rem;"></i> Demo en Vivo
                            </a>
                          </div>
                        </div>
                      </div>
              <!------------- END 1nr  CARD----------------------------> 
            </div>

            <div class="col-12 col-md-6">
                <!----------------------------- 2nr   CARD-------------------------------------->
                <div class="container mt-5">
                    <div class="card project-card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-4">
                            <img src={{asset('resources/img/galeria/logo-cs.png')  }}  height="64px" width="64px" alt="Circleoflinks" class="project-image rounded-circle mb-2">
                            <div class="project-description">
                            <p>Conscientiamstudios es un estudio independiente dedicado al desarrollo de videojuegos, así como aplicaciones de escritorio y web. Este proyecto destaca por su enfoque en el desarrollo de aplicaciones web interactivas, utilizando tecnologías modernas y una librería gráfica 3D en JavaScript.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h2 class="card-title">Conscientiamstudios - Estudio Independiente de Desarrollo de Videojuegos</h2>
                            <div class="accordion" id="projectAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                    Tecnologías Utilizadas
                                </button>
                                </h2>
                                <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#projectAccordion">
                                <div class="accordion-body">
                                    <ul>
                                    <li><strong>Frontend:</strong> HTML, CSS, Bootstrap, JavaScript</li>
                                    <li><strong>Gráficos 3D:</strong> Librería gráfica 3D de JavaScript</li>
                                    <li><strong>Diseño y Bocetos:</strong> Creación de diseños 3D y bocetos conceptuales</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                    Integración de Gráficos 3D
                                </button>
                                </h2>
                                <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#projectAccordion">
                                <div class="accordion-body">
                                    Uno de los principales desafíos fue integrar gráficos en 3D de manera eficiente en la web. Esto se logró mediante el uso de una librería gráfica especializada en JavaScript, optimizando la carga y renderizado de los elementos 3D.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                    Diseño y Usabilidad
                                </button>
                                </h2>
                                <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#projectAccordion">
                                <div class="accordion-body">
                                    Crear una interfaz atractiva y fácil de usar fue esencial. Se utilizaron bocetos y prototipos para refinar el diseño antes de su implementación.
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/rickalfa/conscientiamstudios-3d-web" class="btn btn-link" target="_blank">
                        <i class="bi bi-github" style="color:black; font-size: 1.5rem;"></i> Ver en GitHub
                        </a>
                        <a href="https://conscientiamstudios.circleoflinks.cloud/" class="btn btn-link" target="_blank">
                        <i class="bi bi-globe" style="color:black; font-size: 1.5rem;"></i> Demo en Vivo
                        </a>
                    </div>
                    </div>
                </div>
                    </div>
                </div>
                <!-------------- END CARDS-------------------------------->
          </div>
      </section>

      <!------ CONTENT SECTION SEVICIOS---------------------------------------------------->
      <section class="py-5" id="servicios">

              <!-- Image element - set the background image for the header in the line below-->
      <div class="py-5 bg-image-full" style="background-image: url({{ asset('resources/img/galeria/colonie_space_primari_gaia_06.jpg')  }});
      background-position: center; ">
     <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
      <div style="height: 20rem">
        
      </div>
      </div>
 

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Servicios Profesionales</h2>
                    <p class="lead">Ofrezco soluciones integrales en desarrollo de software, especializándome en la creación de aplicaciones web y móviles.
                         Mis servicios incluyen el desarrollo completo de aplicaciones, integración de API,
                          despliegue en servidores, y modelamiento de datos, todo con un enfoque en la eficiencia,
                           seguridad y experiencia del usuario.</p>
              
                  </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="card service-card h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h5 class="card-title">Desarrollo de Aplicaciones Web</h5>
                    <p class="card-text">Experiencia en desarrollo completo de aplicaciones web usando PHP, Laravel, Bootstrap, y SASS. Especializado en interfaces modernas, funcionales y responsivas para una excelente experiencia de usuario.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card service-card h-100">
                  <div class="card-body text-center">
                    <i class="fab fa-whatsapp fa-3x mb-3"></i>
                    <h5 class="card-title">Integración de API de WhatsApp</h5>
                    <p class="card-text">Servicios de integración de la API de WhatsApp, incluyendo creación y gestión de bots personalizados para automatizar procesos de comunicación y mejorar la interacción con clientes en tiempo real.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card service-card h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-server fa-3x mb-3"></i>
                    <h5 class="card-title">Despliegue en Servidores Ubuntu</h5>
                    <p class="card-text">Despliegue y gestión de aplicaciones web en servidores Ubuntu, utilizando SSH para configuraciones remotas seguras. Garantizo un proceso eficiente y seguro, optimizando rendimiento y estabilidad.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card service-card h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-database fa-3x mb-3"></i>
                    <h5 class="card-title">Modelamiento de Datos</h5>
                    <p class="card-text">Modelamiento de datos y diseño de bases de datos con MySQL Workbench y Oracle SQL Developer. Enfoque en crear estructuras de datos robustas y escalables para el crecimiento futuro de la aplicación.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card service-card h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-mobile-alt fa-3x mb-3"></i>
                    <h5 class="card-title">Desarrollo de Aplicaciones Móviles</h5>
                    <p class="card-text">Desarrollo de aplicaciones móviles nativas en Android Studio con Kotlin. Soluciones móviles que complementan y amplían las capacidades de las aplicaciones web, intuitivas y alineadas con las mejores prácticas.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
      </section>

      <!-------- END CONTENT SERVICIOS ---------------------------------------------------------->

      <!-----------START SECTION 3D MODELS------------------------------------------------------------------------------->

      <section class="py-5 " id="3dmodels">
        <div class="container-fluid">
          <div class="row">
               
                <div class="col-12">
                  @php
                 $items = [
            [
                "id" => 1,
                "title" => "Roble low poly",
                "description" => "Experiencia con Maya 2020, Blender Optimización:
                 Enfoque en la optimización de modelos.
                 y escenas para mejorar el rendimiento en tiempo real y la compatibilidad con dispositivos móviles",
                "screen_id" => "3Dscreen",
                "image" => "https://via.placeholder.com/150",
                "link" => "https://example.com/item1"
            ],
            [
                "id" => 2,
                "title" => "Casa en el bosque",
                "description" => "tengo un sólido conocimiento en la integración de experiencias 3D en la web mediante JavaScript ",
                "screen_id" => "3Dscreen01",
                "image" => "https://via.placeholder.com/150",
                "link" => "https://example.com/item2"
            ]

        ];
                  @endphp
  <!----- carousel.blade.php ---------------------------------------------------------------------------------------------->
                <div class="col-12">
          
                  <div  style="position: relative;">

                      <div class="d-flex flex-nowrap" id="scroll-container" style="overflow-x: auto; scroll-behavior: smooth;">
                          @foreach ($items as $item)

                              <div class="card me-2" >
                                <div id="{{$item['screen_id']}}"> 

                                </div>
                                  <div class="card-body"  style="
                                  top: 62%;
                                  background-color: rgb(94 169 173 / 84%);
                                  z-index: 1;
                                  position: absolute;
                                  left: 11%;
                              " >

                               
                
                                  
                                        <h5 class="card-title">{{ $item['title'] }}</h5>
                                        

                                        <div class="container">
                                          <div class="row">
                                            <div class="d-flex flex-column flex-nowrap" style="width: 38rem; ">
                                                <h5 >Special title treatment</h5>
                                                <div class="flex-grow-1 ms-3 p-2 text-wrap">
                                                  {{ $item['description'] }}
                                                  
                                                </div>
                                             
                                              </div>
                                    
                                  
                                          </div>
                                        </div>
                                    
                                       
                                       
                                       
                                
                                      
                                  </div>
                              </div>
                          @endforeach

                      </div>
                  </div>

                  
                  <div style="z-index: 1; top:-230px; position: relative;" class="d-flex justify-content-between align-items-center mb-2 mx-3" >
                    <button class="btn btn-primary" id="scroll-left">
                      <i class="fa-solid fa-circle-chevron-left" style="color: black; font-size: 2rem;"></i> 
                    </button>
                    <button class="btn btn-primary" id="scroll-right">
                       <i class="fa-solid fa-circle-chevron-right" style="color: black; font-size: 2rem;"></i>
                    </button>
                </div>

              </div>

                </div><!-------  END Col -12 - CAROUSEL--------------------------------------------------------------------------->

          </div><!------- END ROW ----------------------------------------------------------------------->

        </div> <!--------- END CONTAINER-FLUID---------------------------------------->

      </section>

      <!------------------------------------------------------------------------------------------------>



      <!--------- START SECTION CONTACTO------------------------------------------------------------------------->

      <section class="py-5" id="contacto">

          <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card contact-form-card">
                  <div class="card-body">
                    <h2 class="text-center mb-4">Contáctame</h2>
                    <form>
                      <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="tu@email.com">
                      </div>
                      <div class="mb-3">
                        <label for="subject" class="form-label">Asunto</label>
                        <select class="form-select" id="subject">
                          <option selected>Selecciona un asunto</option>
                          <option value="oferta-trabajo">Oferta de trabajo</option>
                          <option value="proyecto-personal">Proyecto personal</option>
                          <option value="personal">Personal</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Tu mensaje aquí"></textarea>
                      </div>
                      <div class="d-grid">
                        <button type="submit" class="btn btn-prim border border-1">Enviar Mensaje</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </section>

      <!-- Footer-->
      <footer class="py-5 bg-dark">
          <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Portafolio Ricardo Betancourt 2024</p></div>
      </footer>
     

      <!-- Button Whatsapp Structure -->
      <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
        <div class="wcs_button_label">
                Contáctame por Wsp ¡
            </div>  
        <div class="wcs_button wcs_button_circle">
            <span class="bi bi-whatsapp" style="font-size: 1.9rem"></span>
        </div>  
     
        <div class="wcs_popup">
            <div class="wcs_popup_close">
                <span class="bi bi-close"></span>
            </div>
            <div class="wcs_popup_header">
                <span class="bi bi-whatsapp"></span>
                <strong>Podemos Hablar</strong>
                
                <div class="wcs_popup_header_description">¿Necesitas ayuda? Chatea en Whatsapp para mas detalles</div>
    
            </div>  
            <div class="wcs_popup_input" 
                data-number="56984693206"
                data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:30-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
                <input type="text" placeholder="Escribenos pregunta!" />
                <i class="fa fa-play"></i>
            </div>
            <div class="wcs_popup_avatar">
                <img src="https://avatars.githubusercontent.com/janl?s=180" alt="">
            </div>
        </div>
    </div>
    
    


    <script type="importmap">
			{
				"imports": {
					"three": "https://unpkg.com/three@0.149.0/build/three.module.js",
					"three/addons/": "./jsm/"
				}
			}
		</script>

    <script type="module" src="{{ asset('resources/js/scripts.js')}}"></script>

    <script type="module" src="{{ asset('resources/js/multiscreen.js')}}"></script>



        <!-- jQuery 1.8+ -->
    <script src="{{ asset('resources/plugin/components/jQuery/jquery-1.11.3.min.js')}}"></script>
        <!-- Plugin JS file -->
    <script src="{{ asset('resources/plugin/components/moment/moment.min.js')}}"></script>
    <script src="{{ asset('resources/plugin/components/moment/moment-timezone-with-data.min.js')}}"></script> <!-- spanish language (es) -->
    <script src="{{ asset('resources/plugin/whatsapp-chat-support.js')}}"></script>




  

    <script>
    const scrollContainer = document.getElementById('scroll-container');
    const btnScrollLeft = document.getElementById('scroll-left');
    const btnScrollRight = document.getElementById('scroll-right');

    let isDown = false;
    let startX;
    let scrollLeft;



    document.getElementById('scroll-left').addEventListener('click', function() {
        document.getElementById('scroll-container').scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    document.getElementById('scroll-right').addEventListener('click', function() {
        document.getElementById('scroll-container').scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });


    // Event listeners para el arrastre con el mouse
   // scrollContainer.addEventListener('mousedown', (e) => {
   //     isDown = true;
   //     scrollContainer.classList.add('active');
   //     startX = e.pageX - scrollContainer.offsetLeft;
   //     scrollLeft = scrollContainer.scrollLeft;
   // });

   // scrollContainer.addEventListener('mouseleave', () => {
   //     isDown = false;
   //     scrollContainer.classList.remove('active');
   // });

   // scrollContainer.addEventListener('mouseup', () => {
   //     isDown = false;
   //     scrollContainer.classList.remove('active');
   // });

   // scrollContainer.addEventListener('mousemove', (e) => {
   //     if (!isDown) return;
   //     e.preventDefault();
   //     const x = e.pageX - scrollContainer.offsetLeft;
   //     const walk = (x - startX) * 2; // Multiplicar por 2 para mayor velocidad
   //     scrollContainer.scrollLeft = scrollLeft - walk;
   // });
</script>

<style>
    #scroll-container {
        cursor: grab;
    }

    #scroll-container.active {
        cursor: grabbing;
    }
</style>




       $('#button-w').whatsappChatSupport({
            defaultMsg : '',
        });
    </script>

     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
    
   



</body>

<script>



</script>
</html>