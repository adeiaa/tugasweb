<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi untuk Kebaikan</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f4ef;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('fotosedekah1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            padding: 50px;
            color: white;
        }

        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        .hero-section p {
            font-size: 20px;
            margin-top: 10px;
            max-width: 600px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            line-height: 1.5;
        }

        .hero-section a { 
            margin-bottom: 400px;
            background-color: #f5a623;
            width: fit-content;
            color: white;
            padding: 15px 100px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .hero-section a:hover {
            background-color: #d48c1d;
        }

        .features {
            display: flex;
            justify-content: center;
            margin: 50px 0;
            gap: 20px;
            padding: 0 20px;
        }

        .feature-box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            padding: 30px;
            flex: 1;
            text-align: center;
            transition: 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .feature-box h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
        }

        .feature-box p {
            color: #666;
            line-height: 1.6;
        }

        .cta-section {
            background-color: #442D1C;;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .progress-bar {
            background-color: #ddd;
            border-radius: 10px;
            height: 20px;
            margin: 20px auto;
            width: 80%;
            overflow: hidden;
        }

        .progress-bar div {
            background-color: #f5a623;
            width: 70%;
            height: 100%;
        }

        .cta-btn {
            background-color: #f5a623;
            color: #fff;
            padding: 15px 40px;
            font-size: 18px;
            border: 2px solid #f5a623;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #f5d1a3;
            color: #333;
        }

        /* Responsif */
        @media (max-width: 768px) {
        .features {
            flex-direction: column;
            margin: 30px 0;
            }

        .feature-box {
            width: 80%;
            margin: 15px auto;
            }

        .hero-section h1 {
            font-size: 36px;
            }

        .hero-section p {
            font-size: 18px;
            }
        }

        .testimonials-section {
            background-color: #fff5e6; /* Warna latar belakang lembut */
            padding: 50px 20px;
            text-align: center;
            color: #442d1c;
        }

        .testimonials-section h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #f5a623;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .testimonial {
            margin: 20px auto;
            padding: 20px;
            max-width: 700px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonial p {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 10px;
        }

        .testimonial h4 {
            font-size: 16px;
            color: #666;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Jadilah Cahaya <br>Bagi Mereka yang Membutuhkan</h1>
        <p>Setiap kontribusi Anda akan menciptakan senyum baru bagi mereka yang membutuhkan. Mari kita bersama memberikan harapan kepada mereka yang membutuhkan bantuan.</p>
        <a href="isiwebsite.php">Ayo Berdonasi</a>
    </section>

    <!-- Fitur Donasi -->
    <section id="features" class="features">
        <div class="feature-box">
            <h3>Donasi Mudah</h3>
            <p>Donasi dalam hitungan detik, mudah, aman dan amanah.</p>
        </div>
        <div class="feature-box">
            <h3>Berbagai Metode Pembayaran</h3>
            <p>Dukung dengan metode pembayaran yang Anda pilih, mulai dari Transfer Bank hingga E-Wallet.</p>
        </div>
        <div class="feature-box">
            <h3>Untuk Semua Orang</h3>
            <p>Donasi Anda akan menyentuh hati mereka yang paling membutuhkan, dengan transparansi penuh.</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="cta" class="cta-section">
        <div class="progress-bar">
            <div></div>
        </div>
        <p>Sudah terkumpul 70% dari target donasi</p>
        <a href="isiwebsite.php" class="cta-btn">Donasi Sekarang!</a>
    </section>

    <!-- Testimoni Donatur -->
<section id="testimonials" class="testimonials-section">
    <h2>Ucapan Hati Para Donatur</h2>
    <div class="testimonial">
        <p>“Donasi ini telah membuat saya merasa lebih berarti. Prosesnya cepat dan mudah!”</p>
        <h4>- Ahmad, Jakarta</h4>
    </div>
    <div class="testimonial">
        <p>“Saya senang karena bisa membantu orang yang membutuhkan dengan cara yang transparan.”</p>
        <h4>- Maria, Surabaya</h4>
    </div>
    <div class="testimonial">
        <p>“Program donasi ini sungguh luar biasa. Semoga semakin banyak orang yang terbantu!”</p>
        <h4>- Siti, Bandung</h4>
    </div>
    <div>
        <div class="testimonial">
            <p>"Senang rasanya bisa membantu saudara-saudara ku dengan cara yang Insya Allah Amanah hingga sampai ke tangan mereka</P>
            <h4>-Yayang Mutiara, Banda Aceh</h4>
    </div>
</section>

</body>
</html>

