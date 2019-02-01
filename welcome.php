<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>FlytteCentrum</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
    <link href="assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="assets/img/logo/Final_FLYTTECENTRUM.png" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Hjemme</a></li>
                    <li><a href="{{ route('orders.create') }}">Ordre</a></li>
                    <li><a href="{{ route('register') }}">Bliv partner</a></li>
                    <li><a href="/kontakt">Kontakt</a></li>
                    <li><a href="{{ route('login') }}">Firma login</a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->



    <!-- begin #home -->
    <div id="home" class="content has-bg home">
        <!-- begin content-bg -->
        <div class="content-bg">
            <img src="assets/img/bg/flyttecentrum.jpg" alt="Home" />
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container home-content">
            <h1>Få gratis & uforpligtende tilbud</h1>
                <h3>fra godkendte flyttefirmaer:</h3>
                    <p>
                        Spar tid og lad os indhente gratis og uforpligtende tilbud blandt vore specialister.
                        <br />
                        Vi screener alle virksomheder, så du undgår dyre fejlvalg.
                        <br />
                        Dit flyttefirma ved at det er i konkurrence, så der bliver givet fordelagtigt tilbud.
                    </p>

                    <div id="choose-task">
                        <b>Har du brug for at bevæge sig? Start her nu:</b>
                        <br />

                        @foreach ($order_types as $order_type_item)
                            <a href="{{ route('orders.create', str_slug($order_type_item)) }}" class="btn btn-outline">{{ $order_type_item }}</a>
                        @endforeach

                    </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end #home -->

    <div id="about" class="content" data-scrollview="true">
        <!-- begin container -->
        <div class="container fadeInDown contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInDown">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-12">
                    <!-- begin about -->
                    <div class="about">
                        <h3>Om Flyttecentrum</h3>
                        <p>
                            <b>Flyttecentrum skaber de rigtige forbindelser</b>
                        </p>
                        <p>
                            Flyttecentrum er bindeled mellem det professionelle transport / flyttefirma og forbrugeren.
                        </p>
                        <p>
                            Vi sørger for at have de bedste og mest stabile fageksperter, klar til at give tilbud samt afhjælpe forbrugeren med forfaldende opgaver.
                        </p>
                        <p>
                            Flyttecentrum er et værktøj til fordel for private og erhverv, der skaber gennemsigtighed indenfor flyttefaget.
                        </p>
                        <p>
                            Vi gør alt for du for det bedste tilbud.
                        </p>
                    </div>
                    <!-- end about -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-12">
                    <h3>Nemme trin</h3>
                    <!-- begin about-author -->
                    <div class="about">
                        <ol>
                            <li><b>Vælg og beskriv din opgave</b></li>
                            <li><b>Modtag tilbud</b></li>
                            <li><b>Vælg din fragmand</b></li>
                            <li>... ja, det er så simpelt!</li>
                        </ol>
                    </div>
                    <!-- end about-author -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-12">
                    <h3>Flyttefirma?</h3>
                    <!-- begin skills -->
                    <div class="about">
                        <p>
                            Flyttecentrum forbinder effektivt flytte virksomheder til kunder i nød.
                        </p>
                        <p>
                            Er du en seriøs flyttefirma søger at gøre dit liv lettere og udvide din virksomhed?
                        </p>
                        <p>
                            <a class="btn btn-primary" href="{{ route('register') }}">Bliv partner</a>
                        </p>
                    </div>
                    <!-- end skills -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div id="action-box" class="content has-bg" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(assets/img/bg/bg-action.jpg)" data-paroller-factor="0.5" data-paroller-factor-md="0.01" data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container fadeInRight contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInRight">
            <!-- begin row -->
            <div class="row action-box">
                <!-- begin col-9 -->
                <div class="col-md-9 col-sm-9">
                    <div class="icon-large text-theme">
                        <i class="fa fa-binoculars"></i>
                    </div>
                    <h3>CHECK OUT OUR ADMIN THEME!</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus magna eu lacinia eleifend.
                    </p>
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <a href="#" class="btn btn-outline btn-block">Live Preview</a>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- beign #service -->
    <div id="service" class="content" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <h2 class="content-title">Hvorfor vælge Flyttecentrum?</h2>
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="service">
                        <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                        <div class="info">
                            <h4 class="title">Lækker kundetilfredshed</h4>
                            <p class="desc">Vi gør alt for vores kunder får udnyttet denne gratis service bedst muligt</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="service">
                        <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-paint-brush"></i></div>
                        <div class="info">
                            <h4 class="title">Sikkerhed</h4>
                            <p class="desc">Flyttecentrum screener alle udbydere og søger for du har de bedste forudsætninger for at modtage tilbud.</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="service">
                        <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-code"></i></div>
                        <div class="info">
                            <h4 class="title">Hele Danmark</h4>
                            <p class="desc">Der bliver hentet tilbud fra flyttefirmaer i hele Danmark.</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="service">
                        <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-shopping-cart"></i></div>
                        <div class="info">
                            <h4 class="title">Lynhurtig</h4>
                            <p class="desc">Flyttefirmaerne modtager din forespørgsel straks og du vil få svar retur samme dag og max 24 timer efter din forespørgsel</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #service -->

    <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4 fadeInLeft contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInLeft">
                    <h3>Flyttecentrum</h3>
                    <p>
                        Flyttecentrum er et selskab, der har til formål at forbinde på den hurtigste og nemmeste måde mulig, dig der har brug for flyttefirma eller transportselskab, der tilbyder sådanne tjenester. Du kan vælge mellem privatflytning, firmaflytning, opbevaring, enkelttransport og distribution. Vi ser frem til at servicere dig.
                    </p>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 text-center fadeInLeft contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInLeft">
                    <h3>Forbind med os</h3>
                    <a href="https://plus.google.com/u/0/104581407872443984162/" target="_blank">
                        <img src="assets/img/icon/google-social.png" width="50" /></a>
                    <a href="https://www.facebook.com/flyttecentrum" target="_blank">
                        <img src="assets/img/icon/facebook-social.png" width="50" /></a>
                    <a href="https://twitter.com/Flyttecentrum" target="_blank">
                        <img src="assets/img/icon/twitter-social.png" width="50" /></a>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 fadeInLeft contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInLeft">
                    <h3>Kontakt os</h3>
                    <p>
                        Jægersborgvej 106, 2820 Gentofte
                    </p>
                    <p>
                        P: 52444497
                    </p>
                    <p>
                        Mandag-Fredag: 08:00 - 17:00<br />
                        Søndag: 08:00 - 17:00<br />
                        Lørdag: 08:00 - 15:00
                    </p>
                    <p>
                        <a href="/kontakt">Skriv til os! >></a>
                    </p>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- begin #footer -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="footer-brand" style="text-align: center">
                <img src="assets/img/logo/FLYTTECENTRUM_Kun_Logo.png" style="margin-bottom: 15px" />
                <br />
                <img src="assets/img/logo/FLYTTECENTRUM_Tekst_uden_logo.png" id="bottom_logo_full" />
                <img src="assets/img/logo/FLYTTECENTRUM_Tekst_uden_logo_W_265px.png" id="bottom_logo_mobile" />
            </div>
            <p>
                &copy; Copyright Flytte Centrum {{ date('Y') }}
            </p>
            <p class="social-list">
            </p>
        </div>
    </div>
    <!-- end #footer -->

</div>
<!-- end #page-container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/js-cookie/js.cookie.js"></script>
<script src="assets/plugins/scrollMonitor/scrollMonitor.js"></script>
<script src="assets/plugins/paroller/jquery.paroller.min.js"></script>
<script src="assets/js/one-page-parallax/apps.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
        url: '{{ route('media.store') }}',
        maxFilesize: 8, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
        },
        init: function () {
                    @if(isset($document) && $document->document)
            var files =
            {!! json_encode($document->document) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            }
            @endif
        }
    }
</script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        $( '.datepicker' ).datepicker( { dateFormat: 'yy-mm-dd' } );
        $( "#tabs" ).tabs();

        $('.tab-navigation').click(function(e) {
            e.preventDefault();
            $("#tabs").tabs("option", "active", $(this).data('tabnumber'));
        });

    });
</script>
</body>
</html>
