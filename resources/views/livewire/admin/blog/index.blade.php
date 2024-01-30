<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Blog</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <div class="form-inline">
                        <a href="/admin/blog/tambah" class="btn text-white btn-primary"><i class="fa fa-plus"></i>
                            New</a>&nbsp;
                        <input type="text" class="form-control" wire:model.lazy="cari" placeholder="Search" />
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Highlight</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $row)
                                <tr>
                                    <td class="align-middle">
                                        {{ ($data->currentpage() - 1) * $data->perpage() + $loop->index + 1 }}
                                    </td>
                                    <td class="align-middle">{{ $row->title }}</td>
                                    <td class="align-middle">{{ $row->description }}</td>
                                    <td class="align-middle">
                                        <img src="{{ Storage::url($row->file) }}" alt="" style="width: 100px">
                                    </td>
                                    <td class="align-middle">{{ $row->highlight }}</td>
                                    <td class="with-btn-group align-middle text-right" nowrap>
                                        <div class="btn-group btn-group-sm" role="group">
                                            @if ($key === $row->getKey())
                                                <button wire:click="delete" class="btn text-white btn-danger">Yes,
                                                    Delete</button>
                                                <button wire:click="setKey"
                                                    class="btn text-white btn-success">Cancel</button>
                                            @else
                                                <a href="/admin/blog/edit/{{ $row->getKey() }}"
                                                    class="btn text-white btn-info"><i
                                                        class="fas fa-sm fa-pencil-alt"></i></a>
                                                <button wire:click="setKey({{ $row->getKey() }})"
                                                    class="btn text-white btn-danger"><i
                                                        class="fas fa-sm fa-trash-alt"></i></button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-lg-10 col-xl-10 col-xs-12">
                            {{ $data->links() }}
                        </div>
                        <div class="col-md-6 col-lg-2 col-xl-2 col-xs-12 text-right">
                            Data Count : {{ $data->total() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
