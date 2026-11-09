@extends('system::frames.guest')

@section('frame')


    @php
        $header = match ($page ?? 'default') {
            'home' => 'theme::header-home',
            default => 'theme::header',
        };

    @endphp

    <x-dynamic-component :component="$header" />

        <!-- Main Body -->
        <main class="body">
        
            @if($page_heading)
            <x-system::container>
                <x-theme::page-heading :page_heading="$page_heading"/>
            </x-system::container>
            @endif
            
            @yield('content')
            
        </main>
    <x-theme::footer />  


@endsection