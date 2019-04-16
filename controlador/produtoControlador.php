<?php
    function vizualizar(){
        $Boot = array();
        $Boot["marca"] = "Yezzy";
        $Boot["tamanho"] = "41";
        $Boot["valor"] = "1500";
        
        exibir("produto/vizualizar", $Boot);
         
    }