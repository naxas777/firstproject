

@for ($i=0; $i<10; $i++)
<h1>the number is {{ $i }}</h1>
    
@endfor

@foreach ($names as $item)

    <h2>the name is {{ $item }}</h2>
@endforeach

@forelse ($names as $name)
<h2>the name is {{ $name }}</h2>
@empty
    <h2>there are no names.</h2>
    
@endforelse

{{ $i=0 }}
@while ($i<10)
 <h2>i</h2>

 {{ $i++ }}
@endwhile