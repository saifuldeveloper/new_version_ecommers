<html lang="en">

@includeWhen(true, 'frontend.layout.component.head')

<body data-new-gr-c-s-check-loaded="14.1121.0" data-gr-ext-installed cz-shortcut-listen="true">
    <div style="position: fixed; top: 0px; left: 0px; width: 0; height: 0" id="scrollzipPoint"></div>
    <!-- header area -->
    @includeWhen(true, 'frontend.layout.header')

    @yield('content')

    <!-- footer area---->
    @includeWhen(true, 'frontend.layout.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- for counting js -->
    <script src="{{ asset('assets/frontend') }}/assets/js/numscroller-1.0.js"></script>
    <!-- end counting js -->
    <script src="{{ asset('assets/frontend') }}/assets/js/popper.min.js"></script>
    <!-- for portfolio js -->
    <!--<script type="text/javascript" src="https://choosygraphics.com/assets/website/js/isotope.pkgd.js"></script> -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js">
    </script>
    <!-- for portfolio js -->
    <script src="{{ asset('assets/frontend') }}/assets/js/theme.js"></script>
    <!-- slick slider js -->
    <script type="text/javascript" src="{{ asset('assets/frontend') }}/assets/js/slick.js"></script>

    <!-- for image comparision js -->
    <script src="{{ asset('assets/frontend') }}/assets/js/beforeafter.js"></script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter">
            <a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter"
                    src="https://c.statcounter.com/12458125/0/96104eaa/1/" alt="Web Analytics" /></a>
        </div>
    </noscript>
    <!-- End of Statcounter Code -->
    <!--main js file-->
    <script src="{{ asset('assets/frontend') }}/assets/js/main.js"></script>
    @yield('script')
</body>

</html>
