<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link href="css/coming-soon.min.css" rel="stylesheet">
  <style type="text/css">
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
            margin-top: 0px;
            margin-bottom: 0px;
        position: relative;
        vertical-align: middle;
        margin-top: .25rem;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: rgba(0,46,102,.8);
    }
  </style>

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Calculadora de finales</h1>
            <p class="mb-5">Ingresá algunos datos para que los alumnos de <strong>Derecho Informático 2</strong> podamos ayudarte a decidir que exámenes rendir este cuatrimestre.</p>
            <form method="POST" action="/mail" onsubmit="return validarForm();">
              @csrf

              <select name="selectCarrera[]" id="selectCarrera" multiple="multiple" class="form-control my-1" aria-label="Selecciona tu carrera" required>
                <option value="-1">Selecciona tu carrera</option>
                <option value="01">Contador público</option>
                <option value="02">Administración</option>
                <option value="03">Economía</option>
                <option value="04">Sistemas</option>
                <option value="05">Actuario</option>
              </select>

              <select name="selectMaterias[]" id="selectMaterias" multiple="multiple" class="form-control my-1" aria-label="Selecciona las materias" required>
              
                <option value="744">744 - ACT.CONT.EN PREV.DE CORRUP.Y LAV.</option>
                <option value="766">766 - ACTUAC.PROF.DEL CONTADOR EN SOC.</option>
                <option value="358">358 - ACTUAC.PROF.JUDICIAL</option>
                <option value="799">799 - ADMIN. DE RECURSOS INFORMATICOS</option>
                <option value="453">453 - ADMINISTRACION DE LA PRODUCCION</option>
                <option value="749">749 - ADMINISTRACION DE LA SALUD</option>
                <option value="732">732 - ADMINISTRACION DE TURISMO</option>
                <option value="454">454 - ADMINISTRACION DEL PERSONAL</option>
                <option value="279">279 - ADMINISTRACION FINANCIERA</option>
                <option value="252">252 - ADMINISTRACION GENERAL</option>
                <option value="794">794 - ADMINISTRACION PUBLICA</option>
                <option value="284">284 - ANALISIS MATEMATICO II</option>
                <option value="752">752 - ANALISIS NUMERICO</option>
                <option value="784">784 - ANALISIS NUMERICO AVANZADO</option>
                <option value="722">722 - APRENDIZAJE ESTRUCTURADO: METOD</option>
                <option value="659">659 - AUDITOR.Y CONTR.D/SIST.D/INFOR.</option>
                <option value="355">355 - AUDITORIA</option>
                <option value="758">758 - B.ACT.DE L/INVER. Y FINANCIACION</option>
                <option value="753">753 - BIOMETRIA ACTUARIAL</option>
                <option value="276">276 - CALCULO FINANCIERO</option>
                <option value="785">785 - CALCULO FINANCIERO-NUEVO ENFOQ</option>
                <option value="718">718 - CALIDAD Y PRODUCTIVIDAD</option>
                <option value="456">456 - COMERCIALIZACION</option>
                <option value="789">789 - COMERCIALIZACION INTERNACIONAL</option>
                <option value="739">739 - COMERCIO ELECTRONICO</option>
                <option value="746">746 - COMPUTACION CIENTIFICA -ACTUAR.-</option>
                <option value="796">796 - COMUNICACIONES EN LAS ORGANIZAC</option>
                <option value="795">795 - CONDUCCION DE EQUIPOS DE TRABAJ</option>
                <option value="654">654 - CONSTRUCC. DE APLIC.INFORMATICAS</option>
                <option value="352">352 - CONTABILIDAD PATRIMONIAL</option>
                <option value="730">730 - CONTABILIDAD SOCIAL Y AMBIENTAL</option>
                <option value="798">798 - CONTABILIDAD SUPERIOR</option>
                <option value="793">793 - CREATIV.E INNOV.EN ORGANIZACION.</option>
                <option value="554">554 - CRECIMIENTO ECONOMICO</option>
                <option value="561">561 - CUENTAS NACIONALES</option>
                <option value="786">786 - DERECHO DE SEGUROS</option>
                <option value="354">354 - DERECHO DEL TRAB. Y L/SEG.SOCIAL</option>
                <option value="359">359 - DERECHO ECONOMICO I</option>
                <option value="360">360 - DERECHO ECONOMICO II</option>
                <option value="777">777 - DERECHO INFORMATICO</option>
                <option value="709">709 - DERECHO PROCESAL RECURSOS</option>
                <option value="559">559 - DESARROLLO ECONOMICO</option>
                <option value="710">710 - DINAMICA ESTRATEGICA-OPERACIONA</option>
                <option value="552">552 - DINERO, CREDITO Y BANCOS</option>
                <option value="459">459 - DIRECCION GENERAL</option>
                <option value="551">551 - ECONOMETRIA</option>
                <option value="731">731 - ECONOMETRIA II</option>
                <option value="780">780 - ECONOMIA AGROPECUARIA</option>
                <option value="765">765 - ECONOMIA AMBIENTAL</option>
                <option value="745">745 - ECONOMIA DE LA ENERGIA</option>
                <option value="724">724 - ECONOMIA DE LA SEGURIDAD SOCIAL</option>
                <option value="558">558 - ECONOMIA INTERNACIONAL</option>
                <option value="782">782 - ECONOMIA LABORAL</option>
                <option value="767">767 - ECONOMIA MARXISTA</option>
                <option value="741">741 - ELEM. DE TOPOLOGIA PARA ECON. Y G</option>
                <option value="733">733 - EMPRENDEDOR 21</option>
                <option value="289">289 - EPISTEMOLOGIA DE LA ECONOMIA</option>
                <option value="248">248 - ESTADISTICA</option>
                <option value="751">751 - ESTADISTICA ACTUARIAL</option>
                <option value="285">285 - ESTADISTICA II</option>
                <option value="451">451 - ESTADISTICA PARA ADMINISTRADORES</option>
                <option value="560">560 - ESTRUCTURA ECONOMICA ARGENTINA</option>
                <option value="557">557 - ESTRUCTURA SOCIAL ARGENTINA</option>
                <option value="748">748 - EVALUACION DE PROYECTOS</option>
                <option value="556">556 - FINANZAS PUBLICAS</option>
                <option value="768">768 - FINANZAS PUBLICAS</option>
                <option value="712">712 - GENERO Y ECONOMIA</option>
                <option value="287">287 - GEOGRAFIA ECONOMICA</option>
                <option value="761">761 - GERENCIA SOCIAL PARA EL DESARROLL</option>
                <option value="742">742 - GEST.DEL CAPITAL SOCIAL Y LOS VAL.ET</option>
                <option value="716">716 - GESTION DE LA INNOVACION Y TECNO</option>
                <option value="719">719 - GESTION DE POLITICAS PUBLICAS</option>
                <option value="764">764 - GESTION EN LA ECONOMIA SOCIAL</option>
                <option value="277">277 - GESTION Y COSTOS</option>
                <option value="362">362 - GESTION Y COSTOS (PARA CONTADOR</option>
                <option value="783">783 - HIST.DEL PENSAMIENTO ECONOM. II</option>
                <option value="553">553 - HISTORIA D/PENSAMIENTO ECONOMI</option>
                <option value="249">249 - HISTORIA EC. Y SOCIAL ARGENTINA</option>
                <option value="273">273 - INSTITUCIONES DE DCHO. PRIVADO</option>
                <option value="251">251 - INSTITUCIONES DE DHO. PUBLICO</option>
                <option value="715">715 - INTELIGENCIA DE NEGOCIOS</option>
                <option value="651">651 - LOGICA</option>
                <option value="788">788 - LOGISTICA COMERCIAL</option>
                <option value="262">262 - MACROECONOMIA</option>
                <option value="283">283 - MACROECONOMIA II</option>
                <option value="278">278 - MACROECONOMIA Y POLIT. ECONOMI</option>
                <option value="288">288 - MATEMATICA PARA ECONOMISTAS</option>
                <option value="781">781 - MERC.DE CAPIT.Y ELEM.DE CAL.FIN.</option>
                <option value="658">658 - METODOLOGI.D/LOS SIST.D/INFORMA</option>
                <option value="750">750 - METODOS CUANTITATIVOS</option>
                <option value="250">250 - MICROECONOMIA I</option>
                <option value="290">290 - MICROECONOMIA I</option>
                <option value="286">286 - MICROECONOMIA II</option>
                <option value="717">717 - MODELOS Y PROYECCIONES ACTUARIA</option>
                <option value="656">656 - ORGANIZACION</option>
                <option value="555">555 - ORGANIZACION INDUSTRIAL</option>
                <option value="458">458 - PLANEAMIENTO A LARGO PLAZO</option>
                <option value="776">776 - PLANEAMIENTO Y CTRL.PRESUPUEST.</option>
                <option value="721">721 - PODER ECONÓMICO Y DERECHOS HUM</option>
                <option value="760">760 - PRACTICAS PARA LA INCLUSION SOCIA</option>
                <option value="769">769 - PROCED.ADMIN.CONTENC.Y FISCAL</option>
                <option value="740">740 - REDES INFORMATICAS</option>
                <option value="455">455 - REGIMEN TRIBUTARIO</option>
                <option value="723">723 - SEM.APLIC.PROF.ADMIN.SALUD</option>
                <option value="770">770 - SEM.COSTOS PARA LA TOMA DE DECISI</option>
                <option value="361">361 - SEM.DE INTEGRACION Y APLICACION</option>
                <option value="791">791 - SEM.ETICA DE LAS OCUPACIONES</option>
                <option value="792">792 - SEM.GESTION PEQ.Y MED.EMPRESA</option>
                <option value="460">460 - SEMINARIO DE INTEGR. Y APLICACION</option>
                <option value="562">562 - SEMINARIO DE INTEGR. Y APLICACION</option>
                <option value="660">660 - SEMINARIO DE INTEGRACION Y APLICA</option>
                <option value="759">759 - SEMINARIO DE INTEGRACION Y APLICA</option>
                <option value="775">775 - SEMINARIO SINDICATURA CONCURSAL</option>
                <option value="774">774 - SIST.DE ADM.FIN.Y CTRL.DEL...</option>
                <option value="274">274 - SISTEMAS ADMINISTRATIVOS</option>
                <option value="351">351 - SISTEMAS CONTABLES</option>
                <option value="353">353 - SISTEMAS DE COSTOS</option>
                <option value="657">657 - SISTEMAS DE DATOS</option>
                <option value="734">734 - SISTEMAS ECONOMICOS COMPARADO</option>
                <option value="452">452 - SOCIOLOGIA DE LA ORGANIZACION</option>
                <option value="655">655 - TECNOLOGIA DE COMUNICACIONES</option>
                <option value="275">275 - TECNOLOGIA DE LA INFORMACION</option>
                <option value="653">653 - TECNOLOGIA DE LOS COMPUTADORES</option>
                <option value="756">756 - TEOR.ACT.D/LFONDOS Y PL.D/J.P.S</option>
                <option value="755">755 - TEOR.ACT.DE L/SEGUROS PATRIMON.</option>
                <option value="754">754 - TEOR.ACT.DE L/SEGUROS PERSONALES</option>
                <option value="652">652 - TEOR.DE L/LENG.Y SIST.OPERATIVOS</option>
                <option value="247">247 - TEORIA CONTABLE</option>
                <option value="757">757 - TEORIA DE EQUILIBRIO ACTUARIAL</option>
                <option value="457">457 - TEORIA DE LA DECISION</option>
                <option value="790">790 - TEORIA DE LA DEMANDA</option>
                <option value="763">763 - TEORIA DE LOS JUEGOS</option>
                <option value="261">261 - TEORIA POLITICA Y DCHO. PUBLICO</option>
                <option value="356">356 - TEORIA Y TECNICA IMPOSITIVA I</option>
                <option value="357">357 - TEORIA Y TECNICA IMPOSITIVA II</option>
                <option value="779">779 - TOPICOS DE MACROECONOMIA</option>
                <option value="713">713 - TOPICOS DE MICROECONOMIA</option>
                <option value="711">711 - TRIBUTACION EN EL SECTOR AGROPEC</option>

              </select>
              <input type="email" name="email" class="form-control my-1" placeholder="Ingresa tu mail" aria-label="Ingresá email" required>
              <input type="checkbox" name="checkTyC" id="checkTyC"> <label for="checkTyC">Acepto los <a href="" data-toggle="modal" data-target="#modalTyC" required>Términos y Condiciones</a></label><br>
              <input type="hidden" name="tiempoEnPagina_m" id="tiempoEnPagina_m">
              <input type="hidden" name="tiempoEnPagina_s" id="tiempoEnPagina_s">
              <input type="hidden" name="tiempoEnTYC_m" id="tiempoEnTYC_m">
              <input type="hidden" name="tiempoEnTYC_s" id="tiempoEnTYC_s">
              <p class="text-center">
                  <button class="btn btn-lg btn-secondary my-1" type="submit" id="btnCalcular">Calcular</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://github.com/Niquito" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="modal fade" id="modalTyC" tabindex="-1" role="dialog" aria-labelledby="tituloTyC" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloTyC">Términos y condiciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @include("TerminosYCondiciones")
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnAceptarTYC" data-dismiss="modal" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="js/coming-soon.min.js"></script>

  <script type="text/javascript">
    tiempoEnPagina = new Date();
    tiempoEnTYCInicio = new Date();
    tiempoEnTYCFin = new Date();
    tiempoTotal = new Date();

    $(function(){

      $("#btnAceptarTYC").click(function(){
        $("#checkTyC").prop("checked", true);
      });

      $("#selectMaterias").select2({
          placeholder: "Selecciona las materias",
          allowClear: true
      });
      $("#selectCarrera").select2({
          placeholder: "Selecciona la carrera",
          allowClear: true
      });

      $('#modalTyC').on('shown.bs.modal', function (e) {
        tiempoEnTYCInicio = new Date();
      })

      $('#modalTyC').on('hidden.bs.modal', function (e) {
        tiempoEnTYCFin = new Date();
      })

    });

      function validarForm() {

        $(".form-control").each(function(){
            if($(this).val() == ""){
                return false;
            }
        });

        if( $("#checkTyC").prop("checked") == false ) {
          return false;
        }

        tiempoTotal = new Date();

        $("#tiempoEnPagina_m").val(parseInt(Math.abs(tiempoTotal.getTime() - tiempoEnPagina.getTime()) / (1000 * 60) % 60));
        $("#tiempoEnPagina_s").val(parseInt(Math.abs(tiempoTotal.getTime() - tiempoEnPagina.getTime()) / (1000) % 60));
        $("#tiempoEnTYC_m").val(Math.abs(tiempoEnTYCFin.getTime() - tiempoEnTYCInicio.getTime()) / (1000 * 60) % 60);
        $("#tiempoEnTYC_s").val(parseInt(Math.abs(tiempoEnTYCFin.getTime() - tiempoEnTYCInicio.getTime()) / (1000) % 60));

        return true;

      } 
  </script>

</body>

</html>
