<table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Composição Familiar
        </td>
        <td>
            <input id="txtCompFamiliar" name="txtCompFamiliar" type="text" tabindex="1"/>
        </td>
        <td>
            Grau de Parentesco
        </td>
        <td>
            <select id="selGrauParenstescoAcompFamiliar" name="selGrauParenstescoAcompFamiliar" tabindex="2" style="width: 100%;">
                <option value="1" selected="selected">
                    Filho
                </option>
                <option value="2">
                    Irmão(a)
                </option>
                <option value="3">
                    Pai
                </option>
                <option value="4">
                    Mãe
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Escola
        </td>
        <td>
            <input id="txtEscola" name="txtEscola" type="text" tabindex="3"/>
        </td>
        <td>
            Data de Nascimento
        </td>
        <td>
            <input id="txtDtNascimentoCompFamiliar" name="txtDtNascimentoCompFamiliar" type="text" tabindex="4" />
        </td>
    </tr>
    <tr>
        <td>
            Trabalha
        </td>
        <td>
            <input id="txtTrabalha" name="txtTrabalha" type="text" tabindex="5"/>
        </td>
        <td>
            Renda
        </td>
        <td>
            <input id="txtRenda" name="txtRenda" type="text" tabindex="6" />
        </td>
    </tr>
    <tr>
        <td>
            RG
        </td>
        <td>
            <input id="txtRGAcompFamiliar" name="txtRGAcompFamiliar" type="text" tabindex="7"/>
        </td>
        <td>
            Participa de Qual grupo na casa
        </td>
        <td>
            <input id="txtGrupoCasa" name="txtGrupoCasa" type="text" tabindex="8" />
        </td>
    </tr>
    <tr>
        <td>
            Gestante
        </td>
        <td>
            <select id="selGestante" name="selGestante" tabindex="9" style="width: 100%;">
                <option value="N" selected="selected">
                    Não
                </option>
                <option value="S">
                    Sim
                </option>
            </select>
        </td>
        <td>
            Deficiência
        </td>
        <td>
            <input id="txtDeficiencia" name="txtDeficiencia" type="text" tabindex="10" />
        </td>
    </tr>
    <tr>
        <td>
            Viciação
        </td>
        <td>
            <input id="txtVicio" name="txtVicio" type="text" tabindex="11" />
        </td>
        <td>
            Atendimento Médico Especializado
        </td>
        <td>
            <input id="txtAtendMedicEspec" name="txtAtendMedicEspec" type="text" tabindex="12" />
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <input type="button" value="adicionar" class="bt-03" style="background: #4F92A7" onclick="addComposicaoFamiliar()"/>
        </td>
    </tr>
</table>
<br>
<div id="dados_composicao_familiar"></div>
<script>
    mostrarGrid();
</script>