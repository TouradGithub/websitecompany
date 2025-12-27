<footer>
    <div class="footer-content">
        <div class="footer-column footer-about">
            <h3>{{$setting?->name}}</h3>
            <p>{{$setting?->description}}</p>
        </div>

        <div class="footer-column">
            <h3>Contact</h3>
            <ul>
                @if($setting?->phone)
                    <li><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></li>
                @endif
                @if($setting?->email)
                    <li><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                @endif
                @if($setting?->whatsapp)
                    <li><a href="https://wa.me/{{$setting->whatsapp}}" target="_blank">WhatsApp: {{$setting->whatsapp}}</a></li>
                @endif
                @if($setting?->localisation)
                    <li>{{$setting->localisation}}</li>
                @endif
            </ul>
        </div>

   

    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 {{$setting?->name}}. Tous droits réservés.</p>
        {{-- <div class="footer-links">
            <a href="#">Confidentialité</a>
            <a href="#">Conditions</a>
            <a href="#">Cookies</a>
            <a href="#">Accessibilité</a>
        </div> --}}
    </div>
</footer>
