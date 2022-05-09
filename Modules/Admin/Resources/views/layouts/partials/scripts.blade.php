<!-- JAVASCRIPT -->
<script src="{{ asset('manager/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('manager/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('manager/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('manager/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('manager/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('manager/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
{{-- <script src="{{ asset('manager/js/plugins.js') }}"></script> --}}

<!-- apexcharts -->
{{-- <script src="{{ asset('manager/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

<!-- Vector map-->
<script src="{{ asset('manager/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('manager/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('manager/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
{{-- <script src="{{ asset('manager/js/pages/dashboard-ecommerce.init.js') }}"></script> --}}

<!-- App js -->
<script src="{{ asset('manager/js/app.js') }}"></script>
<script src="{{ asset('manager/js/tyniMCE.min.js') }}"></script>
<script>
    tinymce.init({
      selector: 'textarea#content',
          // selector: ,
          height: 400,
          plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'table emoticons template paste help'
          ],
          toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
          menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css',

    });
</script>
@yield('scripts')

