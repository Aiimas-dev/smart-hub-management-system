# Smart-Hub Management System

Project UTS Full Stack menggunakan Laravel 13 dan MySQL untuk mengelola inventaris peralatan studio, booking, dan check-in peralatan melalui REST API.

---

## Teknologi
- Laravel 13
- MySQL
- Laravel Sanctum
- REST API
- Git & GitHub

---

## Fitur
- Login API dengan token
- CRUD Equipment
- CRUD Booking
- Check-in API
- Protected API menggunakan Sanctum

---

## Endpoint API

### Authentication
```http
POST /api/login
```

### Equipment
```http
GET /api/equipments
POST /api/equipments
PUT /api/equipments/{id}
DELETE /api/equipments/{id}
```

### Booking
```http
GET /api/bookings
POST /api/bookings
PUT /api/bookings/{id}
DELETE /api/bookings/{id}
```

### Check-in
```http
POST /api/checkin/{id}
```

---

## Instalasi

```bash
composer install
php artisan migrate
php artisan serve
```

---

## Testing
API testing dilakukan menggunakan Thunder Client.

---

## Git Branching
```bash
git checkout -b feature/email-notification
git merge feature/email-notification
```

---

## Repository
https://github.com/Aiimas-dev/smart-hub-management-system
