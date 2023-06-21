<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

  <meta name="description"
    content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
  <meta property="og:site_name" content="Dashmix">
  <meta property="og:description"
    content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="shortcut icon" href="{{asset('front/media/favicons/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset('front/media/favicons/favicon-192x192.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/media/favicons/apple-touch-icon-180x180.png')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="{{asset('front/css/dashmix.css')}}">
  <style>
    .text-decoration-none {
        font-size: 14px;
    }
    #bob{
        display: none;
    }
    .darslar{
        display: none;
    }
    .oqitishtex{
        display: none;
    }
    .xaritalar{
        display: none;
    }
    .pdflar{
        display: none;
    }
</style>

</head>

<body>

  <div id="page-container"
    class="sidebar-o sidebar-lite enable-page-overlay side-scroll page-header-fixed main-content-narrow">

    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="bg-header-dark">
        <div class="content-header bg-white-5">
          <!-- Logo -->
          <a class="fw-semibold text-white tracking-wide" href="index.html">
            <span class="smini-visible">
              D<span class="opacity-75">x</span>
            </span>
            <span class="smini-hidden">
              Masterprofedu.uz
            </span>
          </a>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
              data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
              <i class="far fa-moon" id="dark-mode-toggler"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-white d-lg-none" data-toggle="layout"
              data-action="sidebar_close">
              <i class="fa fa-times-circle"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side" >
          <section class="banner mx-0 px-0" id="banner">
            <div class="col-12" id="asosiydiv">
                <div class="">
                    <div class="mt-3 py-1">
                        <a href="" class="text-decoration-none text-primary"><b>+Тақвим мавзулар режаси</b></a>
                    </div>
                </div>
                <div>
                    <div class="py-1">
                        <a href="#" id="fantalim" class="text-decoration-none text-primary"><b>+ Фаннинг таълим технологияси </b></a>
                    </div>
                    <ul type="none" id="bob" class="m-0 ps-1">
                        @foreach ($data as $item)
                            <li>
                                <div id="bob{{$item->id}}" class="py-1">
                                    <p class="text-decoration-none">{{$item->name}}</p>
                                </div>
                                <ul type="none" class="darslar ps-2" id="darslar{{$item->id}}">
                                    @foreach ($item->lessons as $lesson)
                                    <li><div  id="dars{{$lesson->id}}" class="py-1"><p style="margin: 0px;" class="ps-1 text-decoration-none">{{$lesson->name}}</p></div>
                                        <ul type="none" class="oqitishtex ps-1" id="oqitishtex{{$lesson->id}}">
                                            <li><div id="oqitish{{$lesson->id}}" class="py-1"><a style="margin: 0px;" id="texnologiya" class="ps-3 text-dark text-decoration-none">+ Ўқитиш технологияси</a></div>
                                                <ul type="none" class="xaritalar ps-1"  id="xaritalar{{$lesson->id}}">
                                                    <li ><div id="xarita{{$lesson->id}}" class="py-1"><a id="xaritasi" style="margin: 0px;" class="ps-3 text-dark text-decoration-none">+ Ўқув машғулотининг технологик харитаси</a></div>
                                                        <ul type="none" id="file{{$lesson->id}}" class="pdflar ps-1">
                                                            @foreach ($lesson->pdfs as $pdf)
                                                                {{-- @if(count($pdf)) --}}
                                                                    <li id="pdf{{$pdf->id}}" class="ps-3 ">
                                                                        <a  href="#">{{$pdf->title}}</a></td>
                                                                    </li>
                                                                {{-- @endif   --}}
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>   
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <div class="py-2" id="mavzu">
                        <a href="#" class="text-decoration-none text-primary"><b>+Мавзулар тўплами</b></a>
                    </div>
                </div> 
                <div>
                    <div class="py-2">
                        <a href="#" class="text-decoration-none text-primary"><b>+Баҳолаш воситалари</b></a>
                    </div>
                </div> 
                <div>
                    <div class="py-2">
                        <a href="#" class="text-decoration-none text-primary"><b>+Визуал – дидактик ресурслар</b></a>
                    </div>
                </div>   
            </div>
            </section>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div>
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-alt-secondary me-1" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          
          
        </div>
        <ul class="nav nav-pills nav-justified push">
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-chart-bar d-sm-none"></i>
              <span class="d-none d-sm-inline-block">Metodik tavsiyalar</span>
              <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Me'yoriy huquqiy hujjatlar
                </a>
              </div>
              <div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Foydali adabiyotlar
                </a>
              </div>
              <div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Foydali manbalar
                </a>
              </div>
              <div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Videoroliklar
                </a>
              </div>
            </div>
          </div>
            <li class="nav-item mx-lg-3 px-sm-0">
              <a class="nav-link" href="javascript:void(0)">Kursgakirish</a>
            </li>
            <li class="nav-item mx-lg-3 px-sm-0">
              <a class="nav-link" href="javascript:void(0)">Bog'lanish</a>
            </li>
            <li class="nav-item mx-lg-3 px-sm-0">
              <a class="nav-link" href="javascript:void(0)">Qidiruv</a>
            </li>
          </ul>
        <!-- END Left Section -->

        <!-- Right Section -->
          <!-- User Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user d-sm-none"></i>
              <span class="d-none d-sm-inline-block">Admin</span>
              <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Logout
                </a>
              </div>
            </div>
          </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

 
      <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
          <div class="w-100 text-center">
            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <div  id="asosiydiv2">
            <iframe id="file" width="100%" height="800" src="files/1686480557_resume.pdf" frameborder="1"></iframe>   
        </div>
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light row">
      <div class="col-6">
        <!-- HTML Version -->
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0 item item-rounded bg-xsmooth text-white-75 fw-semibold me-4">
            <i class="fab fa-2x fa-html5"></i>
          </div>
          <div class="flex-grow-1">
            <p class="text-muted mb-0"><b>An abstract HTML version which can be used with any server side language/framework you prefer or currently working with.</b>
            </p>
          </div>
        </div>
        <!-- END HTML Version -->
      </div>
      <div class="col-4 offset-2">
        <ul type="none">
          <li><a  href=""> <i class="fab fa-google"> </i> +998 91 123 45 67</a></li>
          <li><a  href=""><i class="fa fa-phone"> </i> masterprofedu.uz</a></li>
          <li><a  href=""><i class="fab fa-telegram"> </i> masterprofedu.uz</a></li>
        </ul>
      </div>
    </footer>
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="{{asset('front/js/dashmix.app.js')}}"></script>
  <script>
    $(document).ready(function() {
    $("#fantalim").click(function(){
        $("#bob").toggle();
    });

    var data = @json($data);

    $.each(data, function(i, item) {
        var loop = item.id;
        $("#bob"+loop).click(function(){
            $(".darslar").not("#darslar" + loop).hide();
            $("#darslar"+loop).toggle();
        });

        $.each(item.lessons, function(i, lesson) {
            $("#dars"+lesson.id).click(function(){
                $(".oqitishtex").not("#oqitishtex" + lesson.id).hide();
                $("#oqitishtex"+lesson.id).toggle();
            });

            $("#oqitish"+lesson.id).click(function(){
                $("#xaritalar"+lesson.id).toggle();
            });

            $("#xarita"+lesson.id).click(function(){
                $("#file"+lesson.id).toggle();
            });
            $.each(lesson.pdfs, function(i, pdf) {
                $("#pdf"+pdf.id).click(function(){
                    $('#file').attr('src', '/files/'+pdf.file)
                });
            });
        });
    });
    $('#mavzu').click(function(){
        $('#file').attr('src', '/docs/1.1-Ўқитиш технологияси модели.pdf')
    });
    $('#xaritasi').click(function(){
        $('#file').attr('src', '/docs/Ўқув машғулотининг технологик харитаси.pdf')
    });
    $('#texnologiya').click(function(){
        $('#file').attr('src', '/docs/1.1-Ўқитиш технологияси модели.pdf')
    });
});
  </script>
</body>

</html>