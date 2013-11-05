jQuery(function($){
    if($("#txtDtNascimento").size() > 0) {
        $("#txtDtNascimento").mask("99/99/9999");
    }
    if($("#txtCPF").size() > 0) {
        $("#txtCPF").mask("999.999.999-99");
    }
    if($("#txtCep").size() > 0) {
        $("#txtCep").mask("99.999-999");
    }
    if($("#txtTel1").size() > 0) {
        $("#txtTel1").mask("(99)99999-9999");
    }
    if($("#txtTel2").size() > 0) {
        $("#txtTel2").mask("(99)99999-9999");
    }
    if($("#txtDtNascimentoCompFamiliar").size() > 0) {
        $("#txtDtNascimentoCompFamiliar").mask("99/99/9999");
    }

});



//************************* DADOS PESSOAIS ******************************************
function dadosTrabalho() {

    if(document.getElementById('selTrabalha').value == 'N') {
        document.getElementById('selTipoTrabalho').value = 'N';  //Não trabalha
        document.getElementById('selTipoTrabalho').readonly = true;
        $("#profissao").html('<span id="profissao"> A Procura de </span>');
    } else {
        document.getElementById('selTipoTrabalho').readonly = false;
        document.getElementById('selTipoTrabalho').value = 'R';
        $("#profissao").html('<span id="profissao"> Profissão </span>');
    }
}
//************************* DADOS PESSOAIS ******************************************
//************************* DADOS ENDERECO ******************************************
function isCesta() {

    if(document.getElementById('selOutrasRenda').value == '4') {
       $('#txtDeOnde').attr('disabled', false);
    } else {
       $('#txtDeOnde').val('');
       $('#txtDeOnde').attr('disabled', true);
    }
}
//************************* DADOS ENDERECO ******************************************
//************************* DADOS FAMILIARES ******************************************
function semFilhos() {

    if(document.getElementById('selQtdeFilhos').value == '0') {
        document.getElementById('selTodosUnicoPai').value = '';
        $('#txtNomePai1').val('');
        $('#txtNomePai1').attr('disabled', true);
        $('#txtNomePai2').val('');
        $('#txtNomePai2').attr('disabled', true);
    } else {
        $('#txtNomePai1').attr('disabled', false);
        $('#txtNomePai2').attr('disabled', false);
    }

}
//************************* DADOS FAMILIARES ******************************************
//************************* DADOS COMPOSICAO FAMILIAR ******************************************
function limparComposicaoFamiliar() {
    $("#txtCompFamiliar").val('');
    document.getElementById('selGrauParenstescoAcompFamiliar').value = 1;
    $("#txtEscola").val('');
    $("#txtDtNascimentoCompFamiliar").val('');
    $("#txtTrabalha").val('');
    $("#txtRenda").val('');
    $("#txtRGAcompFamiliar").val('');
    $("#txtGrupoCasa").val('');
    document.getElementById('selGestante').value = 'N';
    $("#txtDeficiencia").val('');
    $("#txtVicio").val('');
    $("#txtAtendMedicEspec").val('');
}
function addComposicaoFamiliar() {
    if($("#txtCompFamiliar").val() == '') {return false;}

    var campos =  "txtCompFamiliar=" + $("#txtCompFamiliar").val();
    campos += "&selGrauParenstescoAcompFamiliar=" + document.getElementById('selGrauParenstescoAcompFamiliar').value;
    campos += "&txtEscola=" + $("#txtEscola").val();
    campos += "&txtDtNascimentoCompFamiliar=" + $("#txtDtNascimentoCompFamiliar").val();
    campos += "&txtTrabalha=" + $("#txtTrabalha").val();
    campos += "&txtRenda=" + $("#txtRenda").val();
    campos += "&txtRGAcompFamiliar=" + $("#txtRGAcompFamiliar").val();
    campos += "&txtGrupoCasa=" + $("#txtGrupoCasa").val();
    campos += "&selGestante=" + document.getElementById('selGestante').value;
    campos += "&txtDeficiencia=" + $("#txtDeficiencia").val();
    campos += "&txtVicio=" + $("#txtVicio").val();
    campos += "&txtAtendMedicEspec=" + $("#txtAtendMedicEspec").val();
    campos += "&operacao=inserir";

    var elemento = document.getElementById('dados_composicao_familiar');
    $.ajax({
        type: "POST",
        url: 'addComposicaoFamiliar.php',
        data: campos,
        success: function (data) {
            elemento.innerHTML = data;
            $("#txtCompFamiliar").val('');
            document.getElementById('selGrauParenstescoAcompFamiliar').value = 1;
            $("#txtEscola").val('');
            $("#txtDtNascimentoCompFamiliar").val('');
            $("#txtTrabalha").val('');
            $("#txtRenda").val('');
            $("#txtRGAcompFamiliar").val('');
            $("#txtGrupoCasa").val('');
            document.getElementById('selGestante').value = 'N';
            $("#txtDeficiencia").val('');
            $("#txtVicio").val('');
            $("#txtAtendMedicEspec").val('');
        }
    });
}

function mostrarGrid() {
    var campos =  "operacao=consultar";
    var elemento = document.getElementById('dados_composicao_familiar');
    $.ajax({
        type: "POST",
        url: 'addComposicaoFamiliar.php',
        data: campos,
        success: function (data) {
            elemento.innerHTML = data;
        }
    });
}

function detalharCompFam(codigo) {
    var campos =  "operacao=detalhar";
    campos +=  "&codigo=" + codigo;

    $.ajax({
        type: "POST",
        url: 'addComposicaoFamiliar.php',
        data: campos,
        success: function (data) {
            var composicaoFamiliar = jQuery.parseJSON ( data );
            $("#txtCompFamiliar").val(composicaoFamiliar.nome);
            document.getElementById('selGrauParenstescoAcompFamiliar').value = composicaoFamiliar.grauParentesco;
            $("#txtEscola").val(composicaoFamiliar.escola);
            $("#txtDtNascimentoCompFamiliar").val(composicaoFamiliar.dataNascimento);
            $("#txtTrabalha").val(composicaoFamiliar.trabalho);
            $("#txtRenda").val(composicaoFamiliar.renda);
            $("#txtRGAcompFamiliar").val(composicaoFamiliar.rg);
            $("#txtGrupoCasa").val(composicaoFamiliar.grupoCasa);
            document.getElementById('selGestante').value = composicaoFamiliar.gestante;
            $("#txtDeficiencia").val(composicaoFamiliar.deficiencia);
            $("#txtVicio").val(composicaoFamiliar.vicio);
            $("#txtAtendMedicEspec").val(composicaoFamiliar.atendimentoMedicoEspecializado);
        }
    });
}

function excluirCompFam(codigo) {
    var campos =  "operacao=excluir";
    campos +=  "&codigo=" + codigo;

    var elemento = document.getElementById('dados_composicao_familiar');

    $.ajax({
        type: "POST",
        url: 'addComposicaoFamiliar.php',
        data: campos,
        success: function (data) {
            limparComposicaoFamiliar();
            elemento.innerHTML = data;
        }
    });
}

//************************* DADOS COMPOSICAO FAMILIAR ******************************************
//************************* BEGIN CADASTRO ******************************************


function cadastrar() {

    var campos =  "operacao=inserir";
    // dados pessoais
    campos += "&txtNome=" + $("#txtNome").val();
    campos += "&txtDtNascimento=" + $("#txtDtNascimento").val();
    campos += "&txtRg=" + $("#txtRg").val();
    campos += "&txtCPF=" + $("#txtCPF").val();
    campos += "&selNaturalidade=" + document.getElementById('selNaturalidade').value;
    campos += "&selEstadoCivil=" + document.getElementById('selEstadoCivil').value;
    campos += "&selEscolaridade=" + document.getElementById('selEscolaridade').value;
    campos += "&selTrabalha=" + document.getElementById('selTrabalha').value;
    campos += "&selTipoTrabalho=" + document.getElementById('selTipoTrabalho').value;
    campos += "&txtProfissao=" + $("#txtProfissao").val();
    campos += "&txtEmail=" + $("#txtEmail").val();
    campos += "&txtFacebook=" + $("#txtFacebook").val();
    campos += "&selReligiao=" + document.getElementById('selReligiao').value;
    campos += "&selFrequenta=" + document.getElementById('selFrequenta').value;
    campos += "&txtProblemaEspirita=" + $("#txtProblemaEspirita").val();

    // dados endereço
    campos += "&txtEndereco=" + $("#txtEndereco").val();
    campos += "&txtNumero=" + $("#txtNumero").val();
    campos += "&txtComplemento=" + $("#txtComplemento").val();
    campos += "&txtPtReferencia=" + $("#txtPtReferencia").val();
    campos += "&txtBairro=" + $("#txtBairro").val();
    campos += "&txtCidade=" + $("#txtCidade").val();
    campos += "&txtCep=" + $("#txtCep").val();
    campos += "&txtTel1=" + $("#txtTel1").val();
    campos += "&txtTel2=" + $("#txtTel2").val();
    campos += "&selTipoResidencia=" + document.getElementById('selTipoResidencia').value;
    campos += "&selTipoConstrucao=" + document.getElementById('selTipoConstrucao').value;
    campos += "&selSituacaoResidencia=" + document.getElementById('selSituacaoResidencia').value;
    campos += "&txtNumComodos=" + $("#txtNumComodos").val();
    campos += "&selRenda=" + document.getElementById('selRenda').value;
    campos += "&selOutrasRenda=" + document.getElementById('selOutrasRenda').value;
    campos += "&txtDeOnde=" + $("#txtDeOnde").val();
    campos += "&selPossuiVeiculo=" + document.getElementById('selPossuiVeiculo').value;

    // dados familiares
    campos += "&selQtdeFilhos=" + document.getElementById('selQtdeFilhos').value;
    campos += "&selTodosUnicoPai=" + document.getElementById('selTodosUnicoPai').value;
    campos += "&txtNomePai1=" + $("#txtNomePai1").val();
    campos += "&txtNomePai2=" + $("#txtNomePai2").val();
    campos += "&txtNecessidadeBasica=" + $("#txtNecessidadeBasica").val();
    campos += "&selCorUbs=" + document.getElementById('selCorUbs').value;
    campos += "&txtUbsAcessa=" + $("#txtUbsAcessa").val();
    campos += "&txtQtdePessoasMoram=" + $("#txtQtdePessoasMoram").val();
    campos += "&txtAtendMedico=" + $("#txtAtendMedico").val();

    //Dados Assistência
    campos += "&txtObjetivo=" + $("#txtObjetivo").val();
    campos += "&selVisita=" + document.getElementById('selVisita').value;
    campos += "&selAcompanhamento=" + document.getElementById('selAcompanhamento').value;
    campos += "&txtComentario=" + $("#txtComentario").val();

    $.ajax({
        type: "POST",
        url: 'cadastro_familias.php',
        data: campos,
        success: function (data) {
            document.getElementById('response').innerHTML = '<b>' + data + '</b>';
        }
    });

}

//************************* END CADASTRO ******************************************
//************************* BEGIN AUXILIARES******************************************
function formataData(dataParaFormatar) {
    var dataSplit = dataParaFormatar.split("-");
    return dataSplit[2] + "/" + dataSplit[1] + "/" + dataSplit[0][2]+dataSplit[0][3];
}
//************************* END AUXILIARES******************************************