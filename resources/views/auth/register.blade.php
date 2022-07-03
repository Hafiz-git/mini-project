<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Registration Page</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/dist/css/adminlte.min.css?v=3.2.0')}}">
<script nonce="ecb404a6-ecf0-4577-aa32-eeb0109e0282">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Bila izrail</b>Datang memanggil</a>
    </div>

        <div class="card">
            <div class="card-body register-card-body">

<!--Register here-->
            <p class="login-box-msg">Register a new membership</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div>
                        <label for="name"></label>
                        <input type="text" id="name" name="name" placeholder="Full name">
                    </div>
                    @error('name')
                    <div style="color: red;">
                        {{ $message }}
                    </div>

                    @enderror

                    <div>
                        <label for="email"></label>
                        <input type="text" id="email" name="email" placeholder="Email">
                    </div>
                    @error('email')
                    <div style="color: red;">
                        {{ $message }}
                    </div>

                    @enderror

                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    @error('password')
                    <div style="color: red;">
                        {{ $message }}
                    </div>

                    @enderror

                    <div>
                        <label for="password_confirmation"></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype password">
                    </div>
                    @error('password_confirmation')
                    <div style="color: red;">
                        {{ $message }}
                    </div>

                    @enderror

                    <div>
                        <button type="submit"> Register</button>
                    </div>
                </form>
</div>
</div>
</div>

<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
