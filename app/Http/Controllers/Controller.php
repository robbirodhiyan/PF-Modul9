<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Memastikan ada berkas yang diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Lakukan apa yang Anda perlukan dengan berkas yang diunggah
            // misalnya menyimpannya di penyimpanan yang tepat atau memprosesnya

            return "File berhasil diunggah.";
        }

        return "Tidak ada berkas yang diunggah.";
    }
}
