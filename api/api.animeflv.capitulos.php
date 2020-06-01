<?php 
    //https://animeflv.net/ver/houkago-teibou-nisshi-1

    if(isset($_POST['link'])){
        $link = $_POST['link'];

        $ch =   curl_init();
                curl_setopt($ch, CURLOPT_URL, $link);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = curl_exec($ch);

        if(preg_match_all('/"server":"fembed","title":"Fembed","allow_mobile":true,"code":"(.*)"/', $resultado, $matches)){
            $explode = explode('"', $matches[1][0]);

            $respuesta = str_replace("\/", "/", $explode[0]);
        }
    }
?>