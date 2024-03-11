@extends('frontend.layout.master')
@section('title', 'Home')
@section('content')
    <!-- header slider area -->
    @includeWhen(true, 'frontend.home.component.heroSlider')
    <!-- for mobile view extra Image -->
    <section class="d-md-none">
        <div>
            <img class="img-fluid" src="{{ asset('assets/frontend') }}/assets/images/services/service-img-1.jpg"
                alt="Glamour Retouching Image for mobile view" />
        </div>
    </section>
    <!-- ecommarce business area -->
    @includeWhen(true, 'frontend.home.component.businessArea')
    <!-- here work area -->
    @includeWhen(true, 'frontend.home.component.workArea')
    <!-- services area -->
    @includeWhen(true, 'frontend.home.component.serviceArea')
    <!-- why choose us area -->
    @includeWhen(true, 'frontend.home.component.chooseUsArea')
    <!-- our portfolio area -->
    @includeWhen(true, 'frontend.home.component.portfolioArea')
    <!-- our strength area-->
    @includeWhen(true, 'frontend.home.component.strengthArea')
    <!-- clints testimonial area -->
    @includeWhen(true, 'frontend.home.component.testimonialArea')
@endsection
