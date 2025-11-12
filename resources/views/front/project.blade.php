@php
    $projects = App\Models\Project::all();
@endphp 
 
 <section id="projects" class="projects">
        <div class="container">
           <div class="section-header">
    <h2 class="section-title">Projets à la une</h2>
    <p class="section-description">
        Découvrez nos dernières réalisations et nos collaborations réussies avec nos clients.
    </p>
</div>


            <!-- Project Slider -->
            <div class="project-slider">
                <div class="slider-container">
                    <div class="slider-track" id="sliderTrack">

                        @foreach ($projects as $item)
                            
                         <div class="project-slide">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="E-Commerce Platform" class="project-image">
                            <div class="project-overlay">
                                <h3 class="project-title">{{ $item->name }}</h3>
                                <p class="project-description">{{ $item->description }}</p>
                                <div class="project-tags">
                                    <span class="project-tag">React</span>
                                    <span class="project-tag">Node.js</span>
                                    <span class="project-tag">MongoDB</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                      
                    </div>
                </div>

                <button class="slider-btn slider-btn-prev" id="sliderPrev" aria-label="Previous project">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="slider-btn slider-btn-next" id="sliderNext" aria-label="Next project">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>

                <div class="slider-dots" id="sliderDots"></div>
            </div>

            <!-- Project Grid -->

         
            <div class="projects-grid">
             
   @foreach ($projects as $item)
                   <div class="project-card">
                    <img src="{{ asset('default.png') }}" alt="Fitness Tracker" class="project-card-image">
                    <div class="project-card-content">
                        <h3 class="project-card-title">Fitness Tracking App</h3>
                        <p class="project-card-description">
                            Social fitness platform with workout tracking and community features
                        </p>
                        <div class="project-card-tags">
                            <span class="project-tag">Flutter</span>
                            <span class="project-tag">Firebase</span>
                        </div>
                    </div>
                </div>
            @endforeach
             
            </div>
        </div>
    </section>
