@if (session()->has('success_message'))
    <div class="alert alert-success  alert-dismissible"  role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       {{ session('success_message') }}
		
    </div>
@endif