<?php
include "config.php";

class SpecialDocbook_Language extends SpecialPage{

    public function __construct(){
        parent::__construct('Docbook_Language');
    }
    public function execute($sub){
        global $wgOut;
        global $wgUser;
        global $wgServer;
        global $wgScriptPath;
        $dbr=wfGetDB(DB_MASTER);
        $dbw=wfGetDB(DB_SLAVE);
        $wgOut->setPageTitle('All Documents');
        $dir = opendir($_GET['path']);
        while($filename = readdir( $dir))
        {
            $file[] = $filename;
        }
        $wgOut->addHTML("<ul>");
        for($i=0;$i<sizeof($file);$i++)
        {
            if(is_dir($_GET['path']."/".$file[$i]) && $file[$i] !="." && $file[$i] !=".." && $file[$i] !="css" && $file[$i] !="specifications" && $file[$i] !="manuals" && $file[$i] !="ReleaseNotes"){
                $wgOut->addHTML("<li><img src='http://www.clker.com/cliparts/Y/8/k/g/o/u/red-empty-folder-icon.svg' width='2%' /><a href='".$wgServer.$wgScriptPath."/index.php/Special:Docbook_Language?paths=".$_GET['path']."/".$file[$i]."'>".ucfirst($file[$i])."</a></li>");
            }
        }  
        $wgOut->addHTML("</ul>");
        if(isset($_GET['paths'])){
            $dir = opendir($_GET['paths']);
            while($filename = readdir( $dir))
            {
                $file[] = $filename;
            }
        $wgOut->addHTML("<ul>");
        for($i=0;$i<sizeof($file);$i++)
        {
            if(!file_exists($file[$i]) && $file[$i] !="." && $file[$i] !=".."){  
                $wgOut->addHTML("<li><img src='http://1.bp.blogspot.com/-ivx8sPkrN0E/T7oWeBCAwKI/AAAAAAAAAfw/aZoBDKIIB3o/s1600/File.png' width='2%'><a href='".$wgServer.$wgScriptPath."/index.php/Special:Docbook_Document?paths=".$_GET['paths']."/".$file[$i]."&pathtwo=".$_GET['paths']."'>".str_replace(".html"," ",ucfirst($file[$i]))."</a></li>");
        	}
        }
        $wgOut->addHTML("</ul>");
    }
}
}
?>



























