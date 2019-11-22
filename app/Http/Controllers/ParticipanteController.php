<?php

namespace App\Http\Controllers;

use App\Participante;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ParticipanteController extends Controller {

    public function index(Request $request) {
        $participante = null;
        $participante = \Session::get('participante');
        return view("welcome")->with("participante", $participante);
    }

    public function postIndex(Request $request) {
        $success       = null;
        $errors        = null;
        $identificador = $request->identificador;
        var_dump($identificador);

        $participante = Participante::select()->where("identificador", $identificador)->first();

        return redirect()->route("index")->withSuccess($success)->withErrors($errors)->with("participante", $participante);
    }


    public function getAvatar(Participante $participante) {
        $avatar = $this->getFotoStorage($participante);

        return $avatar;
    }

    const userPng = 'user.png';
    const disk = 'public';

    private function getFotoStorage(Participante $participante, $size = 300) {
        $filename = self::userPng;


        if (isset($participante->foto)) {
            $filename = $participante->foto;

            $exists = \Storage::disk(self::disk)->exists($filename);
            if (!$exists) {
                $filename = self::userPng;
            }
        }

        if ($filename == self::userPng) {
            return response()->redirectTo(asset('images/user.png'));
        }

        return Image::make(\Storage::disk(self::disk)->get($filename))->resize($size, $size)->response('png');
    }
}
