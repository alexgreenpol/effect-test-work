<?php get_header(); ?>

<main class="main-content">
    <section class="home-section">
        <div class="home-section__content">
            <article class="home-section__company-info">
                <p class="home-section__company-description wow animate__fadeInUp">
                    Lorem Ipsum is simply dummy text of the printing
                </p>
                <h2
                    class="home-section__company-name wow animate__fadeInUp"
                    data-wow-delay="0.5s">
                    Company Name
                </h2>
            </article>

            <div
                class="home-section__properties wow animate__fadeInUp"
                data-wow-delay="1s">
                <h3 class="home-section__properties-text">
                    Lorem Ipsum is simply dummy text of the printing
                    <span class="home-section__properties-highlight">and typesetting</span>
                    industry.
                </h3>
                <button class="home-section__btn base-btn">Select property</button>
            </div>
        </div>
    </section>

    <section class="projects-section">
        <div class="projects-section__content">
            <h2 class="projects-section__heading">Our projects</h2>

            <div class="projects-section__gallery swiper">
                <div class="projects-section__gallery-wrapper swiper-wrapper">
                    <div
                        class="projects-section__slide swiper-slide"
                        style="background-image: url('./assets/images/slide-1.jpg')">
                        <div class="projects-section__slide-info">
                            <p class="projects-section__sub-heading">Villa</p>
                            <h3 class="projects-section__heading-slide">
                                Lorem ipsum Lorem ipsum Lorem ipsum
                            </h3>
                        </div>
                        <button class="projects-section__slide-btn">
                            <img
                                src="./assets/images/slider-arrow.svg"
                                alt="Project button" />
                        </button>
                    </div>
                    <div
                        class="projects-section__slide swiper-slide"
                        style="background-image: url('./assets/images/slide-2.jpg')">
                        <div class="projects-section__slide-info">
                            <p class="projects-section__sub-heading">Villa</p>
                            <h3 class="projects-section__heading-slide">Lorem ipsum</h3>
                        </div>
                        <button class="projects-section__slide-btn">
                            <img
                                src="./assets/images/slider-arrow.svg"
                                alt="Project button" />
                        </button>
                    </div>
                    <div
                        class="projects-section__slide swiper-slide"
                        style="background-image: url('./assets/images/slide-3.jpg')">
                        <div class="projects-section__slide-info">
                            <p class="projects-section__sub-heading">Villa</p>
                            <h3 class="projects-section__heading-slide">Lorem ipsum</h3>
                        </div>
                        <button class="projects-section__slide-btn">
                            <img
                                src="./assets/images/slider-arrow.svg"
                                alt="Project button" />
                        </button>
                    </div>
                </div>

                <div class="projects-section__navigation">
                    <button class="projects-section__btn-prev">
                        <img
                            src="assets/images/slider-arrow.svg"
                            alt="Previous slide" />
                    </button>
                    <button class="projects-section__btn-next">
                        <img src="assets/images/slider-arrow.svg" alt="Next slide" />
                    </button>
                </div>
            </div>

            <blockquote class="projects-section__quote">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.

                    <span class="projects-section__quote-highlight">
                        Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic
                        typesetting, remaining.
                    </span>
                </p>
            </blockquote>

            <h3 class="projects-section__advantage">More than 10 years</h3>
        </div>
    </section>
</main>

<?php get_footer(); ?>