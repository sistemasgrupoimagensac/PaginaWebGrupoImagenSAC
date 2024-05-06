<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>{{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{ asset('template/') }}img/icon.ico" type="image/x-icon"/>
    <!-- Fonts and icons -->
    <script src="{{ asset('template/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{ asset('template/css/fonts.min.css') }}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css?v=' .rand()) }}">
    <link rel="stylesheet" href="{{ asset('template/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/buttons.dataTables.css?v=' . rand()) }}">
    <link rel="stylesheet" href="{{ asset('template/css/atlantis.css?v=' .rand()) }}">
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <div class="logo-header" data-background-color="white">

            <a href="{{ url('dashboard') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" style="width: 100px; height: 60px;" alt="logo"
                     class="navbar-brand img-fluid">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>

        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="orange2">

            <div class="container-fluid">
            </div>
        </nav>
    </div>

    <div class="sidebar sidebar-style-2" data-background-color="dark2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">

                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ str_limit(Auth()->user()->name, 19) }}
									<span class="user-level text-capitalize">{{ 'ADMINISTRADOR' }}</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#" onclick="event.preventDefault(); abrirModalClave();">
                                        <span class="link-collapse">Cambiar contraseña</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="link-collapse">Cerrar Sesión</span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                    <a href="#settings">

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                        <h4 class="text-section">Menus</h4>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/configuraciones-basicas') }}">
                            <i class="text-warning fas fa-cog"></i>
                            <p class="font-weight-bold text-white">Configuraciones Básicas</p>
                        </a>
                    </li>

                    {{--<li class="nav-item">
                        <a href="{{ url('administrador/inicio') }}">
                            <i class="text-warning far fa-images"></i>
                            <p class="font-weight-bold text-white">Imagenes de portada</p>
                        </a>
                    </li>--}}

                    <li class="nav-item">
                        <a href="{{ url('administrador/galeria') }}">
                            <i class="text-warning fas fa-photo-video"></i>
                            <p class="font-weight-bold text-white">Galería de fotos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/productos') }}">
                            <i class="text-warning fab fa-product-hunt"></i>
                            <p class="font-weight-bold text-white">Productos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/paginas') }}">
                            <i class="text-warning fas fa-pager"></i>
                            <p class="font-weight-bold text-white">Configurar préstamos, <br> factoring e invertir</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/testimonios') }}">
                            <i class="text-warning fas fa-comments"></i>
                            <p class="font-weight-bold text-white">Testimonios</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/quienes-opinan') }}">
                            <i class="text-warning fab fa-microblog"></i>
                            <p class="font-weight-bold text-white">Quienes opinan</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/colaboradores') }}">
                            <i class="text-warning fas fa-street-view"></i>
                            <p class="font-weight-bold text-white">Colaboradores</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('administrador/preguntas-frecuentes') }}">
                            <i class="text-warning fa fa-question-circle"></i>
                            <p class="font-weight-bold text-white">Preguntas frecuentes</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#submenu-1">
                            <i class="text-warning fas fa-cogs"></i>
                            <p class="font-weight-bold text-white">Mantenimientos</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu-1">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('administrador/monedas') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            <i class="text-warning fas fa-coins"></i>
                                            Monedas
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/forma-pago') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            <i class="text-warning fab fa-sellsy"></i>
                                            Formas de pago
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/tiempo-pago') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            <i class="text-warning far fa-clock"></i>
                                            Tiempo de pago
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--<li class="nav-item">
                        <a data-toggle="collapse" href="#submenu-2">
                            <i class="text-warning fab fa-chrome"></i>
                            <p class="font-weight-bold text-white">Paginas</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu-2">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('administrador/inicio') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Inicio
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/prestamos') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Préstamos
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/factoring') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Factoring
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/invertir') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Invertir
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/nosotros') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Nosotros
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/preguntas-frecuentes') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Preguntas frecuentes
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/conviertete-en-asesor') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Conviertete en asesor
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('administrador/recomienda-y-gana') }}">
                                        <span class="sub-item font-weight-bold text-white">
                                            Recomienda y gana S/ 200 soles
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>--}}


                    <li class="nav-item">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="text-warning fas fa-power-off"></i>
                            <p class="font-weight-bold text-white">Cerrar Sesión</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-dark2">

                @yield('titulo')

            </div>
            <div class="page-inner mt--5">

                @yield('content')

                <div class="modal fade modalCarga bg-dark2" data-backdrop="static" data-keyboard="false" role="dialog"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark2">
                            <div class="modal-body">
                                <div class="text-center">
                                    <span class="fas fa-cog fa-spin fa-4x text-white"></span><br>
                                    <span class="text-white fa-3x">Cargando...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://grupoimagensac.com.pe" target="_blank">
                                {{ env('APP_NAME') }}
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    © Copyright. Todos los derechos reservados.
                </div>
            </div>
        </footer>

    </div>


</div>


<div class="modal fade modalPassword2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning2">
                <h4 class="modal-title text-white">Cambiar contraseña</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">Contraseña actual</label>
                    <p id="texto-contra" class="text-danger font-weight-bold" style="display: none;">Contraseña
                        incorrecta.</p>
                    <input type="password" class="form-control" id="antiguo_password" value="">
                </div>
                <div class="form-group">
                    <label for="">Nueva contraseña</label>
                    <input type="password" class="form-control" id="nuevo_password" value="">
                </div>
                <div class="text-center">
                    <button class="btn btn-warning bg-dark2" onclick="event.preventDefault(); cambiarClave();">Guardar
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        onclick="event.preventDefault(); cerrarModalClave();">Cerrar
                </button>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('template/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('template/js/core/popper.min.js') }}"></script>
<script src="{{ asset('template/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/select2.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/moment.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/datetime-moment.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/intl.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/buttonDataTable.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/jszip.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/pdfmake.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('template/js/plugin/datatables/buttons.html5.js') }}"></script>
<script src="{{ asset('template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('template/js/atlantis.min.js') }}"></script>
<script src="{{ asset('js/administrador.js?v='. rand()) }}"></script>
<script>

    $('.nuevo-select').select2({
        width: '100%',
        "language": {
            "noResults": function () {
                return "Resultado no encontrado";
            }
        },
    });
    $.fn.dataTable.moment('DD/MM/YYYY');

    $(document).ready(function () {
        $('#basic-datatables').DataTable({
            "language": spanish,
            "lengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25, 50, 100, 200, "TODO"]],
            "ordering": false,
            //"order": [0, 'desc'],
            "dom": 'Brtip',
            "paging": true,
            "autoWidth": true,
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: '   Exportar registros a excel',
                    tag: 'span',
                    className: 'fa fa-file-export mb-2 p-3 btn btn-warning bg-dark2 text-center',
                    titleAttr: 'Excel',
                    filename: 'excel',
                    exportOptions: {
                        stripNewlines: false,
                        format: {
                            body: function (data) {
                                if (~data.indexOf("<span")) {
                                    var datos = $(data);
                                    datos.find("span").each(function (index) {
                                        var text = $(this).text();//get span content
                                        $(this).replaceWith(text);//replace all span with just content
                                    });
                                    data = datos.text();
                                }

                                if (~data.indexOf("<button")) {
                                    data = 'Correcto';
                                }


                                valor = data.toString(); //El campo debe ser STRING para que funcione
                                valor = valor.replace(/<br><br>/g, " \n ");  //Aqui es donde le digo al JavaScript que reemplace <br/> el salto de linea HTML por el salto de linea \n
                                valor = valor.replace("&amp;", "&");
                                valor = valor.replace("&nbsp;", "");
                                return valor;
                            }
                        },
                        customize: function (xlsx) {
                            var styles = $('cellXfs', xlsx.xl['styles.xml']);
                            styles.append('<xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1">' + '<alignment vertical="top" wrapText="1" />' + '</xf>');
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            var col = $('c', sheet);
                            col.each(function () {
                                $(this).attr('s', '55');
                            });
                            $('row:first c', sheet).attr('s', '32');
                        },
                    },
                },
            ]
        });
    });

    var spanish = {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscador Rápido",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    };
</script>
@yield('script')
</body>
</html>