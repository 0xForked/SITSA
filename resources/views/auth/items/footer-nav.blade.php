<div class="text-center mt-5 text-small">
    Copyright &copy; Lorem ipsum dolor sit amet</a>.
    <div class="mt-2">
        <a href="{{ route('docs', '1.x') }}" target="_blank">Dokumentasi</a>
        <div class="bullet"></div>
        <a href="{{ route('faqs') }}" target="_blank">Pertanyaan Umum</a>
        <div class="bullet"></div>
        <a href="{{ route('helps') }}" target="_blank">Pusat Bantuan</a>
    </div>
    <span class="badge badge-pill badge-light mt-3">v{{ config('app.version', '1') }}</span>
</div>