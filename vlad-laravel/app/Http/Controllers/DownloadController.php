<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function getDownload_1()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/documents/test_document.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'Калькуляция3333.pdf', $headers);
    }

public function getDownload_2()
{
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "/documents/test_document.pdf";

    $headers = [
        'Content-Type' => 'application/pdf',
    ];

    return response()->download($file, 'Калькуляция33333.pdf', $headers);
}
}
