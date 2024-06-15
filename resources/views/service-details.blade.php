<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Galerie Photo</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 1
              }
            }
          }
        </script>
        <div class="swiper-wrapper">
            @foreach ($images as $image)
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <div class="profile mt-auto">
                            <img src="{{$image->image}}" class="testimonial-img" alt="">
                            <h3>{{$image->titre}}</h3>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            @endforeach


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

</section><!-- /Testimonials Section -->
