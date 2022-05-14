<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeControler extends Controller
{
    public function index(){
        $barcodes = Barcode::all();
        return view('barcode',compact('barcodes'));
    }
    public function create(){
        return view('create');
    }
        public function store(Request $request){
      //  return  $request->all();

            $barcode = new Barcode();

            $number = $request->sku;
            $generator = new BarcodeGeneratorPNG();
            $barcode_name = 'data:image/png;base64,' . base64_encode($generator->getBarcode($number, $generator::TYPE_CODE_128));

            $barcode->name = $request->name;
            $barcode->barcode = $barcode_name;
            $barcode->sku = $request->sku;
            $barcode->save();
            return redirect('/');

    }




}
