@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Data Security')

@section('content')

<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <div class="container">
            <h1 class="page-title mb-0 text-white">Data Security</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <div class="form-group">
        <label for="address_address">Address</label>
        <input type="text" id="address-input" name="address_address" class="form-control map-input">
        <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
        <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
    </div>
    <div id="address-map-container" style="width:100%;height:400px; ">
        <div style="width: 100%; height: 100%" id="address-map"></div>
    </div>
    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <section class="boost-section pt-10 pb-10">
                <div class="container mt-10 mb-9">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-6 pl-lg-8 mb-8">
                            <h4 class="title text-left">Data Security</h4>
                            <p class="mb-6">
                                Essentially will use its best efforts to protect your privacy. Authorized employees
                                within the company on a need-to-know basis only use any information collected from
                                individual customers. We will not sell, share, or rent your personal information to any
                                third party or use your e-mail address for unsolicited mail. Any emails sent by the
                                Company will only be in connection with the provision of agreed services and products.
                                We will use our best efforts to provide the highest level of support in order to
                                maintain maximum information security. However, as you are aware – we cannot guarantee
                                absolute security for the website and therefore cannot be held liable against it in any
                                manner whatsoever.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
@endsection
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA-Fj5APGJBrh2hNmUQaXRaeuP9_zXPvw&libraries=places&callback=initialize" async defer></script>
<script>
    function initialize() {

$('form').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
        e.preventDefault();
        return false;
    }
});
const locationInputs = document.getElementsByClassName("map-input");

const autocompletes = [];
const geocoder = new google.maps.Geocoder;
for (let i = 0; i < locationInputs.length; i++) {

    const input = locationInputs[i];
    const fieldKey = input.id.replace("-input", "");
    const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

    const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
    const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

    // center the markesr
    const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
        center: {lat: latitude, lng: longitude},
        zoom: 13
    });
    const marker = new google.maps.Marker({
        map: map,
        position: {lat: latitude, lng: longitude},
    });

    marker.setVisible(isEdit);

    const autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.key = fieldKey;
    autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
}

for (let i = 0; i < autocompletes.length; i++) {
    const input = autocompletes[i].input;
    const autocomplete = autocompletes[i].autocomplete;
    const map = autocompletes[i].map;
    const marker = autocompletes[i].marker;

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        marker.setVisible(false);
        const place = autocomplete.getPlace();

        geocoder.geocode({'placeId': place.place_id}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                const lat = results[0].geometry.location.lat();
                const lng = results[0].geometry.location.lng();
                setLocationCoordinates(autocomplete.key, lat, lng);
            }
        });

        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            input.value = "";
            return;
        }

        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

    });
}
}

function setLocationCoordinates(key, lat, lng) {
const latitudeField = document.getElementById(key + "-" + "latitude");
const longitudeField = document.getElementById(key + "-" + "longitude");
latitudeField.value = lat;
longitudeField.value = lng;
}
</script>
@stop