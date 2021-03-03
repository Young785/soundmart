@php
    $user_status = App\User::where("id", $user_id)->first();
@endphp

@if ($user_status->is_typing == "yes")
<small><em><span class="text-muted">Typing...</span></em></small>
@endif