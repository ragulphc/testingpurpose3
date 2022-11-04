<?php
    $DEBUG = true;
    
    use AFSDADS_Env\EnvReader;
    
    (new EnvReader(afsdads_dir . '/env/config.env'))->load();
    
    $SFASF = getenv(SFASF); 
$ASFDASFD = getenv(ASFDASFD); 
$ASF = getenv(ASF); 


?>