<?php 

require __DIR__."/vendor/autoload.php";
require __DIR__."/config.php";

use Spatie\Dropbox\Client as DropboxClient;

new class 
{
    function __construct()
    {
        try 
        {
            $obDropboxClient = new DropboxClient(TOKEN);

            // cria diretorio
            // $obDropboxClient->createFolder("/tecty2");

            // upload de arquivo
            // $obDropboxClient->upload("/tecty/test.txt", file_get_contents(__DIR__. "/upload/test.txt"), "add");

            // move conteudos ou pastas
            // $obDropboxClient->move("/tecty/test.txt", "/tecty2/test.txt");

            // lista pasta
            // $list = $obDropboxClient->listFolder("/tecty");
            // print_r($list);

            // link temporario
            $link = $obDropboxClient->getTemporaryLink("/tecty/imagem.jpg");
            print_r($link);
        }catch(Exception $ex)
        {
            echo json_encode([
                "status"   => 500,
                "response" => $ex->getMessage()
            ]);
        }

    }
};