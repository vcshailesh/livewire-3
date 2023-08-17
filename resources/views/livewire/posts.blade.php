<div>
    <div class="row py-3">
        @foreach ($this->posts as $post)
            <livewire:post-item lazy :key="$post->id" :post="$post" />
        @endforeach
        @if($selected)
            <div class="col-md-12">
                <livewire:post-detail :post="$selected" lazy>
            </div>
        @endif
    </div>

    <script>
        window.addEventListener('createPostSuccessListener', event => {
            Swal.fire({
                title: 'Success!',
                text: event.detail.message,
                icon: 'success'
            });
        });
    </script>
</div>