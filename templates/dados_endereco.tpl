<table border="0" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td colspan="1">
            Endereço
        </td>
        <td colspan="3">
            <input id="txtEndereco" name="txtEndereco" type="text" tabindex="1" style="width: 664px"/>
        </td>
    </tr>
    <tr>
        <td>
            Número
        </td>
        <td>
            <input id="txtNumero" name="txtNumero" type="text" tabindex="2"/>
        </td>
        <td>
            Complemento
        </td>
        <td>
            <input id="txtComplemento" name="txtComplemento" type="text" tabindex="3" />
        </td>
    </tr>
    <tr>
        <td>
            Ponto de Referência
        </td>
        <td>
            <input id="txtPtReferencia" name="txtPtReferencia" type="text" tabindex="4"/>
        </td>
        <td>
            Bairro
        </td>
        <td>
            <input id="txtBairro" name="txtBairro" type="text" tabindex="5" />
        </td>
    </tr>
    <tr>
        <td>
            Cidade
        </td>
        <td>
            <input id="txtCidade" name="txtCidade" type="text" tabindex="6"/>
        </td>
        <td>
            CEP
        </td>
        <td>
            <input id="txtCep" name="txtCep" type="text" tabindex="7" />
        </td>
    </tr>
    <tr>
        <td>
            Telefone 1
        </td>
        <td>
            <input id="txtTel1" name="txtTel1" type="text" tabindex="8"/>
        </td>
        <td>
            Telefone 2
        </td>
        <td>
            <input id="txtTel2" name="txtTel2" type="text" tabindex="9" />
        </td>
    </tr>
    <tr>
        <td>
            Residência
        </td>
        <td>
            <select id="selTipoResidencia" name="selTipoResidencia" tabindex="10" style="width: 250px;">
                <option value="1" selected="selected">
                    Própria
                </option>
                <option value="2">
                    Invasão
                </option>
                <option value="3">
                    Alugada
                </option>
                <option value="4">
                    Aluguel Social
                </option>
                <option value="5">
                    Morador de rua
                </option>
            </select>
        </td>
        <td>
            Tipo de Construção?
        </td>
        <td>
            <select id="selTipoConstrucao" name="selTipoConstrucao" tabindex="11" style="width: 250px;">
                <option value="1" selected="selected">
                    Alvenaria
                </option>
                <option value="2">
                    Madeira
                </option>
                <option value="2">
                    Meio a Meio
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Situação da Residência
        </td>
        <td>
            <select id="selSituacaoResidencia" name="selSituacaoResidencia" tabindex="12" style="width: 250px;">
                <option value="1" selected="selected">
                    Nova
                </option>
                <option value="2">
                    Antiga
                </option>
                <option value="3">
                    Oferece Risco
                </option>
            </select>
        </td>
        <td>
            N de Cômodos
        </td>
        <td>
            <input id="txtNumComodos" name="txtNumComodos" type="text" tabindex="13" />
        </td>
    </tr>
    <tr>
        <td>
            Renda
        </td>
        <td>
            <select id="selRenda" name="selRenda" tabindex="14" style="width: 250px;">
                <option value="1" selected="selected">
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
            <select id="selOutrasRenda" name="selOutrasRenda" tabindex="15" style="width: 250px;" onchange="isCesta()">
                <option value="1" selected="selected">
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
            De onde?
        </td>
        <td>
            <input id="txtDeOnde" name="txtDeOnde" type="text" tabindex="16" disabled="true" />
        </td>
        <td>
            Possui Veículo?
        </td>
        <td>
            <select id="selPossuiVeiculo" name="selPossuiVeiculo" tabindex="17" style="width: 250px;">
                <option value="1" selected="selected">
                    Não
                </option>
                <option value="2">
                    Novo Palio
                </option>
                <option value="3">
                    Palio
                </option>
                <option value="4">
                    Celta
                </option>
                <option value="5">
                    Meriva
                </option>
                <option value="6">
                    Camaro
                </option>
                <option value="7">
                    Golf
                </option>
                <option value="8">
                    Gol
                </option>
                <option value="9">
                    Fiat Uno
                </option>
                <option value="10">
                    Ford Ecosport
                </option>
            </select>
        </td>
    </tr>
</table>