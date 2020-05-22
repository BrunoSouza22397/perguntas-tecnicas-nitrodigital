<?php
namespace Classe;

require __DIR__ . '/../vendor/autoload.php';

use Classe\Permissao;
use Exception;

class Usuario extends Permissao
{
    private $telefone;
    private $data_cadastro;
    private $nome;

    public function Cadastrar() {
        if ($this->telefone != null) {
            if ($this->nome != null) {
                if ($this->getNivel() != null) {
                    $this->data_cadastro = date("d/m/Y H:i:s");
                } else {
                    throw new Exception('Nivel não preenchido.');    
                }
            } else {
                throw new Exception('Nome não preenchido.');    
            }
        } else {
            throw new Exception('Telefone não preenchido.');
        }
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function preencherDados($nome, $telefone, $nivel) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->setNivel($nivel);
    }

    public function getDataCadastro() {
        return $this->data_cadastro;
    }

    public function getNome() {
        return $this->nome;
    }
}