
@extends('layouts.master')
@section('content')
@include('parties.flash')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>la liste de CV
			</h1>
			<div class="pull-right">
				<a href="{{url('cvs/create')}}" class="btn btn-success">Nouveau CV</a>
			</div>
		
<div class="row">
	@foreach($cvs as $cv)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('storage/'.$cv->image)}}" alt="..." class="img-thumbnail">
      <div class="caption">
        <h3>Le CV de {{$cv->user->name}}</h3>
        <h6>Presentation</h6>
        <p>{{$cv->presentation}}</p>
       
       <form action="{{url('cvs/'.$cv->id)}}" method="post">
       	{{csrf_field()}}
       	 {{method_field('DELETE')}}
       	
       	<p>
       	<a href="{{url('cvs/'.$cv->id)}} " class="btn btn-success ">Detail</a>
       	<a href="{{url('cvs/'.$cv->id.'/edit')}} " class="btn btn-success ">Edit</a>
        @can('delete',$cv)
       	<button type="submit" href="{{url('cvs/'.$cv->id)}}  "class=" btn btn-success">Supprimer</button>
        @endcan
       </p>
       </form>
       </div >
	  </div>
    </div>
  

 @endforeach
     </div>

   </div>
 </div>
</div>
@endsection