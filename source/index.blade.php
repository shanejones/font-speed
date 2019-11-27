@extends('_layouts.master')

@section('head')
<title>Font Speed Experiment - Shane Jones - Under2</title>
@endsection

@section('content')

<main class="main p-4">
    <h1 class="font-light text-3xl text-black">Font Speed Experiment</h1>
    <p class="text-gray-600 my-4 pb-4 border-b-2">An experiment by <a href="https://twitter.com/shanejones">Shane Jones</a> from <a href="http://under2.agency/">Under2</a></p>

    <div class="sm:flex">
        <div class="sm:w-1/2">
            <h2 class="font-light text-3xl text-black">Google Hosted</h2>
            <ul>
                <li><a href="google-host-standard">Standard Installation</a></li>
                <li><a href="google-host-subset">Standard Installation with specific subset</a></li>
                <li><a href="google-host-standard-preconnect">Standard Installation with preconnect</a></li>
                <li><a href="google-host-subset-preconnect">Standard Installation with specific subset and preconnect</a></li>
                <li><a href="google-host-webfont-loader">Webfont Loader</a></li>
                <li><a href="google-host-webfont-loader-subset">Webfont Loader with specific subset</a></li>
            </ul>
        </div>
        <div class="sm:w-1/2">
            <h2 class="font-light text-3xl text-black">Self Hosted</h2>
        </div>
    </div>
</main>

@endsection
