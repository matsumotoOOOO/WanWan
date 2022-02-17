<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dog;
use App\Check;
use App\Check_point;
use App\Check_type;
use Carbon\Carbon;
use Auth;

class DogController extends Controller
{
      public function register()
  {
      return view('admin.dog.register');
  }
  
  public function register_ok(Request $request)
  {
      $this->validate($request, Dog::$rules);
      
      $dog = new Dog();
      
      $dog->user_id = Auth::id();
      $dog->dog_name = $request->dog_name;
      $dog->dog_kind = $request->dog_kind;
      
      $dog->save();
      
      return view('admin.dog.register_ok', ['dog' => $dog]);
  }
  
    public function select(Request $request)
  {
      $items = Check::where('user_id',Auth::id())->
               latest()->
               get();

      return view('admin.dog.select',['items' => $items]);
  }

    public function health(Request $request)
  {
      $dog = Dog::find($request->dog_id);

      return view('admin.dog.health',['dog' => $dog] );
  }
  
  public function check(Request $request)
  {
      $validated = $request->validate(['health' => 'required'],
      ['health.required' => '当てはまる項目がない時は【当てはまるものはない】を選択してください。']);

      $check =new Check();
      
      $check->user_id = Auth::id();
      $check->dog_id = $request->dog_id;
      
      if ($request->has('health')) {
        $health = $request->health;
        $check->health = implode(" , ",$health);
      }
      
      /*      if for でも記述できます
      $strHealth = "";
      
      if ($request->has('health')) {
          $health = $request->health;
          for($i = 0; $i < count($health); $i++) {
              $strHealth .= $health[$i];
              if($i < count($health) - 1) {
                  $strHealth .= ",";
              }
          }
      }
      $check->health = $strHealth;
      */      

      $check->registerd_at = Carbon::now();
      $check->nextcheck_at = Carbon::now()->addWeek(2);
      
      $check->save();
      
      //check_points_contentsが$healthと同じレコードを取得
      $results = Check_point::whereIn('check_points_contents',$health)->get();
    
      return view('admin.dog.result',['results' => $results, 'check' => $check,]);
  }
  
    public function result(Request $request)
  {
      $check = Check::find($request->dog_id);

      return view('admin.dog.result',['check' => $check]);
  }

  
   public function all_history(Request $request)
  {
     
      $dogs = Dog::where('user_id',Auth::id())->get();
      $checks = Check::where('user_id',Auth::id())->get();

      return view('admin.dog.all_history',['dogs' => $dogs,'checks' => $checks]);
  }
  
   public function each_history(Request $request)
  {
      $dog = Dog::find($request->dog_id);
      $checks = Check::where('dog_id',$request->dog_id)->get();
    
      return view('admin.dog.each_history',['dog' => $dog ,'checks' => $checks]);
  }

  public function welcome()
  {
      if(Auth::user() == null) {
        return view('welcome');  
      } else {
        return view('home');
      }
  }
  
}
