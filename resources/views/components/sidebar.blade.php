
<div {{ $attributes->merge(['class' => 'bgcolorclass']) }}>
    <h1>{{$info}}</h1>
    <h2>{{$something}}</h2>
    Hello from sidebar component

    @foreach($list('sakib') as $item)
        <ul> 
            <li>{{$item}}</li>
        </ul>
    @endforeach

    {{$slot}}
</div>