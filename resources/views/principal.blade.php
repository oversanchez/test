<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Clean Zone</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    {!! HTML::style('assets/lib/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/lib/font-awesome/css/font-awesome.min.css') !!}
    <!--if lt IE 9script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')-->
    {!! HTML::style('assets/lib/jquery.nanoscroller/css/nanoscroller.css') !!}
    {!! HTML::style('assets/lib/jquery.icheck/skins/square/blue.css') !!}
    {!! HTML::style('assets/lib/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') !!}
    {!! HTML::style('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') !!}
    {!! HTML::style('assets/lib/jquery.niftymodals/css/component.css') !!}
    {!! HTML::style('assets/lib/intro.js/introjs.css') !!}
    {!! HTML::style('assets/css/style.css') !!}
</head>

<body>
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="fa fa-gear"></span></button>
            <a href="#" class="navbar-brand"><span>Clean Zone</span></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="inicio.html"><i class="fa fa-home"></i> Inicio
                        <span class="badge badge-success" style="position:absolute;top:2px;right:-5px;">8</span></a>
                </li>
                <li><a href="planilla.html"><i class="fa fa-calculator"></i> Planillas</a></li>
                <li><a href="empleado.html"><i class="fa fa-user"></i> Empleados</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-area-chart"></i> Reportes <b class="caret"></b>
                        <span class="badge badge-info" style="position:absolute;top:2px;right:-5px;z-index: 1;">8</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="dropdown-submenu"><a href="#">Sub menu</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Large menu <b class="caret"></b></a>
                    <ul class="dropdown-menu col-menu-2">
                        <li class="col-sm-6 no-padding">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-group"></i>Users</li>
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="dropdown-header"><i class="fa fa-gear"></i>Config</li>
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 no-padding">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-legal"></i>Sales</li>
                                <li><a href="#">New sale</a></li>
                                <li><a href="#">Register a product</a></li>
                                <li><a href="#">Register a client</a></li>
                                <li><a href="#">Month sales</a></li>
                                <li><a href="#">Delivered orders</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img alt="Avatar" src="assets/img/avatar2.jpg"><span>Jeff Hanneman</span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right not-nav">
                <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-comments"></i></a>
                    <ul class="dropdown-menu messages">
                        <li>
                            <div class="nano nscroller">
                                <div class="content">
                                    <ul>
                                        <li><a href="#"><img src="assets/img/avatar2.jpg" alt="avatar"><span class="date pull-right">13 Sept.</span><span class="name">Daniel</span> I'm following you, and I want your money!</a></li>
                                        <li><a href="#"><img src="assets/img/avatar_50.jpg" alt="avatar"><span class="date pull-right">20 Oct.</span><span class="name">Adam</span> is now following you</a></li>
                                        <li><a href="#"><img src="assets/img/avatar4_50.jpg" alt="avatar"><span class="date pull-right">2 Nov.</span><span class="name">Michael</span> is now following you</a></li>
                                        <li><a href="#"><img src="assets/img/avatar3_50.jpg" alt="avatar"><span class="date pull-right">2 Nov.</span><span class="name">Lucy</span> is now following you</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="foot">
                                <li><a href="#">View all messages </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="nano nscroller">
                                <div class="content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-male success"></i><b>Michael</b> is now following you <span class="date">15 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-bug warning"></i><b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-credit-card danger"></i><b>Andrew</b> killed someone <span class="date">1 hour ago.</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="foot">
                                <li><a href="#">View all activity </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="button"><a href="javascript:;" class="speech-button"><i class="fa fa-microphone"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="cl-wrapper">
    <!--Sidebar item function-->
    <!--Sidebar sub-item function-->
    <div id="pcont" class="container-fluid">
        <div class="cl-mcont">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">
                            <h3 style="display: inline-block;margin-right: 15px;"><i class="fa fa-wrench" style="font-size:24px;"></i> Administra tus planillas</h3>
                            <div class="pull-right">
                                <h3 style="display: inline-block;margin-right: 15px;">Período</h3>
                                <select class="form-control" style="font-size: 18px;width:220px;display: inline-block;height: 37px;">
                                    <option>C - Mayo 2017</option>
                                    <option>O - Febrero</option>
                                    <option>O - Enero 2017</option>
                                    <option>G - Diciembre 2016</option>
                                </select>
                                <button style="margin-top: -2px;" class="btn btn-default btn-flat" data-toggle="tooltip" title="Mostrar planilla del periodo seleccionado"><i class="fa fa-search"></i></button>

                                <button data-position="left" data-step="1" data-intro="&lt;strong&gt;Para iniciar&lt;/strong&gt; " data-modal="configurarPlanilla" style="margin-top: -2px;" class="btn btn-default btn-flat md-trigger" data-toggle="tooltip"
                                        title="Crear una nueva planilla"><i class="fa fa-plus"></i></button>

                                <button style="margin-top: -2px;" class="btn btn-default btn-flat md-trigger" data-toggle="tooltip" title="Configurar planilla seleccionada"><i class="fa fa-wrench"></i></button>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table" id="dvPlanilla" style="height:330px;">
                                        <table class="table table-bordered" id="tblPlanilla" style="line-height: 16px;">
                                            <thead>
                                            <tr>
                                                <th><i class="fa fa-user"></i> Empleado</th>
                                                <th>Régimen de Pensión</th>
                                                <th>Entidad Financiera</th>
                                                <th>Tipo de Contrato</th>
                                                <th>Pago Neto</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center"> 4</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td class="center">7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td class="center">1.9</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.2</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.4</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td class="center">125.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td class="center">312.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">419.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">522.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td class="center">420</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td class="center">420.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td class="center">413</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td class="center">8.5</td>
                                                <td class="center">C/A<sup>1</sup></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td class="center">3.1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td class="center">3.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td class="center">3.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td class="center">-</td>
                                                <td class="center">U</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="configurarPlanilla" class="md-modal  colored-header custom-width md-effect-9">
        <div class="md-content">
            <div class="modal-header">
                <h3>Crear una planilla</h3><button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button></div>
            <div class="modal-body form">
                <div class="row">
                    <label class="col-sm-3 control-label">Tipo</label>
                    <div class="col-sm-9">
                        <label class="radio-inline" style="padding-left: 0px;"><input name="rndTipo" class="icheck" type="radio" value="O" checked/> ORDINARIA</label>
                        <label class="radio-inline"><input name="rndTipo" class="icheck" type="radio" value="C" /> CTS</label>
                        <label class="radio-inline"><input name="rndTipo" class="icheck" type="radio" value="G"/> GRATIFICACION</label>
                    </div>
                </div>
                <div class="row">
                    <label for="cmbMes" class="col-sm-3 control-label">Año y Mes</label>
                    <div class="col-sm-2" style="padding-right: 5px;">
                        <input id="txtAnio" type="text" class="form-control">
                    </div>
                    <div class="col-sm-3" style="padding-right: 0px;padding-left: 0px;">
                        <select id="cmbMes" class="form-control">
                            <option value="1">Enero</option><option value="2">Febrero</option><option value="3">Marzo</option>
                            <option value="4">Abril</option><option value="5">Mayo</option><option value="6">Junio</option>
                            <option value="7">Julio</option><option value="8">Agosto</option><option value="9">Setiembre</option>
                            <option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option>
                        </select>
                    </div>
                    <button id="btnSugerirFechas" class="btn btn-default" onclick="sugerirFechas()"><i class="fa fa-question-circle "></i> Sugerir fechas</button>
                </div>
                <div class="row">
                    <label for="txtInicio" class="col-sm-3 control-label">Fecha de inicio</label>
                    <div class="col-md-4">
                        <input id="txtInicio" type="text" value="" data-min-view="2" data-date-format="dd/mm/yyyy" class="form-control date datetime">
                    </div>
                </div>
                <div class="row">
                    <label for="txtFin" class="col-sm-3 control-label">Fecha de fin</label>
                    <div class="col-md-4">
                        <input id="txtFin" type="text" value="" data-min-view="2" data-date-format="dd/mm/yyyy" class="form-control date datetime">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-info" style="padding:5px;margin-bottom: 0px;text-align: left;">
                            <i class="fa fa-info-circle sign"></i>
                            <strong>Nota!</strong> You have 3 new messages in your inbox.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-block btn-flat md-close" style="width: 100px;">Crear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md-overlay"></div>
</div>

{!! HTML::script('assets/lib/jquery/jquery.min.js') !!}
{!! HTML::script('assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js') !!}
{!! HTML::script('assets/js/cleanzone.js') !!}
{!! HTML::script('assets/lib/bootstrap/dist/js/bootstrap.min.js') !!}
{!! HTML::script('assets/lib/jquery.datatables/js/jquery.dataTables.min.js') !!}
{!! HTML::script('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js') !!}
{!! HTML::script('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js') !!}
{!! HTML::script('assets/lib/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
{!! HTML::script('assets/lib/jquery.parsley/dist/parsley.min.js') !!}
{!! HTML::script('assets/lib/jquery.parsley/src/extra/dateiso.js') !!}
{!! HTML::script('assets/lib/jquery.icheck/icheck.min.js') !!}
{!! HTML::script('assets/lib/intro.js/intro.js') !!}

<script type="text/javascript">
    $(document).ready(function () {
        //initialize the javascript
        App.init();

        var $table = $("#tblPlanilla");

        $table.dataTable({
            "sScrollY": "0px",
            "fnDrawCallback": function () {
                var $dataTable = $table.dataTable();
                $dataTable.fnAdjustColumnSizing(false);

                // TableTools
                if (typeof (TableTools) != "undefined") {
                    var tableTools = TableTools.fnGetInstance(table);
                    if (tableTools != null && tableTools.fnResizeRequired()) {
                        tableTools.fnResizeButtons();
                    }
                }
                //
                var $dataTableWrapper = $table.closest(".dataTables_wrapper");
                var panelHeight = $dataTableWrapper.parent().height();

                var toolbarHeights = 0;
                $dataTableWrapper.find(".fg-toolbar").each(function (i, obj) {
                    toolbarHeights = toolbarHeights + $(obj).height();
                });

                var scrollHeadHeight = $dataTableWrapper.find(".dataTables_scrollHead").height();
                var height = panelHeight - toolbarHeights - scrollHeadHeight;
                $dataTableWrapper.find(".dataTables_scrollBody").height(height - 24);

                $dataTable._fnScrollDraw();
            }
        });

        $("[data-toggle='tooltip']").tooltip();
        $("input").iCheck({
            checkboxClass: "icheckbox_square-blue checkbox",
            radioClass: "iradio_square-blue"
        });
        $(".datetime").datetimepicker();

        var hoy = new Date();
        var mes = "0" + (hoy.getMonth() + 1);
        $("#txtAnio").val(hoy.getFullYear());
        $("#cmbMes").val(mes.slice(-2)).prop("selected", true);

        introJs().setOption("showBullets", !1).start();
    });

    function configurarMeses(meses) {
        $("#cmbMes").empty();
        $.each(meses, function (key, value) {
            $('#cmbMes')
                    .append($('<option>', {
                        value: key
                    })
                            .text(value));
        });
    }

    function deshabilitarFechas(tipo) {
        var estado = false;
        if (tipo != "O")
            estado = true;
        $("#txtInicio").prop('disabled', estado);
        $("#txtFin").prop('disabled', estado);
        $("#btnSugerirFechas").prop('disabled', estado);
    }

    $('input[type=radio][name=rndTipo]').on('ifChecked', function (event) {
        var tipo = this.value;
        var meses;
        switch (tipo) {
            case "O":
                meses = {
                    "1": "Enero",
                    "2": "Febrero",
                    "3": "Marzo",
                    "4": "Abril",
                    "5": "Mayo",
                    "6": "Junio",
                    "7": "Julio",
                    "8": "Agosto",
                    "9": "Setiembre",
                    "10": "Octubre",
                    "11": "Noviembre",
                    "12": "Diciembre"
                };
                break;
            case "C":
                meses = {
                    "5": "Mayo",
                    "11": "Noviembre"
                };
                break;
            case "G":
                meses = {
                    "7": "Julio",
                    "12": "Diciembre"
                };
                break;
        }
        configurarMeses(meses);
        deshabilitarFechas(tipo);
        $("#txtInicio").val("");
        $("#txtFin").val("");
    });

    function sugerirFechas() {
        var tipo = $('input[name=rndTipo]:checked').val();
        if (tipo == "O") {
            var anio = $("#txtAnio").val();
            var mes = "0" + $("#cmbMes option:selected").val();
            var inicio = "01/" + mes.slice(-2) + "/" + anio;
            var fin = new Date(anio, parseInt(mes), 0);
            $("#txtInicio").val(inicio);
            $("#txtFin").val(formato_fecha(fin));
        }
    }

    function formato_fecha(fecha) {
        return ("0" + fecha.getDate()).slice(-2) + "/" + ("0" + (fecha.getMonth() + 1)).slice(-2) + "/" + fecha.getFullYear()
    }
</script>
</body>

</html>