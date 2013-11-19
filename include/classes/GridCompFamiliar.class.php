<?php

class GridCompFamiliar {

    private static function retornaGrauParentesco($grau) {
        if($grau == '1') {
            return 'Filho';
        } else if($grau == '2') {
            return 'Irmão(a)';
        } else if($grau == '3') {
            return 'Pai';
        } else {
            return 'Mãe';
        }
    }

    public static function gridToHtml($composicaoFamiliar) {

        $cor = false;
        $htmlRetorno = "";

        $htmlRetorno .= "<div class='datagrid'>";
        $htmlRetorno .= "<table id='mainDeck'>";
        $htmlRetorno .= "<thead>";
        $htmlRetorno .= "   <tr>";
        $htmlRetorno .= "       <th></th>";
        $htmlRetorno .= "       <th></th>";
        $htmlRetorno .= "       <th>Nome</th>";
        $htmlRetorno .= "       <th>Grau Parentêsco</th>";
        $htmlRetorno .= "       <th>RG</th>";
        $htmlRetorno .= "       <th>Escola</th>";
        $htmlRetorno .= "       <th>Data de Nascimento</th>";
        $htmlRetorno .= "       <th>Trabalho</th>";
        $htmlRetorno .= "       <th>Grupo na Casa</th>";
        $htmlRetorno .= "       <th></th>";
        $htmlRetorno .= "   </tr>";
        $htmlRetorno .= "</thead>";
        $htmlRetorno .= "<tbody>";

        if(count($composicaoFamiliar) > 0) {
            foreach ($composicaoFamiliar as $compFamiliar) {

                //$compFamiliar = new ComposicaoFamiliar();
                $classe = ($cor = !$cor) ? 'normal' : 'alt';
                $htmlRetorno .= "<tr class='" . $classe . "'>";
                $htmlRetorno .= "   <td>" . "<img src='include/img/search-submit.png' onclick='detalharCompFam(".$compFamiliar->codigo.")' />" . "</td>";
                $htmlRetorno .= "   <td>" . $compFamiliar->codigo . "º</td>";
                $htmlRetorno .= "   <td>" . $compFamiliar->nome . "</td>";
                $htmlRetorno .= "   <td>" . static::retornaGrauParentesco($compFamiliar->grauParentesco) . "</td>";
                $htmlRetorno .= "   <td>" . $compFamiliar->rg . "</td>";
                $htmlRetorno .= "   <td>" . $compFamiliar->escola . "</td>";
                $htmlRetorno .= "   <td>" . $compFamiliar->dataNascimento . "</td>";
                if($compFamiliar->trabalho != '') {
                    $htmlRetorno .= "   <td>" . $compFamiliar->trabalho . "(R$". $compFamiliar->renda .")</td>";
                } else {
                    $htmlRetorno .= "   <td></td>";
                }
                $htmlRetorno .= "   <td>" . $compFamiliar->grupoCasa . "</td>";
                $htmlRetorno .= "   <td>" . "<img src='include/img/icon/delete-icon.png' onclick='excluirCompFam(".$compFamiliar->codigo.")'  />" . "</td>";
                $htmlRetorno .= '</tr>';
            }
        } else {
            $htmlRetorno .= "   <tr class='conteudo'>";
            $htmlRetorno .= "       <td class='semCartas' colspan='5'>Não contém resultados</td>";
            $htmlRetorno .= "   </tr>";
        }

        $htmlRetorno .= "</tbody>";
        $htmlRetorno .= "</table>";

        return $htmlRetorno;

    }

}

?>
