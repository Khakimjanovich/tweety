@extends('layouts.app')

@section('content')
    <div class="lg:flex  lg:justify-between">

        <div class="lg:w-32">
            @include('layouts.sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

            @include('layouts.publish-panel')
            <div class="border border-gray-300 rounded-lg">

                @include('layouts.tweet')
                @include('layouts.tweet')
                @include('layouts.tweet')
                @include('layouts.tweet')

            </div>

        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">

            @include('layouts.friends-list')

        </div>

    </div>
@endsection
