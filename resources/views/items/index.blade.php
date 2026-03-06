<h2>{{ __('Items') }}</h2>

<div>
    @foreach($items as $item)
        <div>
            {{ $item->invnumber }} {{ $item->title }}
        </div>
    @endforeach

</div>
