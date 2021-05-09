@if($message = Session::get('success'))
    <script>
        alertify.success('{{ $message }}'); 
    </script>
@endif
@if($message = Session::get('error'))
    <script>
        alertify.error('{{ $message }}'); 
    </script>
@endif
@if($message = Session::get('warning'))
    <script>
        alertify.warning('{{ $message }}'); 
    </script>
@endif