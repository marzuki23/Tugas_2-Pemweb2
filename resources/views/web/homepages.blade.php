@php
    $cards = [
        [
            'img' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/10/dbf962c2-fe24-41f3-b93b-625fd4e74240.jpg',
            'judul' => 'Baju koko Pria Adam Navy',
            'desk' => 'Baju Koko Pria Adam Navy berdesain modern dengan warna navy elegan. Nyaman dipakai, cocok untuk ibadah dan acara formal.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://down-id.img.susercontent.com/file/b985f113ef1d0fdfa8139f0fd494868d',
            'judul' => 'Baju Koko Anak Pria',
            'desk' => 'Baju Koko Anak Pria berdesain nyaman dan stylish, cocok untuk ibadah dan acara formal. Terbuat dari bahan berkualitas dengan model modern.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://baranewsaceh.co/wp-content/uploads/2024/03/Screenshot_1119_resize.jpg',
            'judul' => 'Sarung BHS',
            'desk' => 'Sarung BHS adalah sarung premium dengan motif elegan dan bahan berkualitas tinggi. Nyaman dipakai, cocok untuk ibadah dan acara resmi.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/3/19/1d17b76b-0107-4ae1-9991-1b7b21ac43ce.jpg',
            'judul' => 'Peci Atlas',
            'desk' => 'Peci Atlas adalah peci berkualitas dengan desain elegan dan bahan yang berkualitas. Nyaman dipakai, Cocok untuk ibadah dan acara formal.',
            'btn' => 'Beli Sekarang'
        ],
    ];
@endphp

<x-layout>
    <div class="container py-5">
        <x-slot name="title">{{ $title }}</x-slot>

        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold text-primary border-bottom pb-2 mb-4">Busana Muslim Kami yang Masih Tersedia</h2>
            </div>
        </div>

        <div class=" d-flex flex-wrap g-2 mb-5">
            @foreach ($cards as $card)
                <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                    <x-card img="{{ $card['img'] }}">
                        <x-slot name="judul">{{ $card['judul'] }}</x-slot>
                        <x-slot name="desk">{{ $card['desk'] }}</x-slot>
                        <x-slot name="button">
                            <x-button name="slot" class="btn-primary w-100">
                                <i class="bi bi-cart-plus me-2"></i>{{ $card['btn'] }}
                            </x-button>
                        </x-slot>
                    </x-card>
                </div>
            @endforeach
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <h3>Ingin lacak pesanan anda?</h3>
            <x-alert>
                <x-slot name="pesan"><i class="bi bi-search me-3"></i>Lacak</x-slot>
            </x-alert>
        </div>

    </div>
</x-layout>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div');
        wrapper.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow-lg" style="z-index: 1050; min-width: 300px;" role="alert">
                <i class="bi ${type === 'success' ? 'bi-check-circle' : 'bi-exclamation-circle'} me-2"></i>${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        alertPlaceholder.append(wrapper);

        setTimeout(() => {
            const alert = wrapper.querySelector('.alert');
            alert.classList.add('fade');
            setTimeout(() => wrapper.remove(), 300);
        }, 3000);
    };

    document.getElementById('liveAlertBtn').addEventListener('click', () => {
        appendAlert('Anda belum memesan', 'success');
    });
</script>