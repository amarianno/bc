<div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>

    <table style="width: 100%" border="0">
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Dados Pessoais</a></li>
                        <li><a href="#tabs-2">Dados Residênciais</a></li>
                        <li><a href="#tabs-3">Dados Familiares</a></li>
                        <li><a href="#tabs-4">Composição Familiar</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p>{include file="dados_pessoais.tpl"}</p>
                    </div>
                    <div id="tabs-2">
                        <p>{include file="dados_endereco.tpl"}</p>
                    </div>
                    <div id="tabs-3">
                        <p>Cuidado com a Lingua dela.</p>
                        <p>Muuuuuuuuuuito cuidado com a lingua dela.</p>
                    </div>
                    <div id="tabs-4">
                        <p>Composição Familiar</p>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</div>
