<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            [
            "url" => "https://pixabay.com/id/photos/es-krim-hidangan-penutup-makanan-1274894/900x300",
            "width" => "900",
            "height" => "300"
            ],
            [
            "url" => "C:\Users\Karen Stefanie Han's\Dropbox\PC\Downloads\3.jpg",
            "width" => "900",
            "height" => "300"
            ],
            [
            "url" => "C:\Users\Karen Stefanie Han's\OneDrive\Pictures\IMG20210107194220.jpg/900x300",
            "width" => "900",
            "height" => "300"
            ]
            ];
            return view('portfolio', compact('carousels'));

    }
}
