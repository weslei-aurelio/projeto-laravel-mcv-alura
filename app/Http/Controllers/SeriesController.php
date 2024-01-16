<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //return response('', 302, ['Location' => 'https://google.com']);
        //return redirect('https://google.com');

        $series = [
            'A Grande Ilusão',
            'Berlim',
            'Minha Vida com a Família Walter',
            'Reacher',
            'De Volta às Raízes',
            'Beleza Verdadeira',
            'The Act',
            'Explosivos'
        ];
        
        $html = '<ul>';

            foreach($series as $serie){
                $html .= "<li>$serie</li>";
            }

        $html .= '</ul>';

        return $html;
    }   
}
