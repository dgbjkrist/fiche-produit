<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

	public function saveproduct(Request $request) {
		$request->validate([
            'nomproduit'=>'required',
            'cible'=>'required',
            'periodedecarence'=>'required',
            'primeannuelle'=>'required',
            'dommagescouverts'=>'required',
            'garantieofferte'=>'required',
            'moyendepreuve'=>'required',
            'period'=>'required',
            'prix'=>'required',
		]);

		$product = new Product([
			'cible'=>request('cible'),
			'prime_annuelle'=>request('primeannuelle'),
			'periode_carence'=>request('periodedecarence'),
		]);
		$product->save();

		return redirect('/');

		// $count = count($request('dommagescouverts'));
		// for ($i=0; $i<$count; $i++){
		// 	$data[] = array(
		// 		'dommages_couverts'=>request('dommagescouverts')[$i],
		// 		'guarantee_offerte'=>request('garantieofferte')[$i],
		// 		'moyen_preuve'=>request('moyendepreuve')[$i],
		// 		'product_id'=>$product->id[$i],
		// 	);
		// }
		// DB::table(guarantees) -> insert($data);

		// $countt = count($request('period'));
		// for ($i=0; $i<$countt; $i++){
		// 	$dataa[] = array(
		// 		'period'=>request('period')[$i],
		// 		'price'=>request('prix')[$i],
		// 		'product_id'=>$product->id[$i],
		// 	);
		// }
		// DB::table(formulas) -> insert($dataa);

}
