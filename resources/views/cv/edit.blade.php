@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12"></div>
	</div>
</div>			
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('cvs/'.$cv->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				{{ csrf_field()}}
				<div class="form-group">
					<label for="titre">Titre :</label>
					<input type="text" class="form-control" name="titre" value="{{$cv->titre}}">
				</div>
				<div class="from-group">
					<label for="presentation">Presentation</label>
					<textarea type="text" class="form-control"name="presentation">{{$cv->presentation}}</textarea>
					
				</div>
				
			</br>
				<div class="from-group">
					<input type="submit" class="form-control btn btn-primary" value="Modifier" >
				</div>
			</form>
		</div>
	</div>
</div>

@endsection