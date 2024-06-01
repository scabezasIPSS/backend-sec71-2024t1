<?php
include_once '../version1.php';

//valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0) {
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false) {
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'services') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get_evaluacion) {
                    /*
                    include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    */
                    /*
                    {
                        "id": "1",//ok
                        "titulo": { //ok
                            "esp": "Consultoría digital"
                        },
                        "texto": { //ok
                            "esp": "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos."
                        },
                        "activo": true//ok
                    },
                     */
                    $lista = [
                        [
                            "id" => 1,
                            "titulo" => [
                                "esp" => "Consultoría digital",
                                "eng" => "title 1"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.",
                                "eng" => "description 1"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 2,
                            "titulo" => [
                                "esp" => "Soluciones multiexperiencia",
                                "eng" => "title 2"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.",
                                "eng" => "description 2"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 3,
                            "titulo" => [
                                "esp" => "Evolución de ecosistemas",
                                "eng" => "title 3"
                            ],
                            "texto" => [
                                "esp" => "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia.",
                                "eng" => "description 3"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 4,
                            "titulo" => [
                                "esp" => "Soluciones Low-Code",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 5,
                            "titulo" => [
                                "esp" => "Servicio 5",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 6,
                            "titulo" => [
                                "esp" => "Servicio 6",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 7,
                            "titulo" => [
                                "esp" => "Servicio 7",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 8,
                            "titulo" => [
                                "esp" => "Servicio 8",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 9,
                            "titulo" => [
                                "esp" => "Servicio 9",
                                "eng" => "title 4"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description 4"
                            ],
                            "activo" => true
                        ],
                    ];
                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                } else {
                    http_response_code(401);
                    echo json_encode(["Error" => "No tiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}
