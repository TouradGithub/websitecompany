@php
    $services = App\Models\Service::all();
@endphp   
   
   <section id="services" class="services">
        <div class="container">
            <div class="section-header">
            <h2 class="section-title">Nos Services</h2>
            <p class="section-description">
                Découvrez les solutions que nous proposons pour transformer vos idées en réalité.
            </p>
        </div>

            <div class="services-grid">
                

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
