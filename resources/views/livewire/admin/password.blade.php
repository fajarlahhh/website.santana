<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Change Password</h1>
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit">
                        <div class="form-group">
                            <label for="oldPassword">Old Password</label>
                            <input type="password" class="form-control" wire:model="oldPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" wire:model="newPassword" required>
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-success m-r-3" />
                    </form>
                    @if (Session::has('success'))
                        <br>
                        <div class="alert alert-session alert-success fade show">
                            {!! Session::get('success') !!}
                        </div>
                    @endif
                    @if (Session::has('danger'))
                        <br>
                        <div class="alert alert-session alert-danger fade show">
                            {!! Session::get('danger') !!}
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
