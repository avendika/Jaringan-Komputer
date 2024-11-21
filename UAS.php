<?php
$nama = "Ryu";
$alamat = "Perum ITS Surabaya";
$email = "dhoto@pens.ac.id";
$fb = "http://fb.com/iseng4h";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { 
            width: 500px; 
            margin: 0 auto; 
            border: 1px solid #ccc; 
            padding: 20px;
        }
        .biodata { display: flex; }
        .biodata-col { flex: 1; text-align: left; }
        .footer { 
            margin-top: 20px; 
            display: flex; 
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><strong>Biodata</strong></h2>
        
        <div class="biodata">
            <div class="biodata-col">
                <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            </div>
            <div class="biodata-col">
                <p><strong>Email:</strong> 
                    <a href="mailto:<?php echo $email; ?>">
                        <?php echo $email; ?>
                    </a>
                </p>
                <p><strong>Facebook:</strong> 
                    <a href="<?php echo $fb; ?>" target="_blank">
                        <?php echo $fb; ?>
                    </a>
                </p>
            </div>
        </div>

        <div class="footer">
            <span>- iseng4h -</span>
        </div>
    </div>
</body>
</html>