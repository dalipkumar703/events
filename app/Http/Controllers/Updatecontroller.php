<?php 

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
use App\Models\Email;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UpdateController extends Controller
{
	public function update(Request $request)
	{
		
		$this->validate($request,[
		'email' => 'required|unique:emails',
		]);
		Email::create([
		'email' => $request->input('email'),
		]);
		return redirect()->route('welcome')->with('info','thanks,Now you will get every event update');
	}
}