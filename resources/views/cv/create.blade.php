@extends('layouts.app')
@section('content')
<!-- @if(count($errors))
 
<div class="alert alert-danger" role="alert">
<ul>
	@foreach($errors->all() as $err)
	<li>{{$err}}</li>
	@endforeach
</ul>
</div>
@endif -->
<div class="container">
	<div class="row">
		<div class="col-md-12"></div>
	</div>
</div>			
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field()}}
				<div class="form-group" >
					<label for="titre">Titre :</label>
					<input type="text" class="form-control @if($errors->get('titre')) is-invalid @endif" name="titre" value="{{old('titre')}}">
					@if($errors->get('titre'))
					<ul>
	                  @foreach($errors->get('titre') as $err)
	                  <li>{{$err}}</li>
	                 @endforeach
                     </ul>
                     @endif
				</div>
				<div class="from-group @if($errors->get('presentation')) has-error @endif">
					<label for="presentation">Presentation</label>
					<textarea type="text" class="form-control" name="presentation" value="">{{old('presentation')}}</textarea>
					@if($errors->get('presentation'))
					<ul>
	                  @foreach($errors->get('presentation') as $err)
	                  <li>{{$err}}</li>
	                 @endforeach
                     </ul>
                     @endif
				</div>
					<div class="form-group" >
					<label for="image">Image :</label>
					<input type="file" class="form-control"
					name="image" value="{{old('image')}}">
				</div>
                   @if($errors->get('image'))
					<ul>
	                  @foreach($errors->get('image') as $err)
	                  <li>{{$err}}</li>
	                 @endforeach
                     </ul>
                     @endif
				
			</br>
				<div class="from-group">
					<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection