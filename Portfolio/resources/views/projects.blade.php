@extends('layout')

@section('content')
   <div class="slide-container">
   <div class="custom-slider fade" id="slider1">
            <div class="slide-text">
               <div class="s-image">
                        <div class="slide-image" style="background-image: url('images/bubbletea/image6.png');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/bubbletea/image5.png');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/bubbletea/image4.png');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/bubbletea/image2.png');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/bubbletea/image3.png');
                              background-size: contain; background-repeat: no-repeat;"></div>

        
               </div>
                    <h1 class="title">My Bubble Tea </h1>
                    <p class="texto">
                        <b class="to">Development of an e-commerce website for selling Bubble tea</b><br/><br/>
                           <span>LARAVEL</span>
                           <span>HTML & CSS</span>
                           <span>JAVASCRIPT</span><br/><br/>
                           <span>PHP</span>
                           <span>MySQL</span>
                     </p>
            </div>
    </div>

  <div class="custom-slider fade" id="slider2">
            <div class="slide-text">
             <div class="s-image">
                        <div class="slide-image" style="background-image: url('images/irc/irc0.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/irc/irc1.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/irc/irc2.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/irc/irc3.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
        
               </div>
                    <h1 class="title">My IRC</h1>
                    <p class="texto">
                        <b class="to">Internet Relay Chat System Design</b><br/><br/>
                           <span>HTML & CSS</span>
                           <span>JAVASCRIPT</span><br/><br/>
                           <span>MySQL</span>
                     </p>
            </div>
    </div>

    <div class="custom-slider fade" id="slider3">
            <div class="slide-text">
            <div class="s-image">
                        <div class="slide-image" style="background-image: url('images/hyrulecastle/hc0.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/hyrulecastle/hc1.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/hyrulecastle/hc2.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
        
               </div>
                    <h1 class="title">My Hyrule Castle</h1>
                    <p class="texto">
                        <b class="to">Designing a Role-Playing Game based on Zelda</b><br/><br/>
                           <span>TYPESCRIPT</span>
                     </p>
            </div>
    </div>

    <div class="custom-slider fade" id="slider4">
            <div class="slide-text">
            <div class="s-image">
                        <div class="slide-image" style="background-image: url('images/portfolio/pf0.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/portfolio/pf1.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/portfolio/pf2.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
                        <div class="slide-image" style="background-image: url('images/portfolio/pf3.PNG');
                              background-size: contain; background-repeat: no-repeat;"></div>
        
               </div>
                    <h1 class="title">Portfolio</h1>
                    <p class="texto">
                        <b class="to">Developing a portfolio</b><br/><br/>
                           <span>LARAVEL</span>
                           <span>HTML & CSS</span>
                           <span>JAVASCRIPT</span><br/><br/>
                           <span>PHP</span>
                           <span>MySQL</span>
                     </p>
            </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
   </div>
   <div class="slide-dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    var sliders = document.querySelectorAll(".custom-slider");

    sliders.forEach(function(slider, index) {
        var images = slider.querySelectorAll(".slide-image");

        function showImagesWithAnimation(imageIndex) {
            images[imageIndex].classList.add("fade");
            images[imageIndex].addEventListener("animationend", function() {
                images[imageIndex].classList.remove("fade");
                
                var nextIndex = (imageIndex + 1) % images.length;
                showImagesWithAnimation(nextIndex);
            }, { once: true }); 
        }
        showImagesWithAnimation(0);
    });
   });

</script>
@endsection