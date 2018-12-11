<section class="section section-shaped home_clients">
    <div class="shape shape-style-1 bg- shape-skew"></div>
    <div class="container">
        <h3 class="section_title text-center"> {{ __('labels.clients') }} </h3>
        <div class="slider center">
            @forelse($clients as $client)
            <div class="client-item">
                <a class="client-logo" href="{{ $client['url'] }}" target="_blank"><img src="{{ asset('web/images/clients/' . $client['logo']) }}" title="{{ $client['name'] }}"></a>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
