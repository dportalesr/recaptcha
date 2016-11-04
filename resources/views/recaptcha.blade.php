<script src="https://www.google.com/recaptcha/api.js?hl={{ $language }}" async defer></script>
<div class="g-recaptcha"@foreach($data as $key => $value) {{ $key }}="{{ $value }}"@endforeach></div>
