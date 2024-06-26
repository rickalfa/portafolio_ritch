<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link rel="stylesheet" href="{{ asset('resources/styles/styles_base.css')}}">

    <!-- Style of the plugin -->
    <link rel="stylesheet" href="{{ asset('resources/plugin/components/Font Awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('resources/plugin/whatsapp-chat-support.css')}}">
    <title>Portafolio Ricardo betancourt</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles/styles.css" rel="stylesheet" />

</head>
<body>
    

         <!-- Responsive navbar-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="#!">Portafolio Ricardo Betancourt</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Header - set the background image for the header in the line below-->
      <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
          <div class="text-center my-5">
              <img class="img-fluid rounded-circle mb-4" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="..." />
              <h1 class="text-white fs-3 fw-bolder">Full Width Pics</h1>
              <p class="text-white-50 mb-0">Landing Page Template</p>
          </div>
      </header>
      <!-- Content section-->
      <section class="py-5">
          <div class="container my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h2>Full Width Backgrounds</h2>
                      <p class="lead">A single, lightweight helper class allows you to add engaging, full width background images to sections of your page.</p>
                      <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in the universe.</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- Image element - set the background image for the header in the line below-->
      <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
          <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
          <div style="height: 20rem"></div>
      </div>
      <!-- Content section-->
      <section class="py-5">
          <div class="container my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h2>Engaging Background Images</h2>
                      <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                      <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- Footer-->
      <footer class="py-5 bg-dark">
          <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
      </footer>
     

      <!-- Button Whatsapp Structure -->
      <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
        <div class="wcs_button_label">
                Contáctanos
            </div>  
        <div class="wcs_button wcs_button_circle">
            <span class="fa fa-whatsapp"></span>
        </div>  
     
        <div class="wcs_popup">
            <div class="wcs_popup_close">
                <span class="fa fa-close"></span>
            </div>
            <div class="wcs_popup_header">
                <span class="fa fa-whatsapp"></span>
                <strong>Servicio al cliente</strong>
                
                <div class="wcs_popup_header_description">¿Necesitas ayuda? Chatea con nosotros en Whatsapp</div>
    
            </div>  
            <div class="wcs_popup_input" 
                data-number="56984693206"
                data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
                <input type="text" placeholder="Escribenos pregunta!" />
                <i class="fa fa-play"></i>
            </div>
            <div class="wcs_popup_avatar">
                <img src="https://avatars.githubusercontent.com/janl?s=180" alt="">
            </div>
        </div>
    </div>
    
    
        <!-- jQuery 1.8+ -->
    <script src="{{ asset('resources/plugin/components/jQuery/jquery-1.11.3.min.js')}}"></script>
        <!-- Plugin JS file -->
    <script src="{{ asset('resources/plugin/components/moment/moment.min.js')}}"></script>
    <script src="{{ asset('resources/plugin/components/moment/moment-timezone-with-data.min.js')}}"></script> <!-- spanish language (es) -->
    <script src="{{ asset('resources/plugin/whatsapp-chat-support.js')}}"></script>
    <script>
       $('#button-w').whatsappChatSupport({
            defaultMsg : '',
        });
    </script>

     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="resources/js/scripts.js"></script>
   



</body>

<script>



</script>
</html>