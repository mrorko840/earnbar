@extends($activeTemplate.'layouts.frontend')

@section('content')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">

    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        @auth
        @include($activeTemplate . 'includes.top_nav_mini')
        @endauth
        @guest
        @include($activeTemplate . 'includes.home.top_nav_mini')
        @endguest
            

        <div class="main-container">
            @if($sections != null)
                @foreach(json_decode($sections) as $sec)
                    @include($activeTemplate.'sections.'.$sec)
                @endforeach
            @endif
        </div>
    </main>

    <!-- footer-->
    @auth
        @include($activeTemplate . 'includes.bottom_nav')
    @endauth
    @guest
        @include($activeTemplate . 'includes.home.bottom_nav')
        
    @endguest


    
</body>
@endsection
