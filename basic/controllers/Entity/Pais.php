<?php

namespace controllers\Entity;

class Pais{
    private $pais_id;
    private $pais_nome;
    private $pais_sigla;
    /**
     * @return mixed
     */
    public function getPais_id()
    {
        return $this->pais_id;
    }

    /**
     * @return mixed
     */
    public function getPais_nome()
    {
        return $this->pais_nome;
    }

    /**
     * @return mixed
     */
    public function getPais_sigla()
    {
        return $this->pais_sigla;
    }

    /**
     * @param mixed $pais_id
     */
    public function setPais_id($pais_id)
    {
        $this->pais_id = $pais_id;
    }

    /**
     * @param mixed $pais_nome
     */
    public function setPais_nome($pais_nome)
    {
        $this->pais_nome = $pais_nome;
    }

    /**
     * @param mixed $pais_sigla
     */
    public function setPais_sigla($pais_sigla)
    {
        $this->pais_sigla = $pais_sigla;
    }
}