<div>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="javascript:;" class="h4"><b>Admin</b>Area</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form wire:submit.prevent="submit">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="UID" wire:model="uid" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" wire:model="password"
                            required>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            &nbsp;
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                @if (Session::has('danger'))
                    <br>
                    <div class="alert alert-session alert-danger fade show">
                        {!! Session::get('danger') !!}
                    </div>
                @endif
                <hr>
                <div class="text-center">
                    Saptasana Santana 2024
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
</div>
