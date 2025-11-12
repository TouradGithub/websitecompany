@php
    $projects = App\Models\Project::all();
@endphp 
 
 <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-description">
                    Showcasing our latest work and successful client partnerships
                </p>
            </div>

            <!-- Project Slider -->
            <div class="project-slider">
                <div class="slider-container">
                    <div class="slider-track" id="sliderTrack">

                        @foreach ($projects as $item)
                            
                         <div class="project-slide">
                            <img src="{{ asset($item->image) }}" alt="E-Commerce Platform" class="project-image">
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

                <div class="project-card">
                    <img src="{{ asset('default.png') }}" alt="Real Estate Portal" class="project-card-image">
                    <div class="project-card-content">
                        <h3 class="project-card-title">Real Estate Portal</h3>
                        <p class="project-card-description">
                            Property listing platform with advanced search and virtual tours
                        </p>
                        <div class="project-card-tags">
                            <span class="project-tag">Next.js</span>
                            <span class="project-tag">PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="{{ asset('default.png') }}" alt="Food Delivery" class="project-card-image">
                    <div class="project-card-content">
                        <h3 class="project-card-title">Food Delivery Service</h3>
                        <p class="project-card-description">
                            Multi-restaurant ordering system with real-time delivery tracking
                        </p>
                        <div class="project-card-tags">
                            <span class="project-tag">React</span>
                            <span class="project-tag">Express</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
