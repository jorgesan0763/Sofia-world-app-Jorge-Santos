# 🌍 Sofia World App

Aplicación web desarrollada para Sofia Restrepo, que permite explorar las ciudades 
del mundo según el país seleccionado, mostrando las ciudades con mayor y menor 
población.

## 📋 Descripción

La aplicación permite:
- Seleccionar cualquier país disponible en la base de datos
- Ver el **Top 10 de ciudades con mayor población** del país seleccionado
- Ver el **Top 10 de ciudades con menor población** del país seleccionado

## 🛠️ Tecnologías utilizadas

- **PHP** 8.2
- **Laravel** 10.x
- **MySQL** - Base de datos World
- **Bootstrap** 5.3
- **JavaScript** (Fetch API)

## 📁 Estructura del proyecto
```
sofia-world-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── WorldController.php   # Controlador principal
│   └── Models/
│       ├── Country.php               # Modelo de países
│       └── City.php                  # Modelo de ciudades
├── resources/
│   └── views/
│       └── world.blade.php           # Vista principal
├── routes/
│   └── web.php                       # Definición de rutas
└── docs/
    └── diagrama-bd.png               # Diagrama de base de datos
```

## 🗄️ Diagrama de base de datos

![Diagrama BD](database/diagrama_db_world.pdf)

## ⚙️ Instalación y configuración

### Requisitos previos
- PHP 8.1 o superior
- Composer
- MySQL
- Git

### Pasos

1. **Clona el repositorio**
```bash
git clone https://github.com/jorgesan0763/sofia-world-app-Jorge-Santos.git
cd sofia-world-app
```

2. **Instala las dependencias**
```bash
composer install
```

3. **Configura el archivo de entorno**
```bash
cp .env.example .env
```
Edita el `.env` con tus credenciales de MySQL:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=world
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

4. **Genera la clave de la aplicación**
```bash
php artisan key:generate
```

5. **Importa la base de datos**
```bash
mysql -u tu_usuario -p world < world.sql
```

6. **Levanta el servidor**
```bash
php artisan serve
```

7. **Abre en el navegador**
```
http://127.0.0.1:8000
```

## 📌 Rutas disponibles

| Método | Ruta | Descripción |
|--------|------|-------------|
| GET | `/` | Pantalla principal con selector de países |
| GET | `/cities/{countryCode}` | Retorna ciudades del país en JSON |

## 👨‍💻 Autor

**[Jorge Elias Santos Acosta]**  
[Jornel2439@gmail.com]  
[](https://github.com/jorgesan0763)[]

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
