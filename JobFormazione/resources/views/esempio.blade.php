@if ($sumValue == null)
<h1>La variabile è NULL</h1>
@elseif ($sumValue == "Qualcosa")
<h2>qualcos'altro</h2>
@else
<h1>Un altra cosa ancora</h1>
@endif 

@isset ($items)
<h2>Lista degli elementi</h2>
@endisset

@foreach($items as $item)
<h1> {{$item}}</h1>
@endforeach

@empty ($emptyArray)
<h1>la variabile è vuota</h1>
@else 
<h1>la variabile non è vuota</h1>
@endempty

@for ($i = 0; $i < count($items); $i ++)
<h1>{{$items[$i]}}</h1>
@endfor