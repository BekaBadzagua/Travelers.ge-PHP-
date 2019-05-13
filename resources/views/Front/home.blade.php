    
@extends('Layouts.layout')
        
@section('content')

    {{-- Start: Slider --}}
        @include('Includes.Front.slider')
    {{-- End: Slider --}}

    {{-- Start: Commertials --}}
        @include('Includes.Front.commertials')
    {{-- End: Commertials --}}

    {{-- Start: testemonials --}}
        @include('Includes.Front.testemonials')
    {{-- End: testemonials --}}

    {{-- Start: places --}}
        @include('Includes.Front.places')
    {{-- End: places --}}

    {{-- Start: Tours --}}
        @include('Includes.Front.tours')
    {{-- End: Tours --}}

    {{-- Start: video --}}
        @include('Includes.Front.video')
    {{-- End: video --}}
    
    {{-- Start: services --}}
        @include('Includes.Front.services')
    {{-- End: services --}}

    {{-- Start: blog --}}
        @include('Includes.Front.blog')
    {{-- End: blog --}}

@endsection
        