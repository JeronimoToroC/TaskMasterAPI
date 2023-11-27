# TaskMasterAPI - API de Gestión de Tareas en Laravel

## Descripción del Proyecto

Esta es una API de gestión de tareas desarrollada en Laravel 10 que te permite crear, leer, actualizar y eliminar tareas. También incluye autenticación basada en tokens.

### Características Clave

-   Gestión de Tareas: Operaciones CRUD para manejar tareas.
-   Autenticación Basada en Tokens: Implementada con Laravel Sanctum para proteger los endpoints.

## Requisitos del Sistema

-   PHP 7.4 o superior
-   Composer
-   Laravel 10.x
-   MySQL o cualquier otro sistema de gestión de bases de datos compatible

## Instalación y Configuración

1. **Clona el Repositorio**:

    ```bash
    git clone https://github.com/tu-usuario/TaskMasterAPI.git
    ```

2. **Instala las Dependencias con Composer**:  
   Entra en el directorio del proyecto y ejecuta:

    ```bash
    composer install
    ```

3. **Configura el Archivo `.env`**:  
   Copia el archivo `.env.example` a `.env` y configura tus variables de entorno, incluyendo la conexión a la base de datos.

4. **Genera la Clave de la Aplicación**:

    ```bash
    php artisan key:generate
    ```

5. **Ejecuta las Migraciones y Seeders**:  
   Para configurar la base de datos y llenarla con datos de prueba:

    ```bash
    php artisan migrate --seed
    ```

6. **Inicia el Servidor Local**:
    ```bash
    php artisan serve
    ```

La API ahora debería estar en funcionamiento en `http://localhost:8000`.

## Uso de la API

Para utilizar la API:

1. **Registra un Usuario y Obtén un Token**:  
   Registra un usuario a través de tu interfaz de usuario o mediante una petición directa a la API. Luego, utiliza la ruta de autenticación para obtener un token de acceso.

2. **Realiza Solicitudes a los Endpoints**:  
   Utiliza el token obtenido para realizar solicitudes autorizadas a los endpoints de la API.

## Colección de Postman

La colección de Postman para probar la API está disponible en el directorio `postman` del repositorio.

### Importar la Colección en Postman

1. Abre Postman y haz clic en "Import".
2. Elige "Upload Files" y selecciona el archivo `.json` de la colección.
3. La colección ahora debería estar disponible para su uso en Postman.

### Descripción de las Peticiones en Postman

-   Crear Tarea (POST): Crea una nueva tarea con los detalles necesarios.
-   Listar Tareas (GET): Obtiene una lista de todas las tareas existentes.
-   Obtener Detalle de Tarea (GET): Recupera los detalles de una tarea específica usando su ID.
-   Actualizar Tarea (PUT): Actualiza la información de una tarea existente.
-   Eliminar Tarea (DELETE): Elimina una tarea de la base de datos usando su ID.

---

Desarrollado con ❤️ por [TuNombre].
