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

function naoValidado(campo) {
    alert('Campo ' + campo + ' não pode ser vazio');
    return false;
}

function cadastrar() {

    if($("#txtNome").val() == '') {return naoValidado('DADOS PESSOAIS - Nome');}
    if($("#txtDtNascimento").val() == '') {return naoValidado('DADOS PESSOAIS - Data de Nascimento');}
    if($("#txtRg").val() == '') {return naoValidado('DADOS PESSOAIS - RG');}
    if($("#txtCPF").val() == '') {return naoValidado('DADOS PESSOAIS - CPF');}
    if($("#txtProfissao").val() == '') {return naoValidado('DADOS PESSOAIS - Profissão/A procura de');}
    if($("#txtEmail").val() == '') {return naoValidado('DADOS PESSOAIS - Email');}
    if($("#txtProblemaEspirita").val() == '') {return naoValidado('DADOS PESSOAIS - Problema com casa espírita');}

    if($("#txtEndereco").val() == '') {return naoValidado('DADOS ENDEREÇO - Endereço');}
    if($("#txtNumero").val() == '') {return naoValidado('DADOS ENDEREÇO - Número da Casa');}
    if($("#txtPtReferencia").val() == '') {return naoValidado('DADOS ENDEREÇO - Ponto de Referência');}
    if($("#txtBairro").val() == '') {return naoValidado('DADOS ENDEREÇO - Bairro');}
    if($("#txtCidade").val() == '') {return naoValidado('DADOS ENDEREÇO - Cidade');}
    if($("#txtCep").val() == '') {return naoValidado('DADOS ENDEREÇO - CEP');}
    if($("#txtTel1").val() == '') {return naoValidado('DADOS ENDEREÇO - Telefone 1');}
    if(document.getElementById('selOutrasRenda').value == '4') {
        if($("#txtDeOnde").val() == '') {return naoValidado('DADOS ENDEREÇO - De onde?');}
    }

    if(document.getElementById('selQtdeFilhos').value != '0') {
        if($("#txtNomePai1").val() == '') {return naoValidado('DADOS FAMILIARES - Pais das Crianças (1os)');}
    }
    if($("#txtNecessidadeBasica").val() == '') {return naoValidado('DADOS FAMILIARES - Maior necessidade básica');}
    if($("#txtUbsAcessa").val() == '') {return naoValidado('DADOS FAMILIARES - UBS que acessa');}
    if($("#txtQtdePessoasMoram").val() == '') {return naoValidado('DADOS FAMILIARES - Moram na residência (Qtde)');}
    if($("#txtAtendMedico").val() == '') {return naoValidado('DADOS FAMILIARES - Atendimento médico especializado');}

    if($("#txtObjetivo").val() == '') {return naoValidado('ASSISTÊNCIA - Objetivo do Cadastro');}
    if($("#txtComentario").val() == '') {return naoValidado('ASSISTÊNCIA - Comentários');}

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
            alert(data);
            alert('Incluído com sucesso');
            //limparCamposFichaCadastral();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert("Erro: " + xhr.status + " - " + thrownError);
        }
    });
}

function limparCamposFichaCadastral() {
    // dados pessoais
    $("#txtNome").val('');
    $("#txtDtNascimento").val('');
    $("#txtRg").val('');
    $("#txtCPF").val('');
    document.getElementById('selNaturalidade').value = 'SP';
    document.getElementById('selEstadoCivil').value = 1;
    document.getElementById('selEscolaridade').value = 1;
    document.getElementById('selTrabalha').value = 'S';
    document.getElementById('selTipoTrabalho').value = 1;
    $("#txtProfissao").val('');
    $("#txtEmail").val('');
    $("#txtFacebook").val('');
    document.getElementById('selReligiao').value = 1;
    document.getElementById('selFrequenta').value = 'N';
    $("#txtProblemaEspirita").val('');

    // dados endereço
    $("#txtEndereco").val('');
    $("#txtNumero").val('');
    $("#txtComplemento").val('');
    $("#txtPtReferencia").val('');
    $("#txtBairro").val('');
    $("#txtCidade").val('');
    $("#txtCep").val('');
    $("#txtTel1").val('');
    $("#txtTel2").val('');
    document.getElementById('selTipoResidencia').value = 1;
    document.getElementById('selTipoConstrucao').value = 1;
    document.getElementById('selSituacaoResidencia').value = 1;
    $("#txtNumComodos").val('');
    document.getElementById('selRenda').value = 1;
    document.getElementById('selOutrasRenda').value = 1;
    $("#txtDeOnde").val('');
    document.getElementById('selPossuiVeiculo').value = 1;

    // dados familiares
    document.getElementById('selQtdeFilhos').value = 0;
    document.getElementById('selTodosUnicoPai').value = 1;
    $("#txtNomePai1").val('');
    $("#txtNomePai2").val('');
    $("#txtNecessidadeBasica").val('');
    document.getElementById('selCorUbs').value = 1;
    $("#txtUbsAcessa").val('');
    $("#txtQtdePessoasMoram").val('');
    $("#txtAtendMedico").val('');

    //Dados Assistência
    $("#txtObjetivo").val('');
    document.getElementById('selVisita').value = 'S';
    document.getElementById('selAcompanhamento').value = 'S';
    $("#txtComentario").val('');
}

//************************* END CADASTRO ******************************************
//************************* BEGIN CONSULTA GERAL ******************************************

function consulta_geral() {

    var campos =  "operacao=consultar";
    // dados pessoais
    campos += "&txtNome=" + $("#txtNome").val();
    campos += "&txtCPF=" + $("#txtCPF").val();
    campos += "&selNaturalidade=" + document.getElementById('selNaturalidade').value;
    campos += "&selEscolaridade=" + document.getElementById('selEscolaridade').value;
    campos += "&selReligiao=" + document.getElementById('selReligiao').value;

    // dados endereço
    campos += "&txtCidade=" + $("#txtCidade").val();
    campos += "&selRenda=" + document.getElementById('selRenda').value;
    campos += "&selOutrasRenda=" + document.getElementById('selOutrasRenda').value;

    // dados familiares
    campos += "&txtNecessidadeBasica=" + $("#txtNecessidadeBasica").val();
    campos += "&selCorUbs=" + document.getElementById('selCorUbs').value;
    campos += "&txtUbsAcessa=" + $("#txtUbsAcessa").val();
    campos += "&txtQtdePessoasMoram=" + $("#txtQtdePessoasMoram").val();

    //Dados Assistência
    campos += "&selVisita=" + document.getElementById('selVisita').value;
    campos += "&selAcompanhamento=" + document.getElementById('selAcompanhamento').value;

    var elemento = document.getElementById('conteudoGrid');

    $.ajax({
        type: "POST",
        url: 'consulta_geral.php',
        data: campos,
        success: function (data) {
            elemento.innerHTML = data;
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert("Erro: " + xhr.status + " - " + thrownError);
        }
    });
}

//************************* END CONSULTA GERAL ********************************************
//************************* BEGIN LOGIN******************************************
function logar() {
    var campos = "txtLogin=" + $("#txtLogin").val();
    campos += "&pass=" + $("#pass").val();

    $.ajax({
        type: "POST",
        url: 'autentica.php',
        data: campos,
        success: function (data) {
               if(data == 'sucess') {
                   $(window.document.location).attr('href','');
               } else {
                   alert('Login ou senha inválidos');
               }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert("Erro: " + xhr.status + " - " + thrownError);
        }
    });
}
//************************* END LOGIN******************************************
//************************* BEGIN AUXILIARES******************************************
function formataData(dataParaFormatar) {
    var dataSplit = dataParaFormatar.split("-");
    return dataSplit[2] + "/" + dataSplit[1] + "/" + dataSplit[0][2]+dataSplit[0][3];
}
//************************* END AUXILIARES******************************************