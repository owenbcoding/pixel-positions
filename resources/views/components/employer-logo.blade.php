@props(['employer', 'width' => 90])

<img src="https://picsum.photos/seed/{{ rand(0, 1000)}}/{{ $width }}" alt="" class="rounded-xl" width+="{{ $width }}">