<?php

namespace controllers\Entity;

/**
 * Description of Cidade
 *
 * @author Alan
 */

class Cidade{
    private $cid_id;
    private $cid_nome;
    private $cid_cep;
    private $estado_est_id;
    /**
     * @return mixed
     */
    public function getCid_id()
    {
        return $this->cid_id;
    }

    /**
     * @return mixed
     */
    public function getCid_nome()
    {
        return $this->cid_nome;
    }

    /**
     * @return mixed
     */
    public function getCid_cep()
    {
        return $this->cid_cep;
    }

    /**
     * @return mixed
     */
    public function getEstado_est_id()
    {
        return $this->estado_est_id;
    }

    /**
     * @param mixed $cid_id
     */
    public function setCid_id($cid_id)
    {
        $this->cid_id = $cid_id;
    }

    /**
     * @param mixed $cid_nome
     */
    public function setCid_nome($cid_nome)
    {
        $this->cid_nome = $cid_nome;
    }

    /**
     * @param mixed $cid_cep
     */
    public function setCid_cep($cid_cep)
    {
        $this->cid_cep = $cid_cep;
    }

    /**
     * @param mixed $estado_est_id
     */
    public function setEstado_est_id($estado_est_id)
    {
        $this->estado_est_id = $estado_est_id;
    }
}