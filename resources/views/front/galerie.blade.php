@php
$projects = App\Models\Project::all();
 @endphp

<section class="gallery-slider">
    <h2 class="section-title">Galerie de projets</h2>
    <div class="slider-container">
        <div class="slider-wrapper">
            @foreach($projects as $project)
            <div class="slide">
                <img src="{{asset('storage/'.$project->image)}}" alt="Fashion">
            </div>
            @endforeach
          
        </div>
        <button class="slider-nav prev">‹</button>
        <button class="slider-nav next">›</button>
    </div>
</section>
