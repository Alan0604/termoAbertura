<?php

namespace controllers\Entity;

/**
 * Description of Cadastro
 *
 * @author Alan
 */
Class Cadastro{
    private $cad_id;
    private $cad_nome;
    private $cad_email;
    private $cad_senha;
    private $cad_repetir_senha;
    private $cad_telefone;
    private $cad_genero;
    private $cad_area_atuacao;
    private $cidade_cid_id;
    private $empresa_emp_id;
    /**
     * @return mixed
     */
    public function getCad_id()
    {
        return $this->cad_id;
    }

    /**
     * @return mixed
     */
    public function getCad_nome()
    {
        return $this->cad_nome;
    }

    /**
     * @return mixed
     */
    public function getCad_email()
    {
        return $this->cad_email;
    }

    /**
     * @return mixed
     */
    public function getCad_senha()
    {
        return $this->cad_senha;
    }

    /**
     * @return mixed
     */
    public function getCad_repetir_senha()
    {
        return $this->cad_repetir_senha;
    }

    /**
     * @return mixed
     */
    public function getCad_telefone()
    {
        return $this->cad_telefone;
    }

    /**
     * @return mixed
     */
    public function getCad_genero()
    {
        return $this->cad_genero;
    }

    /**
     * @return mixed
     */
    public function getCad_area_atuacao()
    {
        return $this->cad_area_atuacao;
    }

    /**
     * @return mixed
     */
    public function getCidade_cid_id()
    {
        return $this->cidade_cid_id;
    }

    /**
     * @return mixed
     */
    public function getEmpresa_emp_id()
    {
        return $this->empresa_emp_id;
    }

    /**
     * @param mixed $cad_id
     */
    public function setCad_id($cad_id)
    {
        $this->cad_id = $cad_id;
    }

    /**
     * @param mixed $cad_nome
     */
    public function setCad_nome($cad_nome)
    {
        $this->cad_nome = $cad_nome;
    }

    /**
     * @param mixed $cad_email
     */
    public function setCad_email($cad_email)
    {
        $this->cad_email = $cad_email;
    }

    /**
     * @param mixed $cad_senha
     */
    public function setCad_senha($cad_senha)
    {
        $this->cad_senha = $cad_senha;
    }

    /**
     * @param mixed $cad_repetir_senha
     */
    public function setCad_repetir_senha($cad_repetir_senha)
    {
        $this->cad_repetir_senha = $cad_repetir_senha;
    }

    /**
     * @param mixed $cad_telefone
     */
    public function setCad_telefone($cad_telefone)
    {
        $this->cad_telefone = $cad_telefone;
    }

    /**
     * @param mixed $cad_genero
     */
    public function setCad_genero($cad_genero)
    {
        $this->cad_genero = $cad_genero;
    }

    /**
     * @param mixed $cad_area_atuacao
     */
    public function setCad_area_atuacao($cad_area_atuacao)
    {
        $this->cad_area_atuacao = $cad_area_atuacao;
    }

    /**
     * @param mixed $cidade_cid_id
     */
    public function setCidade_cid_id($cidade_cid_id)
    {
        $this->cidade_cid_id = $cidade_cid_id;
    }

    /**
     * @param mixed $empresa_emp_id
     */
    public function setEmpresa_emp_id($empresa_emp_id)
    {
        $this->empresa_emp_id = $empresa_emp_id;
    }
}