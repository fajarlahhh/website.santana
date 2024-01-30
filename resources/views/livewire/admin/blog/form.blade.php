<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">{{ $key ? 'Edit' : 'New' }} Blog</h1>
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
                        <div class="form-group">
                            <label for="file">File </label>
                            <div>
                                <input type="file" accept="image/*" wire:model="file" id="file">
                            </div>
                            @if ($data->file)
                                <img src="{{ Storage::url($data->file) }}" alt="" class="width-full">
                            @endif
                            @error('file')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="highlight" wire:model="highlight">
                            <label class="form-check-label" for="highlight">Highlight</label>
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
