@extends('Layout_user')
@section('title')
    Register
@endsection
@section('content')
    <!-- Main Container -->
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <article class="col-main">
                        <div class="account-login">
                            <div class="page-title">
                                <h2 style="padding: 10px 0;">Đăng nhập hoặc đăng ký tài khoản</h2>
                            </div>
                            <fieldset class="col2-set">
                                <div class="col-1 new-users"><strong>Đăng nhập</strong>
                                    <div class="content">
                                        <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn,
                                         lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn đặt hàng trong tài khoản của mình, v.v.</p>
                                        <div class="buttons-set">
                                            <button onclick="window.location='{{ route('login.index') }}';"
                                                class="button create-account" type="button"><span>Đăng nhập</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 registered-users"><strong>Khách Hàng Đăng Ký</strong>
                                    <form action="{{ route('logout.store') }}" method="post">
                                        @csrf
                                        <div class="content">
                                            <p>Nếu bạn có tài khoản với chúng tôi, thì vui lòng đăng nhập.</p>
                                            <ul class="form-list">
                                                <li>
                                                    <label for="email">Tên Đầy Đủ <span
                                                            class="required">*</span></label>
                                                    <input type="text" title="Email Address"
                                                        class="input-text required-entry" id="name"
                                                        value="{{ old('name_re') }}" name="name_re">
                                                </li>
                                                <li>
                                                    <label for="email">Tên Người Dùng<span
                                                            class="required">*</span></label>
                                                    <input type="text" title="Email Address"
                                                        class="input-text required-entry" id="username"
                                                        value="{{ old('username_re') }}" name="username_re">
                                                </li>
                                                <li>
                                                    <label for="email">Địa Chỉ Email <span
                                                            class="required">*</span></label>
                                                    <input type="text" title="Email Address"
                                                        class="input-text required-entry" id="email"
                                                        value="{{ old('email_re') }}" name="email_re">
                                                </li>
                                                <li>
                                                    <label for="pass">Mật Khẩu <span class="required">*</span></label>
                                                    <input type="password" title="Password" id="pass"
                                                        class="input-text required-entry validate-password"
                                                        name="password_re">
                                                </li>
                                            </ul>
                                            <div class="buttons-set">
                                                <button id="send2" name="send" type="submit"
                                                    class="button login"><span>Đăng Ký</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
@endsection
@section('js')
<script>
    @if($errors->any())
        @foreach($errors->all() as $err)
            toastr.error('{{$err}}', 'Notification',{timeOut: 7000});
        @endforeach
    @endif
</script>
@endsection
