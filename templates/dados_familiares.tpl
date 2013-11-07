<table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Quantos filhos
        </td>
        <td>
            <select id="selQtdeFilhos" name="selQtdeFilhos" tabindex="1" style="width: 250px;" onchange="semFilhos()">
                <option value="0" selected="selected">
                    0
                </option>
                <option value="1">
                    1
                </option>
                <option value="2">
                    2
                </option>
                <option value="3">
                    3
                </option>
                <option value="4">
                    4
                </option>
                <option value="5">
                    5
                </option>
                <option value="6">
                    6
                </option>
                <option value="7">
                    7
                </option>
                <option value="8">
                    8
                </option>
                <option value="9">
                    9
                </option>
                <option value="10">
                    10 ou mais
                </option>
            </select>
        </td>
        <td>
            Todos de um único pai
        </td>
        <td>
            <select id="selTodosUnicoPai" name="selTodosUnicoPai" tabindex="2" style="width: 250px;">
                <option value="" selected="selected">
                    ---
                </option>
                <option value="1">
                    Sim
                </option>
                <option value="2">
                    Não
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Pais das Crianças (1os)
        </td>
        <td colspan="3">
            <input id="txtNomePai1" name="txtNomePai1" type="text" tabindex="3" disabled="true" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Pais das Crianças (2os)
        </td>
        <td colspan="3">
            <input id="txtNomePai2" name="txtNomePai2" type="text" tabindex="4" disabled="true" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Maior necessidade básica
        </td>
        <td>
            <input id="txtNecessidadeBasica" name="txtNecessidadeBasica" type="text" tabindex="5"/>
        </td>
        <td>
            Cor de Atendimento da UBS
        </td>
        <td>
            <select id="selCorUbs" name="selCorUbs" tabindex="6" style="width: 250px;">
                <option value="1" selected="selected">
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
            <input id="txtUbsAcessa" name="txtUbsAcessa" type="text" tabindex="7"/>
        </td>
        <td>
            Moram na residência (Qtde)
        </td>
        <td>
            <input id="txtQtdePessoasMoram" name="txtQtdePessoasMoram" type="text" tabindex="8"/>
        </td>
    </tr>
    <tr>
        <td>
            Atendimento médico especializado
        </td>
        <td colspan="3">
            <input id="txtAtendMedico" name="txtAtendMedico" type="text" tabindex="9" style="width: 100%"/>
        </td>
    </tr>
</table>