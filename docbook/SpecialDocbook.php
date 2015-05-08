<?php

include "config.php";
class SpecialDocbook extends SpecialPage{

    public function __construct() {
         parent::__construct('Docbook');
    }

    public function execute($sub) {
        global $wgOut;
        global $wgUser;
        global $wgServer;
        global $wgScriptPath;
        $dbr = wfGetDB(DB_MASTER);
        $dbw = wfGetDB(DB_SLAVE);
        $wgOut->setPageTitle('BRL-CAD Documentation');
        $dir = opendir(path);
        while($filename = readdir($dir)) {
            $file[] = $filename;
        }
        $wgOut->addHTML("<ul>");
        for($i = 0; $i < sizeof($file); $i++){
            if(is_dir(path."/".$file[$i]) && $file[$i] !="." && $file[$i] !=".." && $file[$i] !="css" && $file[$i] !="specifications" && $file[$i] !="manuals" && $file[$i] !="ReleaseNotes"){
                $wgOut->addHTML("<li><img src='http://www.clker.com/cliparts/Y/8/k/g/o/u/red-empty-folder-icon.svg' width='2%'/><a href='".$wgServer.$wgScriptPath."/index.php/Special:Docbook_Language?path=".path.$file[$i]."'>".ucfirst($file[$i])."</a></li>");
            }
        }
$wgOut->addHTML("</ul>");
}
}
?>



























