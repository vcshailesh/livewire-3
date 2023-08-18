<div class="m-2">
    <div class="card mb-2">
        <div class="card-body">
            <h3 class="card-title" x-on-transition>Todo Lists</h3>
            @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Add Todo</h3>
            <livewire:todo-input wire:model='todo'/>
        </div>
    </div>
</div>