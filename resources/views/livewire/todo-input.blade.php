<div>
    <form wire:submit='$parent.addTodo'>
        <div class="form-group">
            <label for="title">Todo Title</label>
            <input type="text" wire:model="value" class="form-control" id="title" placeholder="Enter Todo">
        </div>
        <a class="btn btn-primary mt-2" wire:click='$parent.alert'>Alert</a>
    </form>
    
</div>
