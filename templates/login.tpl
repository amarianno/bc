<div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <br><br><br><br>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Login</a></li>
        </ul>
        <div id="tabs-1">
            <form id="myform" action="autentica.php" method="POST">
                <table style="width: 100%" border="0">
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="text" name="txtLogin" id="txtLogin" value="amarianno@gmail.com" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Senha
                        </td>
                        <td>
                            <input type="password" id="txtSenha" name="txtSenha" value="123456" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Entrar" class="bt-03" style="background: #4F92A7; cursor: hand"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                          <span style="color: red">{$message}</span>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</div>
