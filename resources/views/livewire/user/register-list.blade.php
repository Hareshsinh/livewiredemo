<div>
    @foreach ($users as $user)
        @include('includes.user', $user)
    @endforeach
</div>
