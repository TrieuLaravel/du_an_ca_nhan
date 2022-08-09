@extends('admin.layout.layout')
@section('content')
<div class="top-content">
    <div class="content">
        <div class="content-left">
           <label for="#">Trang quản lí Website bán hàng</label><br>
           <label for="#">Mời bạn đăng nhập để vào trang quản lí</label>
        </div>
        <div class="content-right">
            <form class="form-login" action="#" method="post">
                @csrf
               <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tài khoản" required><br>
               <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required><br>
               <input type="checkbox" onclick="showPassword()"><label>Hiện mật khẩu</label>
               <input type="submit" class="form-control" value="Đăng nhập">
            </form>
        </div>
    </div>
</div>
@endsection
