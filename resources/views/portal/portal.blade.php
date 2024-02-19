<!DOCTYPE html>
<html lang="en">

<head>
    <title>GOBIERNO REGIONAL DE APURIMAC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7dcb34972f.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{ asset('portal/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('portal/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('portal/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('portal/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('portal/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">GOBIERNO REGIONAL <span>APURIMAC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
                    <li class="nav-item cta px-2"><a href="{{ url('loginProveedor/loginProveedor') }}"
                            class="nav-link btn btn-primary"><span>Login Proveedor</span></a></li>
                    <li class="nav-item cta px-2"><a href="{{ url('login/login') }}"
                            class="nav-link btn btn-primary"><span>Login Funcionario</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('portal/images/ptd_1.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Plataforma de
                            Cotizaciones en Línea</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gobierno
                            Regional de Apurimac</p>

                    </div>
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }"
                        style="text-align: center;">
                        <img src="{{ asset('portal/images/logoFile.png') }}" alt=""
                            style="width: 60%; display: inline-block;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services" style="background: linear-gradient(to bottom, #ececec, #ffffff);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-globe"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Disponibilidad</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam in sapiente autem
                                facilis ullam illum possimus, sequi ipsum numquam! Quo culpa non tempore, blanditiis
                                sint maxime excepturi tenetur autem nesciunt?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-file-alt"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Documentacion</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In dolore accusamus
                                perspiciatis et. Suscipit nobis facilis animi laboriosam obcaecati praesentium
                                consequatur at rem, illo corrupti sed quasi optio ullam laborum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-tachometer-alt"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Liegro</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia veritatis debitis
                                doloremque omnis voluptate deleniti minima non totam perspiciatis laborum quia,
                                obcaecati inventore, porro illum natus, voluptas modi. Accusantium, incidunt?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-globe-americas"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Accesibilidad</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto autem odit
                                quibusdam, nulla iure cum dignissimos, veritatis odio aspernatur fugit blanditiis ea
                                dolores delectus accusamus deleniti optio quod obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="ftco-intro">
            <div class="container">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-12 color-3 p-4">
                        <h3 class="mb-2">Ingrese el número de cotización o concepto</h3>
                        <div class="appointment-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" id="cadena" name="cadena"
                                            placeholder="Número de concepto o cotización">
                                        <button type="submit" class="btn btn-primary buscarCotizacion"
                                            style="background: none">BUSCAR</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" id="fechaInicial" name="fechaInicial"
                                            placeholder="Fecha de inicio">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" id="fechaFinal" name="fechaFinal"
                                            placeholder="Fecha de fin">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="tipo" id="tipo" class="form-control">
                                                <option value="0">Tipo de solicitud</option>
                                                <option value="">Todos</option>
                                                <option value="Bienes">Bienes</option>
                                                <option value="Servicios">Servicios</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card" style="border: none">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-5 text-center heading-section ftco-animate">
                                    <h2>Cotizaciones disponibles</h2>
                                </div>
                            </div>
                            <div class="contenedorRegistros">
                                <table id="registros"
                                    class="table table-hover table-bordered dt-responsive nowrap table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="align-middle text-center text-uppercase" data-priority="2"
                                                width="10%">N° <br> Cotizacion</th>
                                            <th class="align-middle text-center text-uppercase" data-priority="1"
                                                width="10%">Tipo</th>
                                            <th class="align-middle text-center text-uppercase" data-priority="3"
                                                width="50%">Descripcion</th>
                                            <th class="align-middle text-center text-uppercase" data-priority="4"
                                                width="15%">Fecha de etrega y acto publico</th>
                                            <th class="align-middle text-center text-uppercase" data-priority="1"
                                                width="15%">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Gobierno regional de Apurímac.</h2>
                        <p>Plataforma de cotizaciones en linea.</p>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Ubícanos</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jr. Puno, Abancay, Perú</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">gobiernoaperumac@nose.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ftco-footer-widget mb-4">
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                            var setting = {"query":"Gobierno Regional de Apurimac, Jr. Puno, Abancay, Perú","width":600,"height":300,"satellite":true,"zoom":17,"placeId":"ChIJQcV1gN4CbZERk_U3c4IaGrg","cid":"0xb81a1a827337f593","coords":[-13.6380462,-72.8780393],"lang":"es","queryString":"Gobierno Regional de Apurimac, Jr. Puno, Abancay, Perú","centerCoord":[-13.6380462,-72.8780393],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1071518"};
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=1071518';
                            s.async = true;
                            s.onload = function (e) {
                              window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                          })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var tablaDeRegistros;
        $(document).ready(function() {
            $('#ifechaCotizacion').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#ifechaFinalizacion').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            tablaDeRegistros = $('.contenedorRegistros').html();
            fillRegistros();
            $('.overlayPagina').css("display", "none");
        });
        // para que nos despliegue la fecha cuando agamos click en cualquier punto del input
        $('.inputDate').on('click', function() {
            $(this).parent().find('.input-group-prepend').click();
        });
        $('.buscarCotizacion').on('click', function() {
            buscarCotizacion();
        });
        // busca la cotizacion, segun loas datos ingresados en el formulario fvsearch
        // para poder buscar no es necesario validar
        function buscarCotizacion() {
            var formData = new FormData($("#fvsearch")[0]);
            formData.append('cadena', $('#cadena').val());
            jQuery.ajax({
                url: "{{ url('panelAdm/paCotizacion/searchPortal') }}",
                method: 'POST',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(r) {
                    construirTabla();
                    var html = '';
                    let ban = true;
                    let colorNc = '';
                    for (var i = 0; i < r.data.length; i++) {
                        html += '<tr>' +
                            '<td class="text-left align-middle font-weight-bold" style="background-color:' +
                            colorNc + '">' + novDato(r.data[i].numeroCotizacion) + '</td>' +
                            '<td class="text-center font-weight-bold align-middle">' + novDato(r.data[i].tipo) +
                            '</td>' +

                            '<td class="align-middle">' +
                            '<p style="white-space: pre-line;margin-bottom: 0px;font-weight: 400;" class="text-uppercase">' +
                            novDato(r.data[i].concepto) + '</p>' +
                            '<label style="font-size: 12px;font-weight:normal;"><strong>Dependencia: </strong> Gobierno Regional de Apurímac </label>' +
                            '<label style="font-size: 12px;font-weight:normal;" class="float-right"><strong>Fecha Publicación:</strong> 20/12/2023</label>' +
                            '</td>' +
                            '<td class="align-middle text-left">' +
                            '<span><i class="fa fa-calendar-alt"></i> ' + novDato(r.data[i].fechaFinalizacion) +
                            '<br><i class="fa fa-clock"></i> ' + novDato(r.data[i].horaFinalizacion) +
                            '<span><br>' +
                            '</td>' +
                            '<td class="text-center align-middle">' +
                            '<a href="{{ route('ver-archivo') }}/' + r.data[i].archivo +
                            '" target="_blank" class="btn btn-sm btn-primary mb-1 btn-flat w-100 mb-2"><i class="far fa-file-pdf"></i> Descargar</a><br>' +
                            '<button type="button" class="btn btn-sm btn-success btn-flat w-100" title="Editar registro" onclick="cotizar(\'' +
                            r.data[i].idCot +
                            '\');"><i class="far fa-envelope"></i> Emviar Cotizacion</button>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#data').html(html);
                    initDt('registros');
                    $('.overlayRegistros').css('display', 'none');
                },
                error: function(xhr, status, error) {
                    msjSimple(false, "Algo salio mal, porfavor contactese con el Administrador.")
                }
            });
        }
        // nos muestra las cotizaciones que estan PUBLICADA O RECOTIZANDO
        function fillRegistros() {
            $('.contenedorRegistros').css('display', 'block');
            jQuery.ajax({
                url: "{{ url('panelAdm/paCotizacion/listarPortal') }}",
                method: 'get',
                success: function(r) {
                    var html = '';
                    let ban = true;
                    let colorNc = '';
                    for (var i = 0; i < r.data.length; i++) {
                        html += '<tr>' +
                            '<td class="text-left align-middle font-weight-bold" style="background-color:' +
                            colorNc + '">' + novDato(r.data[i].numeroCotizacion) + '</td>' +
                            '<td class="text-center font-weight-bold align-middle">' + novDato(r.data[i].tipo) +
                            '</td>' +
                            '<td class="align-middle">' +
                            '<p style="white-space: pre-line;margin-bottom: 0px;font-weight: 400;" class="text-uppercase">' +
                            novDato(r.data[i].concepto) + '</p>' +
                            '<label style="font-size: 12px;font-weight:normal;"><strong>Dependencia: </strong> Gobierno Regional de Apurímac </label>' +
                            '<label style="font-size: 12px;font-weight:normal;" class="float-right"><strong>Fecha Publicación:</strong> 20/12/2023</label>' +
                            '</td>' +
                            '<td class="align-middle text-left">' +
                            '<span><i class="fa fa-calendar-alt"></i> ' + novDato(r.data[i].fechaFinalizacion) +
                            '<br><i class="fa fa-clock"></i> ' + novDato(r.data[i].horaFinalizacion) +
                            '<span><br>' +
                            '</td>' +
                            '<td class="text-center align-middle">' +
                            '<a href="{{ route('ver-archivo') }}/' + r.data[i].archivo +
                            '" target="_blank" class="btn btn-sm btn-primary mb-1 btn-flat w-100 mb-2"><i class="far fa-file-pdf"></i> Descargar</a><br>' +
                            '<button type="button" class="btn btn-sm btn-success btn-flat w-100" title="Editar registro" onclick="cotizar(\'' +
                            r.data[i].idCot +
                            '\');"><i class="far fa-envelope"></i> Emviar Cotizacion</button>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#data').html(html);
                    // para inicializar la tabla como objeto de tipo datatable
                    initDt('registros');
                    $('.overlayRegistros').css('display', 'none');
                }
            });
        }
        // funcion para inicializar datatable
        function initDt(id) {
            $('#' + id).DataTable({
                "searching": false,
                "autoWidth": false,
                "responsive": true,
                "ordering": false,
                "lengthChange": false,
                "lengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "Todos"]
                ],
                "language": {
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_. (Total: _MAX_)",
                    "search": "",
                    "infoFiltered": "(filtrando)",
                    "infoEmpty": "No hay registros disponibles",
                    "sEmptyTable": "No tiene registros guardados.",
                    "lengthMenu": "Mostrar registros _MENU_ .",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        }
        // para poder ver y postular a lacotizacion nos muestra un mensaje, donde nos muestra q es necesario loguearse
        function cotizar() {
            Swal.fire({
                title: "Ver Cotizacion",
                text: "Para postular a la cotizacion debe de ingresar con su usuario",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ingresar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('.overlayPagina').css("display", "flex");
                    window.location.href = "{{ url('loginProveedor/loginProveedor') }}";
                }
            });
        }
        // construye la tabla con nuevos datos
        function construirTabla() {
            $('.contenedorRegistros>div').remove();
            $('.contenedorRegistros').html(tablaDeRegistros);
        }
    </script>

    <script src="{{ asset('portal/js/jquery.min.js') }}"></script>
    <script src="{{ asset('portal/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('portal/js/popper.min.js') }}"></script>
    <script src="{{ asset('portal/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('portal/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('portal/js/aos.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('portal/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('portal/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('portal/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('portal/js/google-map.js') }}"></script>
    <script src="{{ asset('portal/js/main.js') }}"></script>
    <script src="{{ asset('cdn/jquery.dataTables.min.js') }}"></script>


</body>

</html>
