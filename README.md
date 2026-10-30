# 🛒 Sistema de Gestión de Productos | CRUD Laravel

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white">
</p>

<p align="center">
  Aplicación web para la administración de productos mediante operaciones CRUD,
  desarrollada con Laravel, PHP y MySQL.
</p>

---

## 📌 Acerca del proyecto

Este proyecto consiste en el desarrollo de un sistema web de gestión de productos. Su objetivo es implementar las operaciones fundamentales de un CRUD (*Create, Read, Update, Delete*), permitiendo administrar información almacenada en una base de datos.

La aplicación cuenta con una interfaz que facilita el registro, consulta, modificación y eliminación de productos.

**Objetivo:** desarrollar una aplicación funcional utilizando el patrón Modelo-Vista-Controlador (MVC) de Laravel y conectar el sistema con una base de datos MySQL.

## 🖥️ Demostración

A continuación, se presentan capturas del resultado final de la aplicación.

<p align="center">
  <b>Vista principal — Listado de productos</b>
</p>

<img width="1557" height="361" alt="image" src="https://github.com/user-attachments/assets/c5c83c08-b157-4de9-a2c7-ed72bc136c05" />


<p align="center">
  <b>Registro de productos</b>
</p>

<img width="1212" height="593" alt="image" src="https://github.com/user-attachments/assets/e0bc6751-e2fa-40e3-bf31-eb33919c8b0e" />
<img width="787" height="507" alt="image" src="https://github.com/user-attachments/assets/445459b5-24ce-4de9-9e70-68fdc710617e" />


<p align="center">
  <b>Edición de productos</b>
</p>

<img width="720" height="577" alt="image" src="https://github.com/user-attachments/assets/7598923a-e851-43d7-971b-ea1a798b749c" />
<img width="1497" height="472" alt="image" src="https://github.com/user-attachments/assets/b8f8bc26-3722-4250-b039-2f2473fe3e28" />


<p align="center">
  <b>Visualización de detalles</b>
</p>

<img width="916" height="472" alt="image" src="https://github.com/user-attachments/assets/ec2a162d-0598-4e1b-90d7-5c911366b356" />


## ✨ Funcionalidades principales

| Funcionalidad | Descripción |
|:---|:---|
| 🟢 Crear | Registrar nuevos productos. |
| 🔵 Leer | Consultar el listado de productos registrados. |
| 🟡 Actualizar | Modificar la información de un producto. |
| 🔴 Eliminar | Borrar productos de la base de datos. |

### Información administrada

Cada producto contiene:

- `id`: identificador único.
- `description`: descripción del producto.
- `price`: precio.
- `stock`: cantidad disponible.
- `created_at`: fecha de creación.
- `updated_at`: fecha de actualización.

## 🧰 Tecnologías y herramientas

| Tecnología | Uso dentro del proyecto |
|:---|:---|
| PHP 8.3.28 | Lenguaje de programación. |
| Laravel 13 | Framework de desarrollo web. |
| MySQL | Almacenamiento de datos. |
| Bootstrap | Diseño de la interfaz. |
| HTML | Estructura de las páginas. |
| JavaScript | Recursos del frontend. |
| Composer | Gestión de dependencias PHP. |
| Node.js / NPM | Gestión de paquetes frontend. |
| WampServer | Entorno de desarrollo local. |

## 🏗️ Arquitectura del proyecto

La aplicación utiliza el patrón MVC (*Modelo-Vista-Controlador*), que separa la lógica de datos, la presentación y el procesamiento de las solicitudes.

<p align="center">
  <img src="https://img.shields.io/badge/Architecture-MVC-2F6F8F?style=flat-square">
</p>

| Componente | Archivo o ubicación | Responsabilidad |
|:---|:---|:---|
| Modelo | `app/Models/Product.php` | Interacción con la tabla de productos. |
| Controlador | `app/Http/Controllers/ProductController.php` | Procesamiento de las operaciones CRUD. |
| Vistas | `resources/views/product/` | Interfaz presentada al usuario. |
| Rutas | `routes/web.php` | Definición de las rutas de la aplicación. |
| Migraciones | `database/migrations/` | Estructura de la base de datos. |

### Estructura de carpetas

```text
crud/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProductController.php
│   │
│   └── Models/
│       └── Product.php
│
├── database/
│   └── migrations/
│       └── create_products_table.php
│
├── resources/
│   └── views/
│       └── product/
│           ├── create.blade.php
│           ├── edit.blade.php
│           ├── form.blade.php
│           ├── index.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

## ⚙️ Instalación y ejecución

### Requisitos previos

Antes de ejecutar el proyecto, se necesita:

- PHP 8.3 o compatible.
- Composer.
- Node.js y NPM.
- MySQL.
- WampServer o un entorno equivalente.

### 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

Ingresar al directorio:

```bash
cd crud
```

### 2. Instalar dependencias

```bash
composer install
npm install
```

### 3. Configurar el entorno

Crear el archivo `.env`:

```bash
copy .env.example .env
```

Generar la clave de Laravel:

```bash
php artisan key:generate
```

### 4. Configurar MySQL

Crear una base de datos llamada `crud`.

En el archivo `.env`, establecer:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=
```

Los valores de usuario y contraseña deben ajustarse según la configuración local de MySQL.

### 5. Ejecutar las migraciones

```bash
php artisan migrate
```

### 6. Compilar los recursos

```bash
npm run build
```

### 7. Iniciar el servidor

```bash
php artisan serve
```

Abrir en el navegador:

`http://127.0.0.1:8000`

## 🗄️ Base de datos

El proyecto utiliza MySQL y una tabla principal llamada `products`.

| Campo | Tipo de dato | Descripción |
|:---|:---|:---|
| id | BIGINT | Clave primaria. |
| description | VARCHAR | Descripción del producto. |
| price | DECIMAL | Precio del producto. |
| stock | INTEGER | Cantidad disponible. |
| created_at | TIMESTAMP | Fecha de creación. |
| updated_at | TIMESTAMP | Fecha de actualización. |

La estructura se administra mediante las migraciones de Laravel, lo que permite crear y mantener la tabla desde el propio framework.

## 🔄 Rutas y operaciones CRUD

El controlador `ProductController` administra las operaciones del sistema mediante rutas de recursos.

| Método HTTP | Operación | Función |
|:---|:---|:---|
| GET | Index | Mostrar productos. |
| GET | Create | Mostrar formulario de registro. |
| POST | Store | Guardar un producto. |
| GET | Show | Consultar un producto. |
| GET | Edit | Mostrar formulario de edición. |
| PUT/PATCH | Update | Actualizar un producto. |
| DELETE | Destroy | Eliminar un producto. |

## 🧪 Pruebas y solución de errores

Durante la implementación se presentaron inconvenientes de configuración y desarrollo. Se realizaron las siguientes correcciones:

| Inconveniente | Solución |
|:---|:---|
| Problemas con la carga de recursos Vite. | Se revisó la configuración y se compilaron los recursos del frontend. |
| Problemas de configuración del modelo Product. | Se revisaron la tabla asociada y los campos asignables. |
| Vista `products.create` no encontrada. | Se corrigieron las referencias porque la carpeta de vistas se llama `product`, en singular. |
| Columna `description` desconocida. | Se creó una migración para agregar `description`, `price` y `stock`. |
| Variable `$i` no definida. | Se utilizó `$loop->iteration` en la vista Blade. |
| Problemas en las vistas de consulta y edición. | Se corrigieron las referencias de las vistas y los métodos correspondientes del controlador. |

## 📊 Resultados obtenidos

Al finalizar el desarrollo, se logró implementar un sistema funcional para administrar productos.

Se verificaron las siguientes operaciones:

- Registro de nuevos productos.
- Visualización del listado.
- Consulta de detalles individuales.
- Modificación de registros existentes.
- Eliminación de productos.

El proyecto permitió aplicar conocimientos de desarrollo web, bases de datos relacionales, migraciones, rutas, controladores, modelos y vistas Blade.

## 🎓 Aprendizajes

Durante esta práctica se reforzaron conocimientos sobre:

- Desarrollo de aplicaciones con Laravel.
- Organización de proyectos mediante MVC.
- Conexión de Laravel con MySQL.
- Creación y ejecución de migraciones.
- Implementación de operaciones CRUD.
- Uso de rutas y controladores.
- Construcción de interfaces con Blade y Bootstrap.
- Identificación y resolución de errores.

---

<p align="center">
  <b>Desarrollado por Adriana Mendoza</b>
  <br>
  Licenciatura en Ciberseguridad
</p>


