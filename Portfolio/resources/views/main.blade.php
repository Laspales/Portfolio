@extends('layout')
@section('content')
  <div class="text">
    <h1> I'M LASPALES EPALLA</h1>
    <p>
    A web development student in a work-study program at <a href='https://etna.io/' target='_blank' class='link_main'>ETNA</a>. 
    Explore my projects, ranging from personal creations to professional assignments, showcasing my proficiency in technologies 
    like HTML, CSS, JavaScript, and NodeJS. My objective is to contribute to innovative projects and further advance in this dynamic field. 
    Feel free to reach out for potential collaborations or to discuss trends in web development.
    </p>
    <a href="{{ route('aboutme') }}">See more about me <span id="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
  </div>
@endsection