<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Settings</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0" style="display: block;">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
                <a href="{{route('settings.index')}}" class="nav-link @if(Route::is('settings.index')) active @endif">
                    <i class="fa fa-cog"></i> General Settings
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('settings.payment') }}" class="nav-link @if(Route::is('settings.payment')) active @endif">
                    <i class="fa fa-credit-card"></i> Payment
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('settings.notification')}}" class="nav-link @if(Route::is('settings.notification')) active @endif">
                    <i class="far fa-bell"></i> Push Notification
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.list') }}" class="nav-link @if(Route::is('users.list') || Route::is('users.edit') || Route::is('register')) active @endif">
                    <i class="far fa-file-alt"></i> Users
                </a>
            </li>
        </ul>
    </div>
    <!-- /.card-body -->
</div><!-- end of card -->
