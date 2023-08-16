<?php

namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['USU_NOMBRE','USU_CATALOGO','USU_PASSWORD','USU_SITUACION',];
    protected static $idTabla = 'USU_ID';

    public $usu_id;
    public $usu_nombre;
    public $usu_catalogo;
    public $usu_password;
    public $usu_situacion;

    public function __construct($arg = [])
    {
        $this->usu_id = $arg['usu_id'] ?? null;
        $this->usu_nombre = $arg['usu_nombre'] ?? '';
        $this->usu_catalogo = $arg['usu_catalogo'] ?? '';
        $this->usu_password = $arg['usu_password'] ?? '';
        $this->usu_situacion = $arg['usu_situacion'] ?? '';

    }

}