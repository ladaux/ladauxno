@extends('layout')

@section('content')
    <script type="text/javascript">
    	$("#sound").sound({swf: url});
		$("#sound").load(url);
		$("#sound").play();
		$("#sound").pause();
		$("#sound").stop();
		$("#sound").volume(0-100);		
	</script>
    @foreach($birds as $bird)
    <script type="text/javascript">
    	$('#{{$bird->id}}').mouseover(function() {
		   $("#sound").play('{{$bird->sound}}');
		});
	</script>
	<div id = "{{$bird->id}}">
    	<img src="{{ $bird->image }}" alt="some_text">
        <p>{{ $bird->latinname }}</p>
    </div>    
    @endforeach
@stop