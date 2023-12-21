@section('scripts')
    <script src="{{ asset('admin-pannle/scripts/script.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.23.0-lts/full/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            CKEDITOR.replace('content', {
                width: "100%",
                language: "fa",
            })
        })
    </script>
@show
