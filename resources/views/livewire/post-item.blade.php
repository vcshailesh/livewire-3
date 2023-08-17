<div class="col-md-3 mb-3" wire:click="$parent.selectPost('{{ $post->id }}')" style="cursor: pointer">
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->user->name }}</h6>
            <p class="card-text">{{ $post->description }}</p>
        </div>
    </div>    
</div>
