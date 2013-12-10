{include file="header.tpl" title="Cadastro de Famílias Assistidas pelo Bom Caminho" }
{include file="menu_top.tpl"}
<div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <br><br><br><br>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Cadastro de Usuário</a></li>
        </ul>
        <div id="tabs-1">
            <form id="myformcaduser" action="cadusuario.php" method="POST">
                <table style="width: 100%" border="0">
                    <tr>
                        <td>
                            <br>
                            <input type="hidden" id="hidCod" name="hidCod" value="{$codigo}">
                            <input type="hidden" id="operacao" name="operacao" value="{$operacao}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nome
                        </td>
                        <td>
                            <input type="text" name="txtNome" id="txtNome" required value="{$nome}" size="50" onblur="onBlurNome()">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="text" name="txtEmail" id="txtEmail" required value="{$email}" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Senha
                        </td>
                        <td>
                            <input type="password" id="txtSenha" name="txtSenha" required value="" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Perfil
                        </td>
                        <td>
                            {html_options options=$perfil_usuarios selected=$selecionado}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button"
                                   value="Incluir"
                                   class="bt-03" style="background: #4F92A7; cursor: hand; width: 30%"
                                   onclick="validarCadastroUsuario()"/>
                            <input type="button"
                                   value="Limpar Campos"
                                   class="bt-03" style="background: #4F92A7; cursor: hand; width: 30%"
                                   onclick="limparCadastroUsuario()"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                          <span style="color: {$cor}">{$message}</span>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</div>
