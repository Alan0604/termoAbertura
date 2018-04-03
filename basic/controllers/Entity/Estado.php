<?php

namespace controllers\Entity;

/**
 * Description of Cidade
 *
 * @author Alan
 */

class Estado{
    private $est_id;
    private $est_nome;
    private $est_sigla;
    private $pais_id;
    /**
     * @return mixed
     */
    public function getEst_id()
    {
        return $this->est_id;
    }

    /**
     * @return mixed
     */
    public function getEst_nome()
    {
        return $this->est_nome;
    }

    /**
     * @return mixed
     */
    public function getEst_sigla()
    {
        return $this->est_sigla;
    }

    /**
     * @return mixed
     */
    public function getPais_id()
    {
        return $this->pais_id;
    }

    /**
     * @param mixed $est_id
     */
    public function setEst_id($est_id)
    {
        $this->est_id = $est_id;
    }

    /**
     * @param mixed $est_nome
     */
    public function setEst_nome($est_nome)
    {
        $this->est_nome = $est_nome;
    }

    /**
     * @param mixed $est_sigla
     */
    public function setEst_sigla($est_sigla)
    {
        $this->est_sigla = $est_sigla;
    }

    /**
     * @param mixed $pais_id
     */
    public function setPais_id($pais_id)
    {
        $this->pais_id = $pais_id;
    }
}