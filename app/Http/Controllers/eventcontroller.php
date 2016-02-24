<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use DB;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class EventController extends Controller
{
	public function admin()
	{
		return view('admin.login');
	}
	public function search(Request $request)
	{
		$query = $request->input('query');
		
		$events=Event::where(DB::raw("event_name"),'LIKE',"%{$query}%")
	             ->get();
	 return view('search.result')->with('events',$events);			 
	

	}
	public function index()
	{
		return view('welcome');
	}
	public function pageevent()
	{
		return view('events.event');
	}
	public function postevent(Request $request)
	{
		$this->validate($request,[
		'eventname' => 'required',
		'link' => 'required',
		'num' => 'required|numeric',
		'file' => 'required|mimes:jpeg,png,gif',
		'name' => 'required',
		'time' => 'required',
		'summary' => 'required',
		]);
		if(Input::hasfile('file'))
		{
			$file=Input::file('file');
			$file->move('uploads',$file->getClientOriginalName());
		Event::create([
		'event_name' => $request->input('eventname'),
		'event_link' => $request->input('link'),
		'number' => $request->input('num'),
		'filepath' => $file->getClientOriginalName(),
		'name' => $request->input('name'),
		'time' => $request->input('time'),
		'summary' => $request->input('summary'),
		'hour' => $request->input('hour'),
		'confirmed' => '0',
		]);	
		}
		return redirect()->route('home')->with('info','It\'s posted. Want to add more');
	}
	public function login(Request $request)
	{
		   if($request->input('password')==123456)
		   {
			   $events=Event::where('confirmed','0')->get();
			return view('admin.member')->with('events',$events);   
		   }
		else
			return redirect()->back()->with('info','wrong password');
	
			
	}
	public function delete($id)
	{
		$name=Event::where('id',$id);
		Event::where('id',$id)->delete();
		return redirect()->back()->with('info',"deleted ");
	}
	public function post($id)
	{
		DB::table('events')
				          ->where('id',$id)
					     ->update(['confirmed' => '1']);
			return redirect()->back()->with('info','posted');
	}
	public function showevent()
	{
		$events = Event::where('confirmed','1')->get();
		return view('events.showevents')->with('events',$events);
	}
}