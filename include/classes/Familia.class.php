<?php


class Familia extends Persistivel {

    public $codigo;
    public $nome;
    public $dataNascimento;
    public $rg;
    public $cpf;
    public $naturalidade;
    public $estadoCivil;
    public $escolaridade;
    public $isTrabalha;
    public $tipoTrabalho;
    public $profissao;
    public $email;
    public $facebook;
    public $religiao;
    public $isFrequenta;
    public $problemaCasaEspirita;

    public $endereco;
    public $numero;
    public $complemento;
    public $ptReferencia;
    public $bairro;
    public $cidade;
    public $cep;
    public $telefone1;
    public $telefone2;
    public $residencia;
    public $tipoConstrucao;
    public $situacaoResidencia;
    public $numeroComodos;
    public $renda;
    public $OutraRenda;
    public $deOnde;
    public $veiculo;

    public $quantidadeFilhos;
    public $isTodosUnicoPai;
    public $paiCrianca1;
    public $paiCrianca2;
    public $necessidadeBasica;
    public $corUbs;
    public $ubsAcessa;
    public $moramResidencia;
    public $atendimentoMedicoEspecializado;

    public $objetivoCadastro;
    public $isVisitaGrupo;
    public $isDesejaAcompanhamento;
    public $comentarios;

    public function getChavePrimaria() {
        return $this->codigo;
    }
}

?>