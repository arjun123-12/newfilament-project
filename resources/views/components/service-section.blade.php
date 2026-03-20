<section class="section-pad ">
    <div class="container service">

        <div class="sa-header">
            <h2 class="sa-title">
                Our <span class="accent">Services</span>
            </h2>
        </div>

        <div class="srv-body">

            <!-- LEFT SIDE -->
            <div class="srv-list" id="srvList">

                @foreach($services as $index => $service)
                <div class="srv-item {{ $loop->first ? 'is-active' : '' }}" data-index="{{ $index }}">
                    <div class="srv-item-inner">
                        <span class="srv-num">{{ $index + 1 }}</span>

                        <div class="srv-title-wrap">
                            <div class="srv-title">{{ $service->service_name }}</div>
                            <div class="srv-subtitle">{{ $service->title }}</div>
                        </div>
                        <div class="srv-tags">
                            <span class="srv-tag">Most Popular</span>
                            <span class="srv-tag">Same Day</span>
                        </div>
                        <div class="srv-arrow-wrap">
                            <div class="srv-arrow">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="2" y1="12" x2="12" y2="2"></line>
                                    <polyline points="5,2 12,2 12,9"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="srv-item-img-mobile">
                        <img src="{{ asset('storage/' . $service->card_image) }}">
                    </div>
                </div>
                @endforeach

            </div>

            <!-- RIGHT SIDE -->
            <div class="srv-panel" id="srvPanel">

                <!-- IMAGES -->
                @foreach($services as $index => $service)
                <div class="srv-panel-img {{ $loop->first ? 'is-visible' : '' }}" data-index="{{ $index }}">
                    <img src="{{ asset('storage/' . $service->card_image) }}">
                </div>
                @endforeach

                <!-- CONTENT -->
                <div class="srv-panel-content is-visible" id="panelContent">
                    <div class="srv-panel-num" id="panelNum">
                        1 / {{ $services->count() }}
                    </div>

                    <div class="srv-panel-name" id="panelName">
                        {{ $services->first()->service_name ?? '' }}
                    </div>

                    <div class="srv-panel-desc" id="panelDesc">
                        {{ $services->first()->description ?? '' }}
                    </div>
                    <div class="srv-panel-features" id="panelFeatures"><span class="srv-panel-chip">Same-day pickup</span><span class="srv-panel-chip">All rooms covered</span><span class="srv-panel-chip">Heavy items OK</span></div>

                    <a href="#" class="srv-panel-btn">
                        Book Now
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="1" y1="7" x2="13" y2="7"></line>
                            <polyline points="8,2 13,7 8,12"></polyline>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
        <div class="srv-footer">
            <div class="srv-footer-left">
                <h3>Not sure what you need?</h3>
                <p>Get a free, no-obligation quote in under 60 seconds.</p>
            </div>
            <div class="srv-footer-btns">
                <a href="#" class="btn-orange">
                    Get Free Quote
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="1" y1="7" x2="13" y2="7"></line>
                        <polyline points="8,2 13,7 8,12"></polyline>
                    </svg>
                </a>
                <a href="tel:+1234567890" class="btn-dark">Call Us Now</a>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const services = @json($services);

        if (!services || services.length === 0) return;

        let activeIndex = 0;
        let isAnimating = false;

        const items = document.querySelectorAll('.srv-item');
        const panelImgs = document.querySelectorAll('.srv-panel-img');

        if (!items.length || !panelImgs.length) return; // safety

        const panelContent = document.getElementById('panelContent');
        const panelNum = document.getElementById('panelNum');
        const panelName = document.getElementById('panelName');
        const panelDesc = document.getElementById('panelDesc');

        function activateService(index) {

            if (!services[index]) return;
            if (index === activeIndex || isAnimating) return;

            isAnimating = true;

            items[activeIndex]?.classList.remove('is-active');
            panelImgs[activeIndex]?.classList.remove('is-visible');

            panelContent?.classList.remove('is-visible');

            setTimeout(() => {

                const srv = services[index];

                panelNum.textContent = (index + 1) + ' / ' + services.length;
                panelName.textContent = srv.service_name ?? '';
                panelDesc.textContent = srv.description ?? '';

                activeIndex = index;

                items[activeIndex]?.classList.add('is-active');
                panelImgs[activeIndex]?.classList.add('is-visible');

                setTimeout(() => {
                    panelContent?.classList.add('is-visible');
                    isAnimating = false;
                }, 100);

            }, 300);
        }

        items.forEach((item, i) => {
            item.addEventListener('mouseenter', () => activateService(i));
            item.addEventListener('click', () => activateService(i)); // mobile fix
        });

    });
</script>