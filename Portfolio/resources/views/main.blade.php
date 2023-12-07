@extends('layouts.default')
@section('main')
<script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
<body class="light">
  <div class="text">
    <h1> I'M LASPALES EPALLA</h1>
    <p>
    A work-study web development student <a href="https://etna.io/" target="_blank" class="link_main">ETNA</a>. Explore my projects, 
    from personal creations to professional assignments, reflecting my mastery of technologies such as HTML, CSS, JavaScript, React and Angular. 
    My goal: to contribute to innovative projects and continue to evolve in this dynamic field.
    Contact me to discuss collaborations or discuss web development trends.
    </p>
    <a href="/">See more about me <span id="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
  </div>
  
  <script>
    const btntheme = document.querySelector('.theme');

    btntheme.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')

    } else if(body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')

    }

   })

  </script>
</body>
@endsection