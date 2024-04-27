<?php

class Controlador
{
    private $lista;

    public function __construct()
    {
        $this->lista = [];
    }

    public function getAll()
    {
        $con = new Conexion();
        $sql = 'SELECT aui.value_titulo as "titulo", aui.value_contenido as "contenido", i.corto as "corto", au.titulo as "seccion"
                FROM about_us_idioma as aui
                    JOIN idiomas as i ON (aui.idioma_id = i.id)
                    JOIN about_us as au ON (aui.about_us_id = au.id);';
        $rs = mysqli_query($con->getConnection(), $sql);
        if ($rs) {
            while ($tupla = mysqli_fetch_assoc($rs)) {
                $aux = [
                    $tupla['seccion'] => [
                        "titulo" => [
                            $tupla['corto'] => $tupla['titulo']
                        ],
                        "contenido" => [
                            $tupla['corto'] => $tupla['contenido']
                        ]
                    ]
                ];
                array_push($this->lista, $aux);
            }
            mysqli_free_result($rs);
        }
        $con->closeConnection();
        return $this->lista;
    }
}
