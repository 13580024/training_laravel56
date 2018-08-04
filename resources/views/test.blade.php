<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        
		
<!--         <pre>
        {{-- print_r($data) --}}
        {{-- $data['name'] --}} {{-- $data['surname'] --}} {{-- $data['email'] --}}


		<pre>	
        {{-- print_r($item) --}}

        {{-- $item['item1'] --}}
 -->

        <!-- @if($mods)
    	<ul>
    	@foreach($mods as $item)
        <li>{{-- $item->name.' : '.$item->surname --}}</li>
    	@endforeach
    	</ul>
		@endif -->
		<pre>
			{{ print_r($data) }}
		</pre>
		<h1> Show User Single Object from Model </h1>
		{{ $user->name.' : '.$user->surname }}

		<h1> Show mods Multiple Objects From Model</h1>
		@if($mods)
    	<ul>
    	@foreach($mods as $item)
        <li>{{ $item->name.' : '.$item->surname }}</li>
    	@endforeach
    	</ul>
		@endif



    </body>
</html>
