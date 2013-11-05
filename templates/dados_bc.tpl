<table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Objetivo do Cadastro
        </td>
        <td colspan="3">
            <input id="txtObjetivo" name="txtObjetivo" type="text" tabindex="1" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Deseja visita do Grupo?
        </td>
        <td>
            <select id="selVisita" name="selVisita" tabindex="2" style="width: 100%;">
                <option value="S" selected="selected">
                    Sim
                </option>
                <option value="N">
                    Não
                </option>
            </select>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            Deseja Acompanhamento?
        </td>
        <td>
            <select id="selAcompanhamento" name="selAcompanhamento" tabindex="3" style="width: 100%;">
                <option value="S" selected="selected">
                    Sim
                </option>
                <option value="N">
                    Não
                </option>
            </select>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            Comentários
        </td>
        <td colspan="3">
            <textarea rows="9" cols="30" tabindex="4" id="txtComentario" name="txtComentario" ></textarea>
        </td>
    </tr>
    <tr>
        </td>
            <br>
        <td>
        </td>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <br>
            <input type="button" value="CADASTRAR FAMÍLIA" class="bt-03" style="background: #4F92A7; cursor: hand" onclick="cadastrar()"/>
        </td>
    </tr>
</table>