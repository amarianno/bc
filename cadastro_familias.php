<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

$op = $_POST['operacao'];

$camposValores = array();

//DADOS PESSOAIS
$camposValores['nome'] = $_POST['txtNome'];
$camposValores['data_nascimento'] = implode('-',array_reverse(explode('/', $_POST['txtDtNascimento'])));
$camposValores['rg'] = $_POST['txtRg'];
$camposValores['cpf'] = $_POST['txtCPF'];
$camposValores['naturalidade'] = $_POST['selNaturalidade'];
$camposValores['estado_civil'] = $_POST['selEstadoCivil'];
$camposValores['escolaridade'] = $_POST['selEscolaridade'];
$camposValores['trabalha'] = $_POST['selTrabalha'];
$camposValores['tipo_trabalho'] = $_POST['selTipoTrabalho'];
$camposValores['profissao'] = $_POST['txtProfissao'];
$camposValores['email'] = $_POST['txtEmail'];
$camposValores['facebook'] = $_POST['txtFacebook'];
$camposValores['religiao'] = $_POST['selReligiao'];
$camposValores['frequenta'] = $_POST['selFrequenta'];
$camposValores['problema_espirita'] = $_POST['txtProblemaEspirita'];

// dados endereço
$camposValores['endereco'] = $_POST['txtEndereco'];
$camposValores['numero_endereco'] = $_POST['txtNumero'];
$camposValores['complemento'] = $_POST['txtComplemento'];
$camposValores['pt_referencia'] = $_POST['txtPtReferencia'];
$camposValores['bairro'] = $_POST['txtBairro'];
$camposValores['cidade'] = $_POST['txtCidade'];
$camposValores['cep'] = $_POST['txtCep'];
$camposValores['telefone1'] = $_POST['txtTel1'];
$camposValores['telefone2'] = $_POST['txtTel2'];
$camposValores['tipo_residencia'] = $_POST['selTipoResidencia'];
$camposValores['tipo_construcao'] = $_POST['selTipoConstrucao'];
$camposValores['situacao_residencia'] = $_POST['selSituacaoResidencia'];
$camposValores['num_comodos'] = $_POST['txtNumComodos'];
$camposValores['renda'] = $_POST['selRenda'];
$camposValores['outra_renda'] = $_POST['selOutrasRenda'];
$camposValores['de_onde'] = $_POST['txtDeOnde'];
$camposValores['possui_veiculo'] = $_POST['selPossuiVeiculo'];

// dados familiares
$camposValores['qtde_filhos'] = $_POST['selQtdeFilhos'];
$camposValores['unico_pai'] = $_POST['selTodosUnicoPai'];
$camposValores['nome_pai_1'] = $_POST['txtNomePai1'];
$camposValores['nome_pai_2'] = $_POST['txtNomePai2'];
$camposValores['necessidade_basica'] = $_POST['txtNecessidadeBasica'];
$camposValores['cor_ubs'] = $_POST['selCorUbs'];
$camposValores['ubs_acessa'] = $_POST['txtUbsAcessa'];
$camposValores['qtde_moram_resid'] = $_POST['txtQtdePessoasMoram'];
$camposValores['atend_medico'] = $_POST['txtAtendMedico'];

//Dados Composição Familiar
$arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];
$camposValoresCompFamiliar = array();
//foreach ($arrayCompFamiliar as $compFamiliar) {
for($i = 0; $i < count($arrayCompFamiliar); $i++) {
    //$compFamiliar = new ComposicaoFamiliar();

    $camposValoresCompFamiliar[$i]['nome'] = $compFamiliar->nome;
    $camposValoresCompFamiliar[$i]['grau_parentesco'] = $compFamiliar->grauParentesco;
    $camposValoresCompFamiliar[$i]['escola'] = $compFamiliar->escola;
    $camposValoresCompFamiliar[$i]['data_nascimento'] = $compFamiliar->dataNascimento;
    $camposValoresCompFamiliar[$i]['trabalha'] = $compFamiliar->trabalho;
    $camposValoresCompFamiliar[$i]['renda'] = $compFamiliar->renda;
    $camposValoresCompFamiliar[$i]['rg'] = $compFamiliar->rg;
    $camposValoresCompFamiliar[$i]['grupo_casa'] = $compFamiliar->grupoCasa;
    $camposValoresCompFamiliar[$i]['gestante'] = $compFamiliar->gestante;
    $camposValoresCompFamiliar[$i]['deficiencia'] = $compFamiliar->deficiencia;
    $camposValoresCompFamiliar[$i]['vicio'] = $compFamiliar->vicio;
    $camposValoresCompFamiliar[$i]['atend_medico_especial'] = $compFamiliar->atendimentoMedicoEspecializado;
}

//Dados Assistência
$camposValores['objetivo_cadastro'] = $_POST['txtObjetivo'];
$camposValores['visita'] = $_POST['selVisita'];
$camposValores['acompanhamento'] = $_POST['selAcompanhamento'];
$camposValores['comentario'] = $_POST['txtComentario'];

$camposValores['composicao_familiar'] = $camposValoresCompFamiliar;

print_r($camposValores);
?>