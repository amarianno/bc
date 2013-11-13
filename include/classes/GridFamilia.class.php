<?php


class GridFamilia {


    public static function montaGridAtestado($listaFamilias) {

        $cor = false;
        $htmlRetorno = "";

        if(count($listaFamilias) > 0) {
            $htmlRetorno .= count($listaFamilias)." famílias atendem aos dados da consulta";
        }
        $htmlRetorno .= "<div class='datagrid'>";
        $htmlRetorno .= "<table id='mainDeck'>";
        $htmlRetorno .= "<thead>";
        $htmlRetorno .= "   <tr>";
        $htmlRetorno .= "       <th>Nome</th>";
        $htmlRetorno .= "       <th>CPF</th>";
        $htmlRetorno .= "       <th>Cidade</th>";
        $htmlRetorno .= "       <th>Necessidade Báscia</th>";
        $htmlRetorno .= "       <th>Ubs que Acessa</th>";
        $htmlRetorno .= "   </tr>";
        $htmlRetorno .= "</thead>";
        $htmlRetorno .= "<tbody>";

        if(count($listaFamilias) > 0) {
            foreach ($listaFamilias as $familia) {

                $classe = ($cor = !$cor) ? 'normal' : 'alt';
                $htmlRetorno .= "<tr class='" . $classe . "'>";
                $htmlRetorno .= "   <td>" . $familia->nome . "</td>";
                $htmlRetorno .= "   <td>" . $familia->cpf. "</td>";
                $htmlRetorno .= "   <td>" . $familia->cidade . "</td>";
                $htmlRetorno .= "   <td>" . $familia->necessidadeBasica . "</td>";
                $htmlRetorno .= "   <td>" . $familia->ubsAcessa . "</td>";
                $htmlRetorno .= '</tr>';
            }
        } else {
            $htmlRetorno .= "   <tr class='conteudo'>";
            $htmlRetorno .= "       <td class='semCartas' colspan='5'>Nenhuma família atende aos dados da consulta</td>";
            $htmlRetorno .= "   </tr>";
        }

        $htmlRetorno .= "</tbody>";
        $htmlRetorno .= "</table>";
        $htmlRetorno .= "</div>";

        return $htmlRetorno;

    }


}

?>
