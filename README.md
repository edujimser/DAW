# Plataforma de Adopción de Animales 🐾

Este repositorio contiene el código fuente de una plataforma web destinada a la adopción de animales. A diferencia de otros sistemas de adopción, aquí son las personas quienes se presentan en la web para que los refugios y protectoras puedan conocer a los posibles adoptantes. La aplicación sigue la arquitectura **Modelo-Vista-Controlador (MVC)** para una mejor organización del código y mantenimiento.

## 🌟 Características principales

- **Estructura MVC**: Separación clara entre la lógica de negocio (Modelo), la interfaz de usuario (Vista) y el control de flujo (Controlador).
- **Gestión de adoptantes**: Los usuarios pueden registrarse y crear un perfil donde describen su experiencia y condiciones para adoptar.
- **Blog informativo**: Sección de noticias y artículos sobre bienestar animal, educación y consejos de adopción.
- **Cookies y sesiones**: Para mejorar la experiencia del usuario y guardar preferencias.
- **Interacción con APIs externas**: Posibilidad de integración con bases de datos de refugios.

## 🚀 Tecnologías utilizadas

### 🐘 PHP
PHP es el lenguaje principal del backend. Se utiliza para procesar solicitudes, gestionar sesiones de usuario y conectarse a la base de datos. Algunas funciones clave incluyen:
- Manejo de formularios y validación de datos.
- Autenticación de usuarios mediante sesiones y cookies.
- Generación dinámica de contenido en las vistas.

### ⚡ JavaScript
El frontend de la plataforma está impulsado por JavaScript, mejorando la interactividad y la experiencia del usuario con:
- Validaciones en tiempo real en formularios.
- Animaciones y efectos visuales.
- Comunicación asincrónica con el servidor mediante **AJAX**.

### 🍃 MongoDB
MongoDB es la base de datos utilizada para almacenar la información de los adoptantes y los animales disponibles. Se ha elegido por su flexibilidad y escalabilidad. Destacamos:
- Estructura de documentos en formato JSON, permitiendo modelos de datos dinámicos.
- Fácil integración con APIs y aplicaciones web.
- Consultas rápidas para la gestión de adoptantes y refugios.

## 📂 Estructura del Proyecto
- **api/** - Conexión con servicios externos y bases de datos de refugios.  
- **controlador/** - Manejo de la lógica de negocio y procesamiento de solicitudes.  
- **views/** - Archivos de diseño y renderizado de la interfaz.  
- **js/** - Scripts de JavaScript para interacción y efectos dinámicos.  
- **php/** - Archivos backend que gestionan datos y consultas.  

### 📜 Archivos principales

- **index.php** - Página de inicio de la plataforma.  
- **paginaBlog.php** - Sección del blog con contenido sobre adopción.  
- **unete.php** - Formulario de registro para nuevos adoptantes.  
- **adoptantes.php** - Listado de perfiles de adoptantes disponibles.  
- **terminosLegales.php** - Condiciones de uso y política de privacidad.  

