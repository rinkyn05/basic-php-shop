# Rinkyn Codes - Tienda PHP Avanzada - Sitio Web Completo - Estilo Tienda Dinámica 🌐

Este es un proyecto avanzado de una tienda en línea dinámica, diseñado con PHP, HTML, CSS y JavaScript. El objetivo es crear una plataforma profesional con funcionalidades robustas, ideal para proyectos educativos o comerciales.

## 🌟 Características

- **Diseño moderno y profesional:** Perfecto para tiendas en línea con múltiples categorías y productos.
- **Estructura modular:** Lógica separada para una fácil administración y escalabilidad.
- **Funcionalidades avanzadas:**
  - Sistema de autenticación de usuarios (registro, inicio de sesión, y roles de usuario).
  - Gestión de productos (CRUD) y categorías.
  - Carrito de compras dinámico con almacenamiento en sesión.
  - Procesamiento de pedidos con estado de seguimiento.
  - Paginación en listados de productos.
  - Integración de pagos (simulado o real).
- **Responsive Design:** Optimizado para dispositivos móviles, tablets y escritorios.
- **Uso de JavaScript avanzado:** Validación de formularios, actualización dinámica del carrito y funcionalidades interactivas.
- **Panel de administración:** Para gestionar productos, usuarios, pedidos y configuraciones.
- **Uso de AJAX:** Mejora la experiencia del usuario al evitar recargas innecesarias.
- **Optimización SEO:** URLs amigables y etiquetas meta dinámicas.

## 🖼️ Vista Previa

### 📌 Demo en Vivo

[Haz clic aquí para ver el demo en vivo](https://rinkyn05.github.io/advanced_php_store/)

### 📄 Página Principal

### 📄 Detalles del Producto

### 📄 Carrito de Compras

---

## 💂️️ Estructura del Proyecto

El proyecto sigue una estructura organizada y profesional para facilitar la escalabilidad y personalización:

```plaintext
raiz/
├── index.php                # Página principal de la tienda
├── paginas/
│   ├── productos.php        # Página de listado de productos
│   ├── carrito.php          # Página del carrito de compras
│   ├── checkout.php         # Página para procesar pedidos
│   ├── contacto.php         # Página de contacto
│   └── categorias.php       # Página para mostrar productos por categoría
├── admin/                   # Panel de administración (CRUD para productos y usuarios)
│   ├── login.php            # Inicio de sesión para administradores
│   ├── dashboard.php        # Panel principal
│   ├── gestion_productos.php # Gestión de productos
│   ├── gestion_usuarios.php  # Gestión de usuarios
│   └── gestion_pedidos.php   # Gestión de pedidos
├── includes/                # Archivos reutilizables (header, footer, funciones comunes)
├── multimedia/              # Carpeta que contiene las imágenes utilizadas
├── css/                     # Archivos CSS para el diseño y estilos
├── js/                      # Archivos JavaScript para interactividad
├── php/                     # Lógica de negocio (controladores, funciones, etc.)
├── db/                      # Archivos relacionados con la base de datos
├── sql/                     # Scripts SQL para crear y poblar la base de datos
├── assets/                  # Archivos estáticos adicionales (iconos, fuentes)
└── README.md                # Documentación del proyecto
```

---

## 🚀 Cómo Usar

### Clonar el Repositorio

Clona el proyecto a tu máquina local usando el siguiente comando:

```bash
git clone https://github.com/rinkyn05/advanced_php_store
```

### Configuración de la Base de Datos

1. Asegúrate de tener un servidor local configurado (por ejemplo, XAMPP o WAMP).
2. Crea una base de datos nueva en tu servidor local.
3. Importa el archivo `sql/db_setup.sql` en tu base de datos para crear las tablas necesarias.
4. Actualiza el archivo `php/config.php` con tus credenciales de base de datos:

```php
<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Cambia esto si tienes una contraseña
$dbname = 'nombre_de_tu_base_de_datos';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
```

### Ejecutar el Proyecto

1. Mueve el proyecto a la carpeta `htdocs` de tu servidor local.
2. Accede al proyecto desde tu navegador en la URL:

```arduino
http://localhost/advanced_php_store/
```

---

## Funcionalidades

- **Carrito Dinámico:** Añade o elimina productos del carrito sin recargar la página (AJAX).
- **Gestión de Usuarios:** Registro e inicio de sesión con roles.
- **Panel de Administración:** Crea, edita o elimina productos, usuarios y pedidos.
- **Validación Avanzada:** Tanto del lado del cliente como del servidor.
- **Filtros y Búsqueda:** Encuentra productos rápidamente según categorías, precio o nombre.

---

## Subir a un Servidor

1. Sube todos los archivos del proyecto a tu servidor web.
2. Configura las credenciales de base de datos en el archivo `php/config.php`.
3. Asegúrate de que las extensiones de PHP necesarias (como MySQLi y cURL) estén habilitadas en el servidor.

---

## 🛠️ Tecnologías Utilizadas

- **PHP:** Lógica de negocio y conexión con la base de datos.
- **HTML5:** Estructura semántica y moderna.
- **CSS3:** Diseño responsivo y atractivo.
- **JavaScript:** Interactividad avanzada en el frontend.
- **MySQL:** Base de datos para almacenar productos, pedidos y usuarios.
- **AJAX:** Para cargar y actualizar contenido dinámicamente.
- **Font Awesome:** Íconos decorativos y funcionales.

---

## 📝 Licencia

Este proyecto está bajo la licencia MIT. Puedes usarlo, modificarlo y distribuirlo libremente. 🎉

---

## ❤️ Contribuciones

¡Las contribuciones son bienvenidas! Si deseas agregar nuevas funcionalidades, mejorar el diseño o la lógica, no dudes en hacer un pull request.
