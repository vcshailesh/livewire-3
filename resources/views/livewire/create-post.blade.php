<div class="m-2">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Create Post</h3>
            <form wire:submit="savePost">
                <div class="form-group">
                    <label for="title">Select User</label>  
                    <select wire:model="postData.userId" class="form-control" id="user">
                        <option value="">Select User</option>
                        @foreach ($this->users as $key => $user)
                            <option value="{{ $key }}">{{ $user }}</option>    
                        @endforeach
                    </select>
                    @error('postData.userId') <span class="error">{{ $message }}</span> @enderror 
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" wire:model="postData.title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
                    @error('postData.title') <span class="error">{{ $message }}</span> @enderror 
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea wire:model="postData.description" row="5" type="text" class="form-control" id="description" placeholder="Enter Description"></textarea>
                    @error('postData.description') <span class="error">{{ $message }}</span> @enderror 
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>