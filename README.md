# 🛒 CRUD de Productos | Laravel

<p align="center">
  <strong>Sistema web para la administración de productos</strong>
  <br>
  Aplicación desarrollada con Laravel, PHP, MySQL y Bootstrap.
</p>

<p align="center">
  ![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
  ![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
  ![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
  ![Bootstrap](https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
</p>

---

## 📌 Tabla de contenido

1. [Descripción del proyecto](#-descripción-del-proyecto)
2. [Objetivos](#-objetivos)
3. [Tecnologías utilizadas](#-tecnologías-utilizadas)
4. [Requisitos](#-requisitos)
5. [Instalación y configuración](#-instalación-y-configuración)
6. [Base de datos](#-base-de-datos)
7. [Funcionalidades CRUD](#-funcionalidades-crud)
8. [Estructura del proyecto](#-estructura-del-proyecto)
9. [Errores encontrados y soluciones](#-errores-encontrados-y-soluciones)
10. [Pruebas realizadas](#-pruebas-realizadas)
11. [Evidencias del proyecto](#-evidencias-del-proyecto)
12. [Seguridad](#-seguridad-y-buenas-prácticas)
13. [Conclusiones](#-conclusiones)

---

## 📖 Descripción del proyecto

Este proyecto consiste en el desarrollo de una aplicación web para administrar productos mediante las operaciones CRUD (*Create, Read, Update, Delete*).

La aplicación fue desarrollada utilizando Laravel como framework principal, PHP como lenguaje de programación y MySQL como sistema de gestión de bases de datos.

El sistema permite registrar productos, visualizar la información almacenada, consultar sus detalles, modificar sus datos y eliminarlos cuando sea necesario.

Durante el desarrollo se realizaron configuraciones del entorno, creación de migraciones, implementación de controladores y vistas, conexión con MySQL y pruebas de funcionamiento.

También se identificaron y solucionaron diferentes errores que surgieron durante la implementación.

## 🎯 Objetivos

### Objetivo general

Desarrollar un sistema web utilizando Laravel que permita administrar productos mediante las operaciones CRUD, almacenando y gestionando la información en una base de datos MySQL.

### Objetivos específicos

- Configurar un entorno de desarrollo con Laravel y PHP.
- Establecer una conexión entre Laravel y MySQL.
- Crear la estructura de la tabla de productos mediante migraciones.
- Implementar formularios para registrar y modificar productos.
- Desarrollar las operaciones de consulta y eliminación.
- Aplicar validaciones a los datos ingresados.
- Identificar y corregir errores durante el desarrollo.
- Comprobar el funcionamiento de todas las operaciones del CRUD.

## 🛠️ Tecnologías utilizadas

| Tecnología | Función |
|---|---|
| Laravel 13 | Framework para el desarrollo de la aplicación. |
| PHP 8.3 | Lenguaje de programación. |
| MySQL | Almacenamiento de los datos. |
| Bootstrap | Diseño de la interfaz. |
| HTML | Estructura de las páginas. |
| JavaScript | Recursos de interacción del frontend. |
| Composer | Administración de dependencias PHP. |
| Node.js y npm | Instalación y compilación de recursos. |
| WampServer | Entorno local de desarrollo. |
| Visual Studio Code | Edición del código fuente. |

## 💻 Requisitos

Para ejecutar el proyecto se necesitan:

- Windows.
- PHP 8.3 o compatible.
- Composer.
- MySQL.
- Node.js y npm.
- WampServer u otro entorno compatible.
- Navegador web.

## ⚙️ Instalación y configuración

### 1. Ubicación del proyecto

El proyecto se encuentra en:

```text
C:\wamp64\www\crud
```

Para acceder desde la terminal:

```bash
cd C:\wamp64\www\crud
```

### 2. Instalación de dependencias

Ejecutar los siguientes comandos:

```bash
composer install
npm install
```

Estos comandos instalan las dependencias necesarias para el funcionamiento de Laravel y los recursos del frontend.

### 3. Configuración del entorno

Crear el archivo `.env` a partir del archivo de ejemplo:

```bash
copy .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

### 4. Configuración de MySQL

Se creó una base de datos llamada `crud`.

La conexión local se configuró en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Ejecución de migraciones

Para crear las tablas y aplicar las modificaciones pendientes:

```bash
php artisan migrate
```

### 6. Compilación del frontend

```bash
npm run build
```

### 7. Iniciar el servidor

```bash
php artisan serve
```

Una vez iniciado, acceder desde el navegador:

**http://127.0.0.1:8000**

---

## 🗄️ Base de datos

La aplicación utiliza una base de datos MySQL llamada `crud`.

Dentro de ella se encuentra la tabla `products`, encargada de almacenar los registros.

### Estructura de la tabla `products`

| Campo | Descripción |
|---|---|
| `id` | Identificador único del producto. |
| `description` | Descripción del producto. |
| `price` | Precio del producto. |
| `stock` | Cantidad disponible. |
| `created_at` | Fecha de creación. |
| `updated_at` | Fecha de actualización. |

La estructura se administra mediante migraciones de Laravel, lo que permite crear y modificar columnas sin tener que reconstruir manualmente toda la tabla.

## 🔄 Funcionalidades CRUD

El sistema implementa las cuatro operaciones principales de administración de datos.

### 🟢 1. Create — Crear productos

Permite registrar nuevos productos mediante un formulario.

Los campos solicitados son:

- Descripción.
- Precio.
- Stock.

Antes de guardar la información, Laravel realiza validaciones para comprobar que los datos sean correctos.

### 🔵 2. Read — Consultar productos

Permite visualizar los productos registrados en la base de datos.

El listado muestra la información principal de cada producto y proporciona acceso a las opciones de consulta individual, edición y eliminación.

### 🟡 3. Update — Editar productos

Permite modificar los datos de un producto existente.

Al seleccionar la opción de edición, se muestra un formulario con los valores actuales. Después de realizar los cambios, se pueden guardar mediante la opción correspondiente.

### 🔴 4. Delete — Eliminar productos

Permite eliminar registros de la base de datos.

Antes de ejecutar la eliminación, el sistema solicita una confirmación para evitar que el usuario borre un producto accidentalmente.

---

## 📂 Estructura del proyecto

Los archivos principales utilizados para desarrollar el CRUD son:

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
│       └── Migraciones de productos
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
├── .env
└── README.md
```

### Descripción de los archivos principales

| Archivo | Responsabilidad |
|---|---|
| `Product.php` | Modelo que representa los productos. |
| `ProductController.php` | Controla las operaciones CRUD. |
| `index.blade.php` | Muestra el listado de productos. |
| `create.blade.php` | Formulario para crear productos. |
| `edit.blade.php` | Formulario para modificar productos. |
| `show.blade.php` | Muestra los detalles del producto. |
| `form.blade.php` | Vista parcial del formulario. |
| `web.php` | Define las rutas del sistema. |

**Nota:** las vistas están dentro de `product` (singular), mientras que el recurso de las rutas se llama `products` (plural).

---

## 🐛 Errores encontrados y soluciones

Durante el desarrollo se presentaron diferentes inconvenientes técnicos. Cada uno fue identificado y corregido para conseguir el funcionamiento esperado.

### 1. Problema con los recursos de Vite

**Descripción:** la página inicial presentaba un error al cargar los recursos del frontend.

**Causa:** la vista inicial tenía referencias incorrectas a los archivos de estilos y JavaScript.

**Solución:** se corrigió el archivo `welcome.blade.php` para utilizar los recursos correspondientes y se ejecutó:

```bash
npm run build
```

### 2. Modelo Product no encontrado

**Descripción:** Laravel no reconocía correctamente la clase `App\Models\Product`.

**Causa:** el modelo necesitaba estar definido correctamente para trabajar con la tabla de productos.

**Solución:** se corrigió `app/Models/Product.php`, especificando la tabla `products` y los campos asignables:

```php
protected $fillable = [
    'description',
    'price',
    'stock',
];
```

También se actualizaron las referencias de autoload y se limpiaron las cachés.

### 3. Vista products.create no encontrada

**Descripción:** Laravel mostraba el mensaje:

```text
No se encontró la vista [products.create].
```

**Causa:** el controlador buscaba una carpeta llamada `products`, pero las vistas estaban guardadas en `product`.

**Solución:** se corrigieron las referencias del controlador para utilizar la carpeta correcta:

```php
return view('product.create');
```

Se aplicó el mismo cambio a las demás vistas.

### 4. Columna description inexistente

**Descripción:** al intentar guardar un producto, MySQL mostraba:

```text
SQLSTATE[42S22]: Column not found: 1054
Unknown column 'description' in 'field list'.
```

**Causa:** la tabla `products` solamente contenía inicialmente los campos `id`, `created_at` y `updated_at`.

**Solución:** se creó una nueva migración para agregar las columnas que necesitaba el sistema:

```php
$table->string('description')->nullable();
$table->decimal('price', 10, 2)->default(0);
$table->unsignedInteger('stock')->default(0);
```

Posteriormente se ejecutó:

```bash
php artisan migrate
```

Se comprobó la estructura de la tabla mediante Laravel Tinker y se confirmó que las columnas ya estaban disponibles.

### 5. Variable $i indefinida

**Descripción:** al abrir el listado de productos apareció el error:

```text
Undefined variable $i
```

**Causa:** la vista intentaba utilizar la variable `$i` para numerar los productos, pero esta no había sido inicializada.

**Solución:** se reemplazó el contador por el mecanismo de iteración de Blade:

```php
{{ $loop->iteration }}
```

Así, cada producto recibe automáticamente un número consecutivo.

### 6. Problemas en las funciones Ver y Editar

**Descripción:** las opciones para consultar y editar productos no funcionaban correctamente.

**Causa:** era necesario ajustar las referencias de las vistas y los formularios para que coincidieran con los métodos del controlador.

**Solución:** se corrigieron los métodos `show`, `edit` y `update` del controlador, además de las vistas `show.blade.php` y `edit.blade.php`.

Se verificaron las rutas utilizadas para consultar los detalles y guardar las modificaciones.

### 7. Limpieza de caché

Durante las correcciones se ejecutaron los siguientes comandos:

```bash
php artisan view:clear
php artisan optimize:clear
```

Esto permitió limpiar las vistas compiladas y las cachés de Laravel para que los cambios realizados fueran reconocidos correctamente.

---

## 🧪 Pruebas realizadas

Para comprobar el funcionamiento del sistema se realizaron pruebas desde el navegador.

| Operación | Comprobación | Resultado |
|---|---|---|
| Crear | Registrar un producto nuevo. | Correcto |
| Listar | Mostrar los productos registrados. | Correcto |
| Ver | Consultar los detalles de un producto. | Correcto |
| Editar | Modificar los datos de un producto. | Correcto |
| Eliminar | Borrar un producto del sistema. | Correcto |

### Datos utilizados en la prueba

Se utilizó el siguiente registro de ejemplo:

| Campo | Valor |
|---|---|
| Descripción | Teclado |
| Precio | 15.50 |
| Stock | 10 |

Después de corregir la estructura de la base de datos y las vistas, se pudo completar el proceso de administración del producto.

---

## 📸 Evidencias del proyecto

Las siguientes figuras corresponden a los resultados finales disponibles del sistema.

No se dispone de capturas de todos los pasos iniciales ni de los errores presentados durante el desarrollo. Por ello, estos se documentaron mediante sus mensajes, causas y soluciones en la sección anterior.

### Figura 1. Listado de productos

Vista principal donde se muestran los productos registrados y las opciones disponibles para administrarlos.

**Captura:**

![Figura 1 - Listado de productos](capturas/listado.png)

### Figura 2. Registro de productos

Formulario utilizado para introducir la descripción, el precio y el stock de un producto.

**Captura:**

![Figura 2 - Crear producto](capturas/crear.png)

### Figura 3. Detalles del producto

Vista individual que permite consultar la información de un producto seleccionado.

**Captura:**

![Figura 3 - Detalles del producto](capturas/ver.png)

### Figura 4. Edición de productos

Formulario que permite modificar la información de un producto existente.

**Captura:**

![Figura 4 - Editar producto](capturas/editar.png)

### Figura 5. Resultado final

Evidencia del funcionamiento de la aplicación después de realizar las correcciones y pruebas correspondientes.

**Captura:**

![Figura 5 - Resultado final](capturas/resultado-final.png)

> **Importante:** los nombres de las imágenes son ejemplos. Deben sustituirse por los nombres reales de las capturas que se incluyan en el repositorio. Si no tienes una captura de alguna función, elimina esa figura en lugar de inventar una evidencia.

---

## 🔐 Seguridad y buenas prácticas

Durante el desarrollo se aplicaron las siguientes prácticas:

- Validación de los datos antes de guardar o actualizar registros.
- Uso de `@csrf` para proteger los formularios.
- Utilización de los métodos HTTP correspondientes para las operaciones de actualización y eliminación.
- Separación de responsabilidades entre modelos, controladores y vistas.
- Uso de migraciones para administrar la estructura de la base de datos.
- Configuración de la conexión mediante variables de entorno.
- Protección del archivo `.env`, evitando publicar credenciales en GitHub.

**Importante:** nunca se debe subir el archivo `.env` con credenciales reales a un repositorio público. Se debe conservar el archivo `.env.example` sin contraseñas privadas.

## 🎓 Conclusiones

El desarrollo de este proyecto permitió comprender la implementación de un sistema CRUD utilizando Laravel y MySQL.

Durante el proceso se trabajó con modelos, controladores, rutas, vistas Blade y migraciones, relacionando cada uno de estos componentes para conseguir una aplicación funcional.

Los errores encontrados permitieron reforzar conocimientos sobre la estructura de las vistas, la conexión con la base de datos, la definición de columnas y el manejo de variables dentro de Blade.

Finalmente, se consiguió implementar un sistema que permite crear, consultar, editar y eliminar productos desde una interfaz web, cumpliendo con las funcionalidades principales solicitadas para un CRUD.

---

<p align="center">
  <strong>Proyecto CRUD de Productos</strong>
  <br>
  Desarrollado con Laravel y MySQL
  <br><br>
  <sub>Licenciatura en Ciberseguridad</sub>
</p>
