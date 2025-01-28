<p align="center">
  <a href="https://laravel.com/" target="blank">
    <img src="https://laravel.com/img/logomark.min.svg" width="200" alt="Laravel Logo" />
  </a>
</p>

<p align="center">
  <a href="https://hub.docker.com/" target="_blank">
    <img src="https://img.shields.io/badge/Docker-Ready-blue?logo=docker" alt="Docker Ready" />
  </a>
  <a href="https://laravel.com/" target="_blank">
    <img src="https://img.shields.io/badge/Laravel-Framework-red?logo=laravel" alt="Laravel Framework" />
  </a>
  <a href="https://tailwindcss.com/" target="_blank">
    <img src="https://img.shields.io/badge/TailwindCSS-Enabled-blue?logo=tailwindcss" alt="Tailwind CSS" />
  </a>
</p>

<p align="center">
  Esta aplicación web similar a Instagram está desarrollada utilizando <strong>Laravel</strong>, junto con <strong>Docker</strong> para la gestión de contenedores.
</p>

---

## 📦 Características principales

- **Framework Laravel**: Una solución robusta para aplicaciones web modernas.
- **Docker Compose**: Configuración multi-servicio para ejecutar la aplicación y sus dependencias.
- **Base de datos MySQL**: Almacenamiento de datos confiable.
- **Mailpit**: Herramienta para pruebas de correo electrónico en desarrollo.
- **Vite y TailwindCSS**: Herramientas para la construcción de interfaces de usuario.

---

## 🐳 Configuración de Docker

### 🔧 Servicios

- **laravel.test**: Contenedor principal que ejecuta la aplicación Laravel en PHP 8.3.
- **mysql**: Base de datos MySQL configurada para desarrolladores.
- **redis**: Servicio de caché para mejorar el rendimiento de la aplicación.
- **meilisearch**: Motor de búsqueda para funcionalidades avanzadas.
- **mailpit**: Servidor SMTP y panel para pruebas de correos electrónicos.
- **selenium**: Navegador Chrome en contenedor para pruebas automatizadas.

### 🚀 Despliegue
```bash
# Backend
docker compose up -d
```
```bash
# Frontend
npm run dev
```
---

## ✉️ Envío de correos Mailpit
- **Mailpit** está configurado en el archivo `.env` de Laravel para enviar correos electrónicos a través de SMTP.
- En el contenedor Docker, Mailpit se ejecuta en el puerto `1025` para el servidor SMTP y en el puerto `8025` para la interfaz web.
- http://localhost:8025
---

## ⚙️ Variables de Entorno

Configura las variables de entorno copiando el archivo `.env.example` y renombrándolo a `.env` en la raíz del proyecto.

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=your_username
DB_PASSWORD=your_password
