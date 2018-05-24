@if (session('status'))
    <div class="one-whole text-center float-left alert-container">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
@endif

@if (session('statuserror'))
    <div class="one-whole text-center">
        <div class="alert alert-danger">
            {{ session('statuserror') }}
        </div>
    </div>
@endif