# Simple PHP MVC Framework

Bu framework, PHP 8.4 ve üzeri sürümler için tasarlanmış basit ve bağımsız bir MVC framework'tür.

## Kurulum

1. Projeyi klonlayın
2. Composer'ı yükleyin: `composer install`
3. `.htaccess` dosyasının çalıştığından emin olun
4. Veritabanı ayarlarını `app/Models/User.php` dosyasında yapılandırın

## Dizin Yapısı

```
app/
├── Controllers/     # Controller sınıfları
├── Models/         # Model sınıfları
├── Views/          # View dosyaları
└── Core/           # Framework çekirdek sınıfları
```

## Kullanım

### Controller Oluşturma

```php
<?php
namespace App\Controllers;

use App\Core\Controller;

class ExampleController extends Controller {
    public function index() {
        $data = ['title' => 'Example'];
        $this->view('example/index', $data);
    }
}
```

### Model Oluşturma

```php
<?php
namespace App\Models;

class Example {
    private $db;

    public function __construct() {
        $this->db = new \PDO('mysql:host=localhost;dbname=database', 'user', 'pass');
    }

    public function getData() {
        // Veritabanı işlemleri
    }
}
```

### View Oluşturma

```php
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <!-- View içeriği -->
</body>
</html>
```

## URL Yapısı

- Ana sayfa: `http://localhost/`
- Controller/Method: `http://localhost/controller/method`
- Parametreler: `http://localhost/controller/method/param1/param2`

## Örnek Kullanım

1. Controller'da model kullanımı:
```php
$userModel = $this->model('User');
$users = $userModel->getAll();
```

2. View'a veri gönderme:
```php
$data = ['users' => $users];
$this->view('users/index', $data);
```

3. View'da veri kullanımı:
```php
<?php foreach($users as $user): ?>
    <p><?php echo $user['name']; ?></p>
<?php endforeach; ?>
```

## Güvenlik

- URL'ler otomatik olarak filtrelenir
- PDO kullanılarak SQL injection önlenir
- XSS koruması için veriler view'da escape edilmelidir

## Lisans

MIT License 