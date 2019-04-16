<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mail(Request $request)
    {

        $para = $request->input("email");
        $sujeto = "Prueba de mail enviado";

        $mensaje = "
        <html>
        <head>
        <title>Prueba de titulo de mail</title>
        </head>
        <body>
        <p>Este email es de prueba</p>
        <table>
        <tr>
        <th>Tiempo en página</th>
        <th>Tiempo en Términos y Condiciones</th>
        </tr>
        <tr>
        <td>".$request->input("tiempoEnPagina")."</td>
        <td>".$request->input("tiempoEnTYC")."</td>
        </tr>
        </table>
        </body>
        </html>
        ";

        $cabeceras = "MIME-Version: 1.0" . "\r\n";
        $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $cabeceras .= 'From: <RicardoFort@miami.com>' . "\r\n";

        mail($para,$sujeto,$mensaje,$cabeceras);


        return ("Mail enviado");
    }

}