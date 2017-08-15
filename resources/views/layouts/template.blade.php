<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>

      {!!Html::style('assets/css/bootstrap-theme.css')!!}
      {!!Html::style('assets/css/bootstrap-theme.min.css')!!}
      {!!Html::style('assets/css/bootstrap.css')!!}
      {!!Html::style('assets/css/font-awesome.min.css')!!}
      {!!Html::style('assets/css/bootstrap.min.css')!!}
      {!!Html::style('assets/css/main.css')!!}
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
        $( function(){
             $.datepicker.regional['es'] ={
             closeText: 'Cerrar',
             prevText: '< Ant',
             nextText: 'Sig >',
             currentText: 'Hoy',
             monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre','Diciembre'],
             monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
             dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
             dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
             dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
             weekHeader: 'Sm',
             dateFormat: 'dd/mm/yy',
             firstDay: 1,
             isRTL: false,
             showMonthAfterYear: false,
             yearSuffix: ''
            };
 $.datepicker.setDefaults($.datepicker.regional['es']);
            $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
        });

    });
  </script>

          </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                 <a class="navbar-brand" href="{!!URL::to('/')!!}">Eventos Deportivos</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{!!URL::to('/')!!}">
                        <i class="glyphicon glyphicon-home"></i>
                        Inicio
                    </a>
                </li>
@if(Auth::guest())        
                <li><a href="{!!URL::to('/store/')!!}"><i class= "glyphicon glyphicon-shopping-cart"></i>Carrito</a></li>
                <li><a href="{!!URL::to('/login/')!!}"> <i class="glyphicon glyphicon-log-in"></i> Login</a></li>
@else
                <li><a href="{!!URL::to('/store/')!!}"><i class="glyphicon glyphicon-shopping-cart"></i>Carrito</a></li>
                <li><a href="{!!URL::to('/admin/')!!}"> <i class="glyphicon glyphicon-dashboard"></i> Administracion</a></li>
                <li><a href="{!!URL::to('/logout/')!!}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
            <a href="" class="pull-right">Bienvenido {!! Auth::user()->name." ". Auth::user()->last_name  !!} </a>
        </div>
  @endif
</nav>

@yield('content')
</div>
<footer class="footer">
        <h6>Modulo de Eventos </h6>
        <p class="claim">Modulo en desarrollo</p>
        <a >Auditux</a>
        <div class="copyright">
            <p> Pagina principal<a href="http://audituxinformatica.com/"> Audituxinformatica</a></p>
        </div>
    </footer>
        {!!Html::script('assets/js/jquery-ui.min.js')!!}
        {!!Html::script('assets/js/jquery.min.js')!!}
        {!!Html::script('assets/js/jquery-ui-1.12.1/jquery-ui.min.js')!!}
        {!!Html::script('assets/js/bootstrap.js')!!}
        {!!Html::script('assets/js/npm.js')!!}
        {!!Html::script('assets/js/bootstrap.min.js')!!}
        {!!Html::script('assets/js/script.js')!!}

    </body>
</html>
