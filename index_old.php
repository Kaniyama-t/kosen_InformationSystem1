<html>
    <head>
        <title>情シス1 授業課題デプロイ場所</title>
    </head>
    <h1>情シス1 授業課題デプロイ場所</h1>
    <hr />
    <h3>Github Repository</h3>
        <h4>Kaniyama-t/SchoolInfoSys1</h4>
        最終更新のアップロード状況：<a href="https://github.com/Kaniyama-t/SchoolInfoSys1/"><img alt=".github/workflows/main.yml" src="https://github.com/Kaniyama-t/SchoolInfoSys1/workflows/CI/badge.svg?<?php echo date("YmdHis");?>" /></a>
    <hr />
    <h3>ファイル一覧</h3>
    <?php
        $dir = "./";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {
        
            if (is_file($file)) {
                print("<a href=\"./".substr($file,2)."\">".substr($file,2)."</a>");
                echo nl2br("\n");
            }
        }
    ?>
</html>