@php
    $services = App\Models\Service::all();
@endphp   
   
   <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Services</h2>
                <p class="section-description">
                    Comprehensive development solutions tailored to your business needs
                </p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        Custom web applications built with modern frameworks and best practices for optimal performance.
                    </p>
                </div>

                @foreach ($services as $item)
                
                 <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="service-title">{{ $item->name }}</h3>
                    <p class="service-description">
                       {{$item->description}}
                    </p>
                </div>


                @endforeach

               

            </div>
        </div>
    </section>
