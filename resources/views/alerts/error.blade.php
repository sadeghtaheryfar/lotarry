@if (session('swal-error'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                title: 'خطا در ارسال اطلاعات !',
                text: '{!! session('swal-error') !!}',
                icon: 'error',
                confirmButtonText: 'باشه',
            })
        })
    </script>
@endif
