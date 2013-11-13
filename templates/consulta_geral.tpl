{include file="header.tpl" title="Cadastro de Famílias Assistidas pelo Bom Caminho" }
{include file="menu_top.tpl"}
<div class="centerDiv">
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>

<br>
<div id="tabs">
<ul>
    <li><a href="#tabs-1">Consulta Geral</a></li>
</ul>
<div id="tabs-1">
    <form action="#" onsubmit="consulta_geral(); return false;">

        <table width="100%" align="center" cellspacing="4" cellpadding="0">
        <tr>
            <td>
                Nome
            </td>
            <td>
                <input id="txtNome" name="txtNome" required="true" type="text" tabindex="1" style="width: 93%"/>
            </td>
            <td>
                CPF
            </td>
            <td>
                <input id="txtCPF" name="txtCPF" required="true" type="text" tabindex="3" style="width: 93%"/>
            </td>
        </tr>
        <tr>
            <td>
                Naturalidade
            </td>
            <td>
                <select id="selNaturalidade" name="selNaturalidade" tabindex="4" style="width: 100%;">
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
                Escolaridade
            </td>
            <td>
                <select id="selEscolaridade" name="selEscolaridade" tabindex="6" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="1">
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
        </tr>
        <tr>
            <td>
                Religião
            </td>
            <td>
                <select id="selReligiao" name="selReligiao" tabindex="12" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="1">
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
                Cidade
            </td>
            <td>
                <input id="txtCidade" name="txtCidade" required="true" type="text" tabindex="6" style="width: 93%"/>
            </td>
            <tr>
                <td>
                    Renda
                </td>
                <td>
                    <select id="selRenda" name="selRenda" tabindex="14" style="width: 100%;">
                        <option value="" selected="selected">

                        </option>
                        <option value="1">
                            Própria
                        </option>
                        <option value="2">
                            Renda Conjugê
                        </option>
                        <option value="3">
                            Bolsa Família
                        </option>
                        <option value="4">
                            Renda Mínima
                        </option>
                    </select>
                </td>
            <td>
                Outras Rendas
            </td>
            <td>
                <select id="selOutrasRenda" name="selOutrasRenda" tabindex="15" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="1">
                        Nenhuma
                    </option>
                    <option value="2">
                        Aposentadoria
                    </option>
                    <option value="3">
                        Despesas
                    </option>
                    <option value="4">
                        Ganha Cesta
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Maior necessidade básica
            </td>
            <td>
                <input id="txtNecessidadeBasica" name="txtNecessidadeBasica" type="text" tabindex="5" style="width: 93%"/>
            </td>
            <td>
                Cor de Atendimento da UBS
            </td>
            <td>
                <select id="selCorUbs" name="selCorUbs" tabindex="6" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="1">
                        <span style="color: #0000ff">Azul</span>
                    </option>
                    <option value="2">
                        <span style="color: red">Vermelho</span>
                    </option>
                    <option value="3">
                        <span style="color: #008000">Verde</span>
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                UBS que acessa
            </td>
            <td>
                <input id="txtUbsAcessa" name="txtUbsAcessa" type="text" tabindex="7" style="width: 93%"/>
            </td>
            <td>
                Moram na residência (Qtde)
            </td>
            <td>
                <input id="txtQtdePessoasMoram" name="txtQtdePessoasMoram" type="text" tabindex="8" style="width: 93%"/>
            </td>
        </tr>
        <tr>
            <td>
                Deseja visita do Grupo?
            </td>
            <td>
                <select id="selVisita" name="selVisita" tabindex="2" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="S">
                        Sim
                    </option>
                    <option value="N">
                        Não
                    </option>
                </select>
            </td>
            <td>
                Deseja Acompanhamento?
            </td>
            <td>
                <select id="selAcompanhamento" name="selAcompanhamento" tabindex="3" style="width: 100%;">
                    <option value="" selected="selected">

                    </option>
                    <option value="S">
                        Sim
                    </option>
                    <option value="N">
                        Não
                    </option>
                </select>
            </td>
        </tr>
        </table>
        <input type="button" tabindex="4" class="bt-03" style="background: #4F92A7; cursor: hand" value="Consultar" onclick="consulta_geral()"/>
    </form>
</div>
</div>
</div>
<span id="conteudoGrid"></span>
