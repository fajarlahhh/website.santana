<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">About</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form wire:submit.prevent="submit">
                <div class="card card-default">
                    <div class="card-header">
                        Form
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" autocomplete="off" wire:model="title" />
                            @error('title')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" rows="2" wire:model="description"></textarea>
                            @error('description')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Save" class="btn text-white btn-success m-r-3" />
                        <a href="/admin/blog" class="btn text-white btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
