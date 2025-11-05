<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Successful</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
        }
        
        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .success-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }
        
        .content {
            padding: 40px 30px;
        }
        
        .welcome-text {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            line-height: 1.6;
        }
        
        .info-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 15px;
            align-items: baseline;
        }
        
        .info-row:last-child {
            margin-bottom: 0;
        }
        
        .info-label {
            font-weight: 600;
            color: #667eea;
            min-width: 140px;
            font-size: 14px;
        }
        
        .info-value {
            color: #333;
            font-size: 16px;
            word-break: break-word;
        }
        
        .footer {
            background: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .footer-note {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
            font-size: 12px;
            color: #999;
        }
        
        @media (max-width: 600px) {
            .header h1 {
                font-size: 24px;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .info-row {
                flex-direction: column;
            }
            
            .info-label {
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="success-icon">✓</div>
            <h1>Pendaftaran Berhasil!</h1>
            <p>Selamat datang di platform kami</p>
        </div>
        
        <div class="content">
            <p class="welcome-text">
                Halo! Terima kasih telah mendaftar. Berikut adalah informasi akun Anda:
            </p>
            
            <div class="info-card">
                <div class="info-row">
                    <span class="info-label">Nama Lengkap:</span>
                    <span class="info-value">{{ $data->fullName }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email Mahasiswa:</span>
                    <span class="info-value">{{ $data->studentEmail }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Tanggal Lahir:</span>
                    <span class="info-value">{{ \Carbon\Carbon::parse($data->birthdate)->format('d F Y') }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Tanggal Daftar:</span>
                    <span class="info-value">{{ \Carbon\Carbon::now()->format('d F Y, H:i') }} WIB</span>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p><strong>Langkah Selanjutnya:</strong></p>
            <p>Anda dapat login menggunakan email dan password yang telah Anda daftarkan.</p>
            
            <div class="footer-note">
                <p>Email ini dikirim secara otomatis. Mohon tidak membalas email ini.</p>
                <p>Jika Anda tidak merasa melakukan pendaftaran, harap abaikan email ini.</p>
            </div>
        </div>
    </div>
</body>
</html>