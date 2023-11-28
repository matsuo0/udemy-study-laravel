{{-- test<br> --}}

{{-- // 複数形 as $単数形とかくとわかりやすい --}}

@foreach($values as $value)
{{ $value->id }} <br>
{{ $value->text }} <br>
@endforeach
