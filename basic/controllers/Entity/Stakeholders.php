<?php
namespace controllers\Entity;

class Stakeholders{
    private $sta_id;
    private $cadastro_cad_id;
    private $cadastro_cidade_id;
    private $cadastro_empresa_id;
    /**
     * @return mixed
     */
    public function getSta_id()
    {
        return $this->sta_id;
    }

    /**
     * @return mixed
     */
    public function getCadastro_cad_id()
    {
        return $this->cadastro_cad_id;
    }

    /**
     * @return mixed
     */
    public function getCadastro_cidade_id()
    {
        return $this->cadastro_cidade_id;
    }

    /**
     * @return mixed
     */
    public function getCadastro_empresa_id()
    {
        return $this->cadastro_empresa_id;
    }

    /**
     * @param mixed $sta_id
     */
    public function setSta_id($sta_id)
    {
        $this->sta_id = $sta_id;
    }

    /**
     * @param mixed $cadastro_cad_id
     */
    public function setCadastro_cad_id($cadastro_cad_id)
    {
        $this->cadastro_cad_id = $cadastro_cad_id;
    }

    /**
     * @param mixed $cadastro_cidade_id
     */
    public function setCadastro_cidade_id($cadastro_cidade_id)
    {
        $this->cadastro_cidade_id = $cadastro_cidade_id;
    }

    /**
     * @param mixed $cadastro_empresa_id
     */
    public function setCadastro_empresa_id($cadastro_empresa_id)
    {
        $this->cadastro_empresa_id = $cadastro_empresa_id;
    }

    
    
}