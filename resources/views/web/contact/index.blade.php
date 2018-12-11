@extends('web.layouts.app')

@section('title', __('contact.seo_title'))

@section('wrapper-class', 'wp-page page-full-height wide')

@section('content')
    @include('web.layouts.header')
    <main class="main page-content my-auto">
        <div class="container-fluid">
            <span class="page-title">{{ __('contact.title') }}</span> 
        </div>
        <div class=" map-contact">
            @include('web.contact.form_contact')
            <div id="map"></div>
        </div>
    </main>
@endsection

@push('scripts')
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAL4rqAcgoGkjVZRpfeSVRyON3V6gjKZWI'></script>
<script type="text/javascript">
    (function($, window, document) {
        google.maps.event.addDomListener(window, "load", initMapContact);
            window.onorientationchange = function() {
            window.location.reload();
        }

        @if ($errors->any())
            @foreach ($errors->getMessages() as $key => $message)
                $('[name="{{ $key }}"]').addClass('error');
                console.log('{{ $key }}');
            @endforeach
            toggleContact();
            $('.error:first').focus();
        @endif
    }(window.jQuery, window, document));

   //init Map Contact
    function initMapContact() {
        var usRoadMapType = new google.maps.StyledMapType([{
            featureType: 'all',
            elementType: 'all',
            stylers: [{
                invert_lightness: 'true'
            },
            {
                hue: '#283133'
            },
            {
                saturation: 40
            },
            {
                lightness: 30
            },
            {
                gamma: 0.5
            }]
        }], {
            name: 'Silkwires Style'
        });
        var uluru = {
            lat: 10.7663774,
            lng: 106.6964865
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru, 
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            }
        });
        var contentString = '<div class="map-info-box">' +
        '<div class="map-head">' + '<h3><img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt="Silkwires digital agency"></h3></div>' + '<div class="map-body">' + '<p class="map-address"><span class="lnr lnr-map-marker"></span>{!! __('contact.address') !!}</p> <p><span class="lnr lnr-phone-handset"></span>(+84-8) 35 03 45 88 </p><p class="map-email"><span class="lnr lnr-envelope"></span> info@silkwires.com </p>' + '<div><button onclick="toggleContact()" id="button-contact" class="btn btn-sm btn-outline-secondary">{{ strtoupper(__('contact.title')) }}</button></div></div> </div>';
       
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var image = '{{ asset('web/images/icons/map-marker-icon.png') }}';
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: image,
            title: '{{ __('labels.company_name') }}'
        });
       
        // th custome
        google.maps.event.addListener(infowindow, 'domready', function() {
            // Reference to the DIV which receives the contents of the infowindow using jQuery
            var iwOuter = $('.gm-style-iw'); 
            var iwBackground = iwOuter.prev(); 
         
            // Remove the background shadow DIV
            iwBackground.children(':nth-child(2)').css({'display' : 'none'});
         
            // Remove the white background DIV
            iwBackground.children(':nth-child(4)').css({'display' : 'none'});
         
            $('#map').find('.gm-style-iw').parent().addClass('style-iw-sw');
        }); 

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker); 
    }

    // OPEN CONTACT SIDEBAR
    function toggleContact() {
        var formContainer = $('#contactForm'); 
        $(formContainer).toggleClass('open'); 
    }
</script>
@endpush
