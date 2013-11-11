<?php /* Smarty version Smarty-3.1.13, created on 2013-11-11 15:11:54
         compiled from "templates/dados_pessoais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1814781932527445cd6d1eb8-38664828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffbbbf4aa62a28f710dc67104909afffd814f82a' => 
    array (
      0 => 'templates/dados_pessoais.tpl',
      1 => 1384189855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1814781932527445cd6d1eb8-38664828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527445cd6d3c77_40077470',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527445cd6d3c77_40077470')) {function content_527445cd6d3c77_40077470($_smarty_tpl) {?><table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Nome
        </td>
        <td>
            <input id="txtNome" name="txtNome" type="text" tabindex="1"/>
        </td>
        <td>
            Data de Nascimento
        </td>
        <td>
            <input id="txtDtNascimento" name="txtDtNascimento" type="text" tabindex="1" />
        </td>
    </tr>
    <tr>
        <td>
            RG
        </td>
        <td>
            <input id="txtRg" name="txtRg" type="text" tabindex="2"/>
        </td>
        <td>
            CPF
        </td>
        <td>
            <input id="txtCPF" name="txtRg" type="text" tabindex="3"/>
        </td>
    </tr>
    <tr>
        <td>
            Naturalidade
        </td>
        <td>
            <select id="selNaturalidade" name="selNaturalidade" tabindex="4" style="width: 250px;">
                <option value="AC">
                    Acre
                </option>
                <option value="AL">
                    Alagoas
                </option>
                <option value="AP">
                    Amapá
                </option>
                <option value="AM">
                    Amazonas
                </option>
                <option value="BA">
                    Bahia
                </option>
                <option value="CE">
                    Ceará
                </option>
                <option value="DF">
                    Distrito Federal
                </option>
                <option value="ES">
                    Espírito Santo
                </option>
                <option value="GO">
                    Goiás
                </option>
                <option value="MA">
                    Maranhão
                </option>
                <option value="MT">
                    Mato Grosso
                </option>
                <option value="MS">
                    Mato Grosso do Sul
                </option>
                <option value="MG">
                    Minas Gerais
                </option>
                <option value="PA">
                    Pará
                </option>
                <option value="PB">
                    Paraíba
                </option>
                <option value="PR">
                    Paraná
                </option>
                <option value="PE">
                    Pernambuco
                </option>
                <option value="PI">
                    Piauí
                </option>
                <option value="RJ">
                    Rio de Janeiro
                </option>
                <option value="RN">
                    Rio Grande do Norte
                </option>
                <option value="RS">
                    Rio Grande do Sul
                </option>
                <option value="RO">
                    Rondônia
                </option>
                <option value="RR">
                    Roraima
                </option>
                <option value="SC">
                    Santa Catarina
                </option>
                <option value="SP" selected="selected">
                    São Paulo
                </option>
                <option value="SE">
                    Sergipe
                </option>
                <option value="TO">
                    Tocantins
                </option>
            </select>
        </td>
        <td>
            Estado Civil
        </td>
        <td>
            <select id="selEstadoCivil" name="selEstadoCivil" tabindex="5" style="width: 250px;">
                <option value="1" selected="selected">
                    Solteiro
                </option>
                <option value="2">
                    Casado
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Escolaridade
        </td>
        <td>
            <select id="selEscolaridade" name="selEscolaridade" tabindex="6" style="width: 250px;">
                <option value="1" selected="selected">
                    Ensino Médio Incompleto
                </option>
                <option value="2">
                    Ensino Médio Completo
                </option>
                <option value="3">
                    Ensino Superior Incompleto
                </option>
                <option value="4">
                    Ensino Superior Completo
                </option>
                <option value="5">
                    Pós-Graduado
                </option>
                <option value="6">
                    Mestrado
                </option>
                <option value="7">
                    Doutorado
                </option>
            </select>
        </td>
        <td>
            Trabalha?
        </td>
        <td>
            <select id="selTrabalha" name="selTrabalha" tabindex="7" style="width: 250px;" onchange="dadosTrabalho()">
                <option value="S" selected="selected">
                    Sim
                </option>
                <option value="N">
                    Não
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Tipo
        </td>
        <td>
            <select id="selTipoTrabalho" name="selTipoTrabalho" tabindex="8" style="width: 250px;">
                <option value="1" selected="selected">
                    Registrado
                </option>
                <option value="2">
                    Autônomo
                </option>
                <option value="3">
                    Não Trabalha
                </option>
            </select>
        </td>
        <td>
            <span id="profissao"> Profissão </span>
        </td>
        <td>
            <input id="txtProfissao" name="txtProfissao" type="text" tabindex="9"/>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <input id="txtEmail" name="txtEmail" type="text" tabindex="10"/>
        </td>
        <td>
            Facebook
        </td>
        <td>
            <input id="txtFacebook" name="txtFacebook" type="text" tabindex="11" />
        </td>
    </tr>
    <tr>
        <td>
            Religião
        </td>
        <td>
            <select id="selReligiao" name="selReligiao" tabindex="12" style="width: 250px;">
                <option value="1" selected="selected">
                    Nenhuma
                </option>
                <option value="2">
                    Budismo
                </option>
                <option value="3">
                    Cristianismo
                </option>
                <option value="4">
                    Catolicismo
                </option>
                <option value="5">
                    Protestantismo
                </option>
                <option value="6">
                    Testemunhas de Jeová
                </option>
                <option value="7">
                    Espiritismo
                </option>
                <option value="8">
                    Islamismo
                </option>
                <option value="9">
                    Judaísmo
                </option>
                <option value="10">
                    Religiões afro-brasileiras e indígenas
                </option>
            </select>
        </td>
        <td>
            Frequenta?
        </td>
        <td>
            <select id="selFrequenta" name="selFrequenta" tabindex="13" style="width: 250px;">
                <option value="N" selected="selected">
                    Não
                </option>
                <option value="S">
                    Sim
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Tem problema em frequentar casa espírita?
        </td>
        <td colspan="2">
            <input id="txtProblemaEspirita" name="txtProblemaEspirita" type="text" tabindex="14" style="width: 410px"/>
        </td>
    </tr>
</table><?php }} ?>