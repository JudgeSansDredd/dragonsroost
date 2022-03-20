<div class="mt-2 bg-drdarkblue p-3 rounded-lg">
    <div id="{{$id}}" class="text-xl font-bold">{{$name}}</div>
    <hr />
    <div>{!! $definition !!}</div>
    @if(!empty($subEntries))
        @foreach($subEntries as $subEntry)
            @include('templates.glossary.subsection', $subEntry)
        @endforeach
    @endif
</div>
