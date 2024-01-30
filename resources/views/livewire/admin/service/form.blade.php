<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">{{ $key ? 'Edit' : 'New' }} Service</h1>
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
                            <label class="control-label">Icon</label>
                            <div wire:ignore>
                                <select name="" class="form-control selectpicker" data-live-search="true"
                                    id="" wire:model="icon">
                                    <option value="bi-123" data-icon="fa-heart">bi-123</option>
                                </select>
                            </div>
                            @error('title')
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
