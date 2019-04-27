<?php
namespace App\Http\Controllers;

use App\Estadistica;
use App\Curso;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mail(Request $request)
    {
        $para = $request->input("email");
        $sujeto = "Datos de depósito";

        $mensaje = "
        <html>
        <head>
        <title>Gracias por utilizar el servicio</title>
        </head>
        <body>
        <p>
            ¡Gracias por utilizar los servicios de CalculadoraDeFinales!
            <br><br>
            Datos de depósito:
            <br><br>
            Cuenta Corriente $ 191-119-597150/8
            <br>
            CBU 19101196 - 55011959715082
            Banco Credicoop
            <br>
            <br><br>
            Monto mínimo del depósito: $200 (pesos doscientos). <br><br>
            Recuerde que posee 48hs como máximo para efectuar el pago, tal como accedió en la cláusula 4ta - sección 2.
            <br>
            ----
        </p>
        <p>
            Debido a que le dedicaste menos de 5m a leer los términos y condiciones en CalculadoraDeFinales, decidimos mandarte éste mail con un recordatorio sobre otras cláusulas importantes QUE ACEPTASTE cumplir:
        </p>

        <h4>Cláusula 4ta - sección 3:</h4>
        <p>
            Los Usuarios autorizan explícitamente al desarrollador de la aplicación a generar metadata a partir de los datos ingresados en el formulario, con el fin de poder identificar al Usuario, a sus amigos, familiares, mascotas y familiares de las mascotas. El desarrollador no garantiza ni se hace cargo, al igual que la mayoría de las companías de software, que los datos puedan ser accedidos por terceros en un ataque informático y terminar en manos de agrupaciones terroristas, criminales, sindicales, mafiosas o religiosas, reafirmando una vez más de que el Usuario pueda responsabilizar al desarrollador de ninguna manera por el hecho.
        </p>
        <h4>Cláusula 4ta - sección 5 - párrafo 1:</h4>
        <p>
          Con la aceptación de los presentes Términos y Condiciones, el Usuario declara que se mantendrá indemne frente a cualquier reclamo.
        </p>
        <h4>Cláusula 4ta - sección 2:</h4>
        <p>
            Cada Usuario se compromete al depósito en cualquier forma de pago de la suma total de un millón quinientos mil dólares estadounidenses en la cuenta corriente del Banco Nación del desarrollador de la aplicación en las próximas 48hs de consumido el servicio (en caso de no contar con el dinero el Desarrollador acepta almas como forma de pago, o un pago mínimo de doscientos pesos argentinos al CBU proporcionado luego consumir el servicio de la actual página), a modo de honorarios por el tiempo invertido en el mismo y por la ayuda prestada al estudiante para resolver algo tan trascendental en su vida como la selección de mesas de exámenes libres del primer cuatrimestre del año 2019 en la facultad de ciencias económicas de la UBA.
            <br>
            ----
        </p>
        <h3>Otras cláusulas importantes:</h3>
        <h4>Cláusula 4ta - sección 6:</h4>
        <p>
            El desarrollador se disculpa pública y sinceramente con sus compañeros de estudio por el posible engaño realizado a la hora de la presentación de la actual aplicación. 
        </p>

        <h4>Cláusula 4ta - sección 1 - párrafo 3:</h4>
        <p>
            Por ende, se declara la nulidad de todos los elementos listados de ahora en más dentro de la cláusula cuarta, con el objeto de que la notificación via mail lleve un mensaje que acompañe una idea de concientización sobre la situación actual respecto a la cultura de ignorar los Términos y Condiciones.
            <br>
            ----
        </p>

        <h4>Carta del desarrollador de la página:</h4>
        <p>
            ¡Hola!
            <br>
            Espero sinceramente haberte movilizado de alguna manera con las cláusulas que vos, por voluntad propia, aceptaste explícitamente a la hora de entrar en la página. Según mi registro, le dedicaste ".$request->input("tiempoEnTYC_m")."m ".$request->input("tiempoEnTYC_s")."s a la lectura de lo que estabas aceptando.
        </p>
        <p>
            Las cláusulas que leíste recién están claramente definidas en la página (podés volver a entrar y buscarlas), pero por si queda alguna duda, no tengo intención de ejercer ninguna de éllas. Tampoco voy a almacenar datos tuyos... pero podría.
        </p>
        <p>
            Por ejemplo, podría almacenar tu mail, tu IP, la hora, y demás información que de alguna manera me permita triangular tu identidad. Lo que si voy a almacenar es el tiempo que tardaste en la página, el tiempo que le dedicaste a leer los términos y condiciones, y un hash de tu IP (esto último es para poder diferenciar si una misma persona ingresa varios registros, sin que nadie pueda de alguna forma identificar concretamente QUIÉN fue).
            Que yo no lo haga y que sea respetuoso con la privacidad, no significa que todos lo hagan, y de éso se trata éste mail.
        </p>
        <p>
            ¿Somos realmente conscientes de los términos y condiciones que aceptamos constantemente? Si es sabido que el índice de personas que realmente lee los términos y condiciones son mundialmente ínfimos, ¿Se pueden igual tomar como válidos? Si te considerás una persona insignificante, que \"no tiene nada que ocultar\" ¿Te sentirías cómodo entregándome una copia de tu información alojada en, por ejemplo, Facebook y Google, compartiendo tus gustos, tus recuerdos, tus relaciones, tu perfil, tu dirección, tu teléfono, tus horarios? No se trata de tener cosas que ocultar, sino de a quién se las mostrás.
        </p>
        <p>
            El manejo actual de los términos y condiciones NO FUNCIONA.
        </p>
        <p>
            Abramos el debate sobre privacidad en la red, y sobre cómo los términos y condiciones son una veta que las organizaciones están explotando para acceder a información con la cual no siempre estamos de acuerdo.
        </p>
        ";

        $cabeceras = "MIME-Version: 1.0" . "\r\n";
        $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $cabeceras .= 'From: <contaduria@calculadoraDeFinales.com>' . "\r\n";

        mail($para,$sujeto,$mensaje,$cabeceras);

        $resultadoTiempos = new Estadistica;

        $resultadoTiempos->ip = hash("sha256", $request->ip());
        $resultadoTiempos->tiempo_tyc_m = $request->input("tiempoEnTYC_m");
        $resultadoTiempos->tiempo_tyc_s = $request->input("tiempoEnTYC_s");
        $resultadoTiempos->tiempo_total_m = $request->input("tiempoEnPagina_m");
        $resultadoTiempos->tiempo_total_s = $request->input("tiempoEnPagina_s");

        $resultadoTiempos->save();

        $cursos = Curso::whereIn("id_materia", $request->input("selectMaterias"))->orderBy("fecha")->orderBy("hora")->get();


        return view('resultados', ['cursos' => $cursos]);
    }

    public function estadisticas(Request $request)
    {
        return view('estadisticas', ['estadisticas' => Estadistica::all()]);
    }

}