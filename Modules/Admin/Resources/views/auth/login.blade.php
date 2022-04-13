<form action="{{ route('admin.auth.authenticate') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">email</label>
        <input name="email" placeholder="メールアドレス" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">password</label>
        <div class="input-pass">
            <input name="password" type="password" placeholder="パスワード" class="form-control">
            {{-- <span class="eyes"><img class="img-fluid" src="{{ asset('admin/images/eyes_disable.png') }}" /></span> --}}
        </div>
    </div>
    <div class="text-danger">
        @error("auth_error")
            {{$message}}
        @enderror
    </div>
    <button class="btn btn-blue">guiwr</button>
</form>
