

# Proyecto de Gestión de Alojamientos

Este proyecto es una aplicación web para la gestión de alojamientos. Permite a los usuarios crear cuentas, iniciar sesión, agregar alojamientos a su cuenta y eliminarlos si así lo desean. Además, los administradores tienen la capacidad de agregar alojamientos a la base de datos sin poder eliminarlos. La aplicación está diseñada con un enfoque en la experiencia de usuario y es completamente funcional con una base de datos remota.

## Descripción del Proyecto

Este proyecto tiene como objetivo permitir a los usuarios gestionar alojamientos de manera sencilla y eficiente. Los usuarios pueden registrarse, iniciar sesión, ver una lista de alojamientos disponibles y seleccionar los que desean añadir a su cuenta. Además, pueden eliminar alojamientos de su cuenta si ya no les interesan. Los administradores, por otro lado, pueden agregar nuevos alojamientos a la base de datos, pero no tienen permisos para eliminarlos.

### Funcionalidades Principales

1. **Landing Page de Alojamientos**:
   - Muestra una lista de alojamientos precargados desde la base de datos.
   - Los alojamientos se presentan de manera atractiva usando **Tailwind CSS**.

2. **Crear Cuenta e Iniciar Sesión**:
   - Los usuarios pueden crear una cuenta proporcionando un nombre de usuario y contraseña.
   - Los usuarios pueden iniciar sesión con sus credenciales para acceder a su cuenta.

3. **Vista de Cuenta de Usuario**:
   - Una vez que un usuario ha iniciado sesión, puede ver su cuenta donde se reflejan los alojamientos que ha seleccionado.
   - Los usuarios pueden agregar alojamientos a su cuenta y eliminarlos si lo desean.

4. **Función de Eliminar Alojamientos**:
   - Los alojamientos seleccionados por el usuario pueden ser eliminados de su cuenta.

5. **Usuario Administrador**:
   - Un usuario administrador tiene la capacidad de agregar nuevos alojamientos a la base de datos, pero no puede eliminarlos.

## Lenguajes y Herramientas

- **PHP**: Para la creación de la lógica del servidor y la conexión con la base de datos.
- **MySQL**: Para la gestión de la base de datos y la persistencia de datos.
- **HTML/CSS**: Para la estructura y el diseño de las páginas.
- **Tailwind CSS**: Framework CSS utilizado para estilizar la aplicación de manera moderna y responsiva.
- **JavaScript (opcional)**: Para mejorar la interacción en el cliente si se requiere.
- **Git**: Para el control de versiones del proyecto.
- **npm**: Para gestionar las dependencias del proyecto, incluyendo **Tailwind CSS**.

## Uso

### Instalación

1. **Clona este repositorio**:

   ```bash
   git clone https://github.com/gerald-M14/alojamientos
   ```

2. **Instalar las dependencias de Tailwind CSS**:

   Si aún no has configurado Tailwind CSS, puedes hacerlo mediante npm:

   ```bash
   npm install -D tailwindcss postcss autoprefixer
   ```


3. **Configuración de la Base de Datos**:

   Asegúrate de tener una base de datos MySQL configurada. si deseas realizar colaboraciones.

4. **Configuración del Servidor**:

   Si estás utilizando **XAMPP** o **WAMP**, asegúrate de que el servidor PHP y MySQL estén configurados correctamente y en funcionamiento.

5. **Ejecutar la Aplicación**:

   Una vez que todo esté configurado, abre tu navegador y visita `http://localhost:8000/views/index.php` para ver la aplicación en acción.

### Dependencias

- **Tailwind CSS**: Framework CSS.
- **PHP**: Lenguaje de programación para el backend.
- **MySQL**: Base de datos utilizada.
- **PostCSS** y **Autoprefixer**: Utilizados para procesar Tailwind CSS.

## Contribuciones

Si deseas contribuir al proyecto, puedes hacer un fork de este repositorio y enviar un pull request. Asegúrate de seguir las mejores prácticas de codificación y de agregar una descripción clara de los cambios realizados.

## Autor

- **Geraldhy Messu y Guillermo Eguizabal** 

---

Este proyecto se ha diseñado para facilitar la gestión de alojamientos, proporcionando una experiencia de usuario intuitiva y fácil de usar. ¡Gracias por usarlo!
```

Este archivo README proporciona una descripción completa del proyecto, sus funcionalidades, las tecnologías utilizadas y cómo instalar y ejecutar el proyecto. Asegúrate de cambiar cualquier detalle específico (como el nombre del repositorio o del autor) antes de subirlo a tu repositorio de GitHub.