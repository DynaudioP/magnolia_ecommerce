{{-- resources/views/components/swal.blade.php --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success') || session('error') || $errors->any())
    <script>
        window.addEventListener('pageshow', function(event) {
            // ⛔ Cegah muncul lagi saat halaman dari cache (Back/Forward)
            const nav = performance.getEntriesByType('navigation')[0];
            if (event.persisted || (nav && nav.type === 'back_forward')) return;

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                });
            @elseif (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                });
            @elseif ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Form Salah!',
                    text: 'Mohon periksa kembali input Anda.',
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                });
            @endif
        });
    </script>
@endif
