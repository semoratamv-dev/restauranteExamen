# Restaurante La fonte 🍝

Bienvenido al repositorio del **Restaurante La fonte**, una aplicación web moderna diseñada para la gestión y visualización de la carta de un restaurante italiano. Esta aplicación ha sido transformada en una **PWA (Progressive Web App)** para ofrecer una experiencia similar a una aplicación nativa.

## 🚀 Características Principales

### 📱 Progressive Web App (PWA)
- **Instalable**: Se puede añadir a la pantalla de inicio en dispositivos móviles y de escritorio.
- **Modo Offline**: Gracias al Service Worker (`sw.js`), la aplicación puede cargar recursos básicos incluso sin conexión a internet.
- **Manifiesto**: Incluye un archivo `manifest.json` que define la identidad visual (colores, iconos, nombre).

### 📋 Gestión de la Carta (CRUD)
La aplicación permite gestionar los platos del restaurante de forma dinámica:
- **Visualización**: Los clientes pueden ver la carta actualizada (`carta.php`).
- **Administración**: Zona privada para la gestión de platos.
- **Operaciones**:
  - Añadir nuevos platos (`aniadirplato.php`).
  - Modificar datos de platos existentes (`modificarplatos.php`).
  - Mostrar u ocultar platos de la carta pública (`mostrarplato.php`, `ocultarplato.php`).
- **Persistencia**: Los datos se almacenan y recuperan de archivos JSON (`carta.json`, `arrayPlatos.json`).

### 🔐 Seguridad y Acceso
- **Sistema de Sesiones**: Control de acceso mediante inicio y cierre de sesión.
- **Zona Privada**: Área restringida para el personal autorizado donde se realizan las modificaciones.
- **Validación**: Filtros de seguridad para evitar el acceso no autorizado (`no_puedes_pasar.php`).

### 🎨 Diseño y Estética
- **Responsive Design**: Adaptado a móviles, tablets y ordenadores.
- **Estética Italiana**: Paleta de colores cálidos y tipografía cuidada.
- **Favicon Personalizado**: Icono distintivo en la pestaña del navegador y en el escritorio.

## 🛠️ Tecnologías Utilizadas
- **Backend**: PHP 8.x
- **Frontend**: HTML5, CSS3 (Vanilla CSS), JavaScript (ES6+)
- **Almacenamiento**: JSON
- **PWA**: Service Workers, Web App Manifest

## 📂 Estructura del Proyecto
- `index.php`: Página de inicio y navegación principal.
- `header.php` / `footer.php`: Componentes reutilizables de la interfaz.
- `styles.css`: Estilos globales del sitio.
- `imagenes/`: Directorio de recursos visuales y logos.
- `sw.js`: Lógica del Service Worker para caché.
- `manifest.json`: Configuración de la PWA.

---
*Desarrollado para el Restaurante La fonte - Pasión por la cocina italiana.*
