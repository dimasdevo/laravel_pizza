@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <div>
            <p>{{$name}}</p>
            <p>{{$age}}</p>
            <h></h>
            @foreach($pizzas as $pizza)
            <div>
                <p>{{$loop->index}} {{$pizza['type']}}-{{$pizza['base']}}
                    @if($loop->first)
                    <span> - first in the loop</span>
                    @endif
                    @if($loop->last)
                    <span> - lasr in the loop</span>
                    @endif
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection