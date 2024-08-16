<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>@csrf</h1>
<h2> CSRF là gì?</h2>
CSRF (Cross-Site Request Forgery) là một loại tấn công mà hacker lừa người dùng thực hiện các hành động không mong muốn trên một trang web mà họ đã xác thực (đã đăng nhập). Hacker có thể làm điều này bằng cách tạo một yêu cầu từ một trang web độc hại đến trang web mà người dùng đã đăng nhập.

<h2>@csrf trong Laravel</h2>
Laravel tự động bảo vệ ứng dụng khỏi các cuộc tấn công CSRF bằng cách thêm một token CSRF vào tất cả các form. Mỗi token CSRF là duy nhất cho mỗi phiên người dùng và giúp Laravel xác thực rằng yêu cầu được gửi từ form đã tạo ra token, chứ không phải từ một trang web độc hại.

<h2>Tại sao cần @csrf?</h2>
Bảo mật: Giúp bảo vệ ứng dụng khỏi các cuộc tấn công CSRF.
Dễ sử dụng: Laravel tự động xử lý việc tạo và xác thực token CSRF, giúp việc bảo vệ ứng dụng trở nên dễ dàng hơn.
Sử dụng @csrf là một phần quan trọng để bảo vệ các form trong ứng dụng Laravel của bạn khỏi các cuộc tấn công tiềm ẩn.

<h1>Câu lệnh PHP Larevel</h1>
Câu lệnh tạo serve:
php artisan serve

Câu lệnh tinker:
php artisan tinker 
echo bcrypt('admin1234') 

Câu lệnh migrate database:
php artisan migrate

Câu lệnh xóa cache để chạy dự án khác:
php artisan config:cache 
