@extends('layouts.master')
@section('content')
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
			<h1>@{{ message }}</h1>
			<div class="card " >

               <div class="card-header bg-info">
              	<div class="row">
              	  <div class="col-md-10"><h3>Expérience:</h3></div>
              	   <div class="col-md-2 text-right"><Button class="btn btn-success">Ajouter</Button>
              	   </div>
                </div>
              </div>
                <div class="card-body">
				<ul class="list-group">
					<li class="list-group-item" v-for="exp in experiences">
						<div class="text-right">
							<Button class="btn btn-warning">Editer</Button>

						</div>
						<h3>@{{exp.titre}}</h3>
						<p>Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add</p>
						<small>22/10/2019</small>
					</li>
					
				</ul>
				</div>
			
			</div>
		
			<hr>
			<div class="card " >

               <div class="card-header bg-info">
              	<div class="row">
              	  <div class="col-md-10"><h3>Expérience:</h3></div>
              	   <div class="col-md-2 text-right" ><Button class="btn btn-success">Ajouter</Button>
              	   </div>
                </div>
              </div>
                <div class="card-body">
					Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add
				</div>
			
			</div>
			<hr>
			<div class="card " >

               <div class="card-header bg-info">
              	<div class="row">
              	  <div class="col-md-10"><h3>Expérience:</h3></div>
              	   <div class="col-md-2 text-right"><Button class="btn btn-success">Ajouter</Button>
              	   </div>
                </div>
              </div>
                <div class="card-body">
					Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add
				</div>
			
			</div>
			<hr>
			<div class="card " >

               <div class="card-header bg-info">
              	<div class="row">
              	  <div class="col-md-10"><h3>Expérience:</h3></div>
              	   <div class="col-md-2 text-right"><Button class="btn btn-success">Ajouter</Button>
              	   </div>
                </div>
              </div>
                <div class="card-body">
					Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add
				</div>
			
			</div>
		</div>
	</div>
</div>
@endsection
@section('vuejs')
<script src="{{ asset('js/vue.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script >
	var app=new Vue({
         el:'#app',
         data:{
         	message:'je suis Zineb kamal',
         	experiences:[]
         },
         methods:{
         	getExps:function(){
         		axios.get('http://lacalhost:8000/getExps').then(response=>{this.experiences= response.data;
         		})

         		    .catch(error=>{console.log('errors:',error);
         		    })
         	}

         },
         mounted:function(){
         	this.getExps();
         }
	});
</script>
@endsection
