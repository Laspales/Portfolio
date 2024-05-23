@extends('layout')
@section('content')
  <div class="text">
    <h1> I'M LASPALES EPALLA</h1>
    <p>
    Un étudiant en développement web en alternance à l' <a href='https://etna.io/' target='_blank' class='link_main'>ETNA</a>. 
    Un étudiant en développement web en alternance à ETNA
    Visitez mes projets, allant de créations personnelles à des missions professionnelles, mettant en valeur ma maîtrise des technologies
    telles que HTML, CSS, JavaScript et NodeJS. Mon objectif est de contribuer à des projets innovants et de progresser davantage dans ce domaine dynamique.
    N'hésitez pas à me contacter pour d'éventuelles collaborations ou pour discuter des tendances en développement web.
    </p>
    <a href="{{ route('aboutme') }}" style="font-style: italic;">Découvrez-en plus sur moi<span id="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
  </div>
@endsection

