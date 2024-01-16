@extends('layouts.empirical_home')

@section('title', 'Empirical Developments - Building Dreams')

@section('description', 'Empirical Developments is a full-service construction company operating in the Sydney Area. We specialize in new build homes, house extensions, house renovations, property development, landscaping, and commercial construction. Our team is dedicated to delivering exceptional results and building dreams.')

@section('keywords', 'Empirical Developments, construction company, new build homes, house extensions, house renovations, property development, landscaping, commercial construction, Sydney Area')

@section('content')
    <main>
        @include('includes/services')

        @include('includes/about')

        @include('includes/resources')

        @include('includes/projects')

        @include('includes/our_process')

        @include('includes/testimonials')
    </main>
@endsection
@push('scripts')
    <script>
        // Array of text to be displayed
        const textArray1 = ["Thinking Of Building A New Home ?", "Building Dreams, One Home At A Time", "Build Your Dream Home, Your way"];
        const textArray2 = ["We are here to help", "Luxury & Quality", "Dreams to Reality"];

        // Index to keep track of current text
        let index = 0;

        // Function to change the text every 5 seconds
        function changeText() {
            document.getElementById("text1").textContent = textArray1[index];
            document.getElementById("text2").textContent = textArray2[index];
            index = (index + 1) % textArray1.length;
        }

        // Call the function every 5 seconds
        setInterval(changeText, 5000);
    </script>
@endpush
