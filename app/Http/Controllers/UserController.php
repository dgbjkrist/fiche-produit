<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Customer;
// use App\User;
use App\Name;
use App\formula;
USE App\Product;
use DB;

class UserController extends Controller
{
    //
    public function postSignup(Request $request) {
    	// 

	  // $this->validate($request, [
	  //     'dommagescouverts' => 'required',
	  //     'garantieofferte'=>'required',
	  //     'moyendepreuve'=>'required',
	  // ]);

	  

	 //  // $dob1 = $request->month.'-'.$request->day.'-'.$request->year;

	 //  // $date1 = strtotime($dob1);

	 //  // $date2 = date('m-d-Y',$date1);

	 //  // $user = new User();
	 //  // $user->email = $request->email;
	 //  // $user->password = bcrypt($request->password);
	 //  // $user->save();

	  // $name = new Name([
	  // 	'dommages_couverts'=>$request->dommagescouverts1,
	  // 	'garantie_offerte'=>$request->garantieofferte1,
	  // 	'moyen_preuve'=>$request->moyendepreuve1,
	  // ]);

	 //  $count = count($request('dommagescouverts'));
		// for ($i=1; $i<$count; $i++){
		// 	$data[] = array(
		// 		'dommages_couverts'=>request('dommagescouverts')[$i],
		// 		'garantie_offerte'=>request('garantieofferte')[$i],
		// 		'moyen_preuve'=>request('moyendepreuve')[$i],
		// 		// 'product_id'=>$product->id[$i],dommages_couvertsgarantie_offertemoyen_preuve
		// 	);
		// }
		// DB::table(names) -> insert($data);

		// $request->validate([
  //           'nomproduit'=>'required',
  //           'cible'=>'required',
  //           'periodedecarence'=>'required',
  //           'primeannuelle'=>'required',
  //           'dommagescouverts'=>'required',
  //           'garantieofferte'=>'required',
  //           'moyendepreuve'=>'required',
  //           'period'=>'required',
  //           'prix'=>'required',
		// ]);

		$product = new Product([
			'nom_produit'=>request('nomproduit'),
			'cible'=>request('cible'),
			'prime_annuelle'=>request('primeannuelle'),
			'periode_carence'=>request('periodedecarence'),
		]);
		$product->save();

		$count = count(request('dommagescouverts'));
		$data = [];
		for ($i=1; $i<=$count; $i++){
			$data[] = array(
				'dommages_couverts'=>$request->dommagescouverts[$i],
				'garantie_offerte'=>$request->garantieofferte[$i],
				'moyen_preuve'=>$request->moyendepreuve[$i],
				'product_id'=>$product->id,
			);
		}
		DB::table('names') -> insert($data);

		// dommagescouverts_garantieofferte_moyendepreuve

	  // $name->save();

		$countfrequence = count(request('period'));
		$datafrequence = [];
		for ($j=1; $j<=$countfrequence; $j++){
			$datafrequence[] = array(
				'period'=>$request->period[$j],
				'price'=>$request->price[$j],
				'product_id'=>$product->id,

		// 		'product_id'=>$product->id[$i],
			);
		}
		DB::table('formulas') -> insert($datafrequence);

	 //  // $customer = new Customer();
	 //  // $customer->user_id = $user->user_id;
	 //  // $customer->fname = $request->fname;
	 //  // $customer->lname = $request->lname;
	 //  // $customer->mname = $request->mname;
	 //  // $customer->contact_no = $request->contactnum;
	 //  // $customer->gender = $request->gender;
	 //  // $customer->birthdate = $date2;
	 //  // $customer->save();

	  return back();
	 //  // return redirect('/');
	 //  // return redirect('user_layouts/sign');
	 //  // return redirect()->route('signup');
	}
}