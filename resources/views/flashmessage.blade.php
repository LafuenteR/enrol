@if($flash = session('message'))
  <div class="alert alert-success">{{$flash}}</div>
@elseif($flash = session('wrong'))
  <div class="alert alert-danger">{{$flash}}</div> 
@endif


