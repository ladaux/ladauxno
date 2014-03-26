@extends('layout')

@section('content')
    <script type="text/javascript">
    $(document).ready(function() {    
		$( "#target" ).click(function() {
		  alert( "Handler for .click() called." );
		});	
	});	
	</script>

<table class="TFtable">
	@foreach($birds as $bird)
	<tr>
		<td>	
			<div id = "{{$bird->id}}"><img src="{{ $bird->image }}" width = "100px" alt="some_text"></div>
	    </td>
	    <td>{{ $bird->name }}</td>
	    <td>{{ $bird->latinname }}</td>
	    <td>{{ $bird->description }}</td>
    </tr>
    
 	<script type="text/javascript">
		$(function(){
			 var birdaudio = document.createElement('audio');
	    	 birdaudio.setAttribute('src', '{{$bird->sound}}');
			 $('#{{$bird->id}}').mouseenter(function(){ birdaudio.play(); });
			 $('#{{$bird->id}}').mouseleave(function(){ birdaudio.pause(); });
		});
		$( "tr:odd" ).css( "background-color", "lightblue" );
	</script>    
    @endforeach
    </table>
@stop
