# TaskMasterAPI - API de Gestión de Tareas en Laravel

## Descripción del Proyecto

Esta es una API de gestión de tareas desarrollada en Laravel 10 que te permite crear, leer, actualizar y eliminar tareas, así como gestionar categorías asociadas a estas. Incluye autenticación basada en tokens para proteger los endpoints.

### Características Clave

-   Gestión de Tareas: Operaciones CRUD para manejar tareas.
-   Gestión de Categorías: Operaciones CRUD para manejar las categorías de las tareas.
-   Autenticación Basada en Tokens: Implementada con Laravel Sanctum.

## Requisitos del Sistema

-   PHP 7.4 o superior
-   Composer
-   Laravel 10.x
-   MySQL o cualquier otro sistema de gestión de bases de datos compatible

## Instalación y Configuración

1. **Clona el Repositorio**:
   `bash
  git clone https://github.com/JeronimoToroC/TaskMasterAPI.git
  `
2. **Instala las Dependencias con Composer**:
   Entra en el directorio del proyecto y ejecuta:
   `bash
  composer install
  `
3. **Configura el Archivo `.env`**:
   Copia el archivo `.env.example` a `.env` y configura tus variables de entorno.
4. **Genera la Clave de la Aplicación**:
   `bash
  php artisan key:generate
  `
5. **Ejecuta las Migraciones y Seeders**:
   `bash
  php artisan migrate --seed
  `
6. **Inicia el Servidor Local**:
   `bash
  php artisan serve
  `

La API ahora debería estar en funcionamiento en `http://localhost:8000`.

## Uso de la API

Para utilizar la API:

1. **Registra un Usuario y Obtén un Token**:
   Registra un usuario y luego utiliza la ruta de autenticación para obtener un token.
2. **Realiza Solicitudes a los Endpoints**:
   Utiliza el token para realizar solicitudes a los endpoints de la API.

## Colección de Postman

La colección de Postman para probar la API está en el directorio `postman`.

### Importar la Colección en Postman

1. Abre Postman y haz clic en "Import".
2. Elige "Upload Files" y selecciona el archivo `.json` de la colección.

### Descripción de las Peticiones en Postman

-   **Crear Tarea (POST)**: Crea una nueva tarea.
-   **Listar Tareas (GET)**: Obtiene una lista de tareas.
-   **Obtener Detalle de Tarea (GET)**: Recupera detalles de una tarea.
-   **Actualizar Tarea (PUT)**: Actualiza una tarea existente.
-   **Eliminar Tarea (DELETE)**: Elimina una tarea.

-   **Crear Categoría (POST)**: Crea una nueva categoría.
-   **Listar Categorías (GET)**: Obtiene una lista de categorías.
-   **Obtener Detalle de Categoría (GET)**: Recupera detalles de una categoría.
-   **Actualizar Categoría (PUT)**: Actualiza una categoría existente.
-   **Eliminar Categoría (DELETE)**: Elimina una categoría.

---

Desarrollado con ❤️ por [Jerónimo Toro C].
