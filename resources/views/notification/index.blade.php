<x-layouts.main>
    <x-slot:title>
        Xabarlar
    </x-slot:title>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h1 class="section-title mb-3">Xabarlar</h1>
                </div>
            </div>
            @foreach ($notifications as $notification)
            <div class="border mb-3 p-4 rounded">
                <div class="position-relative mb-4">
                    @if($notification->read_at==null)
                    <div class="blog-date">
                        <small class="text-white text-uppercase">New</small>
                    </div>
                    @endif
                </div>
                <div class="d-flex mb-2">
                    <a class="text-danger text-uppercase font-weight-medium">{{ $notification->data['created_at']}}</a>
                </div>
                <h5 class="font-weight-medium mb-2">{{ $notification->data['title'] }}</h5>
                <p class="mb-4">{{ 'yangi po\'st yaratildi. Id:'.$notification->data['post_id'] }}</p>
                @if($notification->read_at==null)
                <a class="btn btn-sm btn-primary py-2" href="{{ route('notifications.read',['notification' => $notification->id]) }}">O'qildi</a>
                @endif
            </div>
            @endforeach
            {{ $notifications->links() }}
        </div>
    </div>
    <!-- Blog End -->
</x-layouts.main>
