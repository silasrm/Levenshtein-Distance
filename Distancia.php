<?php

/*
    Classe Distancia. Calcula o Gráu de Similaridade entre duas strings, podendo ignorar ou não 
    a capitalização das letras, retornando um float de 0 a 100
    Copyright (C) 2010  Silas Ribas Martins

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


    /**
     * Calcula o Gráu de Similaridade entre duas strings, podendo ignorar ou não a capitalização das letras, retornando um float de 0 a 100
     * 
     * @name Distancia
     * @version 0.1
     * @author Silas Ribas Martins < silasrm@gmail.com >
     * @example Distancia::grauSimilaridade( 'João', 'JOÃO', false );
     */
    class Distancia
    {   
        /**
         * Retorna o grau de similaridade entre duas strings retornando em porcentagem
         * @param string $str1
         * @param string $str2
         * @param boolean|null $ignorecase coloca todas strings em minuscula antes de calcular
         * @return float 0-100
         */
        public static function grauSimilaridade( $str1, $str2, $ignorecase = true )
        {
            if( empty( $str1 ) || empty( $str2 ) )
                throw new InvalidArgumentException( 'Não é permitido string vazia.' );
                
            if( !is_string( $str1 ) || !is_string( $str2 ) )
                throw new InvalidArgumentException( 'Os parâmetros devem ser strings.' );
            
            if( $ignorecase )
            {
                $str1 = strtolower( $str1 );
                $str2 = strtolower( $str2 );
            }
        
            $distancia = levenshtein( $str1, $str2 );
            
            $grau = 1 - ( $distancia / strlen( $str1 ) );
            
            return (float)( $grau * 100 );
        }
    }

?>
