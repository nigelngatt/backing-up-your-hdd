<?php
define('__CHOOSE_CONSTANT_1__', 'PATH_ORIGEN');
define('__CHOOSE_CONSTANT_2__', 'PATH_BACKUP');
$recurs = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('COPY_PATH_ONE')); 
$recursBP = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('COPY_PATH_TWO'));
echo 'Counting files';usleep(100000);echo '.';usleep(100000);echo '.';usleep(100000);echo '.';usleep(100000);
echo 'Waiting.';echo '.';usleep(1000000);echo '.';usleep(100000);echo '.';usleep(100000);
echo 'loading.';usleep(100000);echo '.';usleep(100000);echo '.';usleep(100000);echo '.';usleep(100000);
foreach($recurs as $_recurs){
    if($_recurs->getFileName()!=='.'){
      if ($_recurs->getFileName()!=='..') {
        $size += $recurs->getSize();
        var_dump(__NIGEL__.DIRECTORY_SEPARATOR.$recurs->getSubPathName());
        /*
            mkdir($recurs->getSubPath()
            if( $recurs->getSize() != $recursBP->getSize() ){}
        */
        copy(__NIGEL__.DIRECTORY_SEPARATOR.$recurs->getSubPathName(), __COPY__ . DIRECTORY_SEPARATOR . $_recurs->getFileName() );
      }
    }
}
?>