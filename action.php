<?php

require_once 'vendor/autoload.php';

use App\classes\FileUpload;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    } elseif ($_GET['page'] == 'file-upload')
    {
        include "pages/fileUpload.php";
    }

}

elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_POST, $_FILES);
    $message = $fileUpload->index();
    include "pages/fileUpload.php";
}