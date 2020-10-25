@if ($message = Session::get('status'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif
