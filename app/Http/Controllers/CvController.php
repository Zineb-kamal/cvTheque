<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Cv;
use App\Experience;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\cvRequest;
class CvController extends Controller
{
   //Constructeur
   public function _construct()
   {
      $this->middleware('auth');
   }
   public function show($id)
   {
   $cv= Cv::find($id);
   return view('cv.show',['cv'=>$cv]);
   }
	//Lister les Cv
   public function index(){
    //instancie un objet par function cvs il était à User.php (Auth user est authantifié)
    if(Auth::user()->is_admin)
    {
      $listcv=Cv::all();
    }
    else{
    $listcv=Auth::user()->cvs;
    }

    return view('cv.index',['cvs'=>$listcv]);
   }
   public function store(cvRequest $rq){
   	$cv=new Cv();
      $cv->titre=$rq->input('titre');
      $cv->presentation=$rq->input('presentation');
      $cv->user_id=Auth::user()->id;
     //Upload Image
      $cv->image=$rq->file('image')->store('image');
      $cv->save();
     return redirect('cvs')->with('success','le cv à été bien enregistrer');
      
   }
  
   public function create(){
   	return view('cv.create');
   }
   public function update(cvRequest $rq,$id){
   	  $cv=Cv::find($id);
      $cv->titre=$rq->input('titre');
      $cv->presentation=$rq->input('presentation');
      $cv->save();
      return redirect()->action('CvController@index')->with('success','le cv à été bien modifié');
   }
   
   public function edit($id){
   	$cv=Cv::find($id);
  $this->authorize('update',$cv);
      return view('cv.edit',['cv'=>$cv]);
   }

   public function destroy($id){
   	$cv=Cv::find($id);
    $this->authorize('delete', $cv);
      $cv->delete();
      return redirect()->action('CvController@index')->with('success','le cv à été bien Supprimé');
   }
   public function getExps()
   {
    $exps=Experience::all();
    return $exps;
   }
}
