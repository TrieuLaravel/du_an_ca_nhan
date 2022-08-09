@extends('admin.layout.layout')
@section('content')
<div class="top-content">
    <div class="content">
        <div class="content-left">
           <label for="#">Trang quản lí Website bán hàng</label><br>
           <label for="#">Mời bạn đăng nhập để vào trang quản lí</label>
        </div>
        <div class="content-right">
            <form class="form-login" action="{{ route('postLogin') }}" method="post">
                @csrf
               <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tài khoản" required><br>
               <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required><br>
               <input type="checkbox" onclick="showPassword()"><label>Hiện mật khẩu</label>
               <input type="submit" class="form-control" value="Đăng nhập">
            </form>
        </div>
    </div>
</div>
<script>
        let username = document.getElementById('username');
        let password = document.getElementById('password');
        if(username.oninvalid){
            username.oninvalid = function(event) {
                event.target.setCustomValidity('Mời bạn nhập tài khoản');
            }
        }
        if(password.onvalid){
            password.oninvalid = function(event) {
            event.target.setCustomValidity('Mời bạn nhập mật khẩu');
            }
        }
        function showPassword() {
            let show = document.getElementById('password')
            if(show.type=="password"){
                show.type="text"
            }else{
                show.type="password"
            }
        }
</script>
@endsection
