 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $title }}</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 </head>

 <body>
     <header class="header">
         <div class="container">
             <a href={{ route('index') }} class="logo">Spotify</a>
         </div>
     </header>
     <div class="auth-container">
         <div class="auth-card">
             {{ $slot }}
         </div>
     </div>
     <footer class="footer">
         <div class="container">
             <div class="footer-links mb-3">
                 <a href="#">Pháp lý</a>
                 <a href="#">Trung tâm bảo mật</a>
                 <a href="#">Chính sách riêng tư</a>
                 <a href="#">Cookies</a>
                 <a href="#">Giới thiệu</a>
             </div>
             <div class="copyright">
                 © 2025 Spotify
             </div>
         </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>
