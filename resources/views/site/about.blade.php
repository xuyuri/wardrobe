@yield('layouts.app')

@section('content')
About {{ $first }} {{ $last }} {{ $third['who'] }}
@endsection