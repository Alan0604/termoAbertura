<?php

namespace controllers\Entity;

class Empresa{
    private $emp_int;
    private $emp_nome;
    private $emp_missao;
    private $emp_foco;
    /**
     * @return mixed
     */
    public function getEmp_int()
    {
        return $this->emp_int;
    }

    /**
     * @return mixed
     */
    public function getEmp_nome()
    {
        return $this->emp_nome;
    }

    /**
     * @return mixed
     */
    public function getEmp_missao()
    {
        return $this->emp_missao;
    }

    /**
     * @return mixed
     */
    public function getEmp_foco()
    {
        return $this->emp_foco;
    }

    /**
     * @param mixed $emp_int
     */
    public function setEmp_int($emp_int)
    {
        $this->emp_int = $emp_int;
    }

    /**
     * @param mixed $emp_nome
     */
    public function setEmp_nome($emp_nome)
    {
        $this->emp_nome = $emp_nome;
    }

    /**
     * @param mixed $emp_missao
     */
    public function setEmp_missao($emp_missao)
    {
        $this->emp_missao = $emp_missao;
    }

    /**
     * @param mixed $emp_foco
     */
    public function setEmp_foco($emp_foco)
    {
        $this->emp_foco = $emp_foco;
    }
}