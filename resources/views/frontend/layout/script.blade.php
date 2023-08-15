
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('front/js/jquery.sticky.js')}}"></script>--}}
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('front/js/smoothscroll.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>

<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
    // Check if there are validation errors in the "errors" variable passed from the controller
    @if($errors->any())
    // Concatenate all the error messages into a single string
    var errorMessage = @json(implode("<br>", $errors->all()));

    // Display the error message using SweetAlert
    Swal.fire({
        icon: 'error',
        title: 'Validation Error',
        html: errorMessage,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
    });
    @endif
</script>
<script>
    $(document).ready(function() {
        @if($errors->any())
        $("#validationModal").modal("show");
        @endif
    });
</script>
