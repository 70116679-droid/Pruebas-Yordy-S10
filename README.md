Proyecto: Sistema Web de Bodega
Tecnologías
Backend: Laravel 12
Frontend: Blade + Bootstrap 5
Base de datos: MySQL
Contenedores: Docker Compose
ORM: Eloquent
Control de versiones: Git y GitHub
Fase 1: Base de datos

Crearemos las siguientes tablas:

Usuarios
Roles
Categorías
Productos
Clientes
Proveedores
Compras
Detalle_Compras
Ventas
Detalle_Ventas

Con relaciones y llaves foráneas.

Fase 2: Autenticación
Login
Registro
Recuperar contraseña
Cerrar sesión

Roles:

Administrador
Vendedor
Fase 3: Dashboard

Mostrará:

Total productos
Total clientes
Total proveedores
Ventas del día
Compras del día
Productos con poco stock
Gráficos estadísticos
Fase 4: Productos

Funciones:

Registrar
Editar
Eliminar
Buscar
Subir imagen
Control de stock

Campos:

Código
Nombre
Descripción
Precio
Stock
Imagen
Categoría
Fase 5: Categorías

CRUD completo.

Fase 6: Clientes

CRUD completo.

Fase 7: Proveedores

CRUD completo.

Fase 8: Compras
Registrar compra
Actualizar stock automáticamente
Historial
Imprimir comprobante
Fase 9: Ventas
Buscar productos
Carrito
Registrar venta
Descontar stock automáticamente
Boleta
Factura
PDF
Fase 10: Reportes
Productos
Ventas
Compras
Clientes
Proveedores
Inventario

Exportación a:

PDF
Excel

Fase 11: API REST

Endpoints como:

GET    /api/productos
GET    /api/productos/{id}
POST   /api/productos
PUT    /api/productos/{id}
DELETE /api/productos/{id}

GET    /api/clientes
POST   /api/clientes

GET    /api/proveedores
POST   /api/proveedores

GET    /api/ventas
POST   /api/ventas

GET    /api/compras
POST   /api/compras

Fase 12: Frontend

Diseño moderno con:

Bootstrap 5
Sidebar
Navbar
Cards
Tablas
Formularios
Modal
Alertas
Fase 13: Docker

Configuración de:

Laravel
MySQL
phpMyAdmin
Fase 14: Documentación

Incluye:

README.md profesional.
Manual de usuario.
Manual técnico.
Diagrama entidad–relación.
Diagrama de casos de uso.
Diagrama de clases.
Arquitectura del sistema.
Colección de Postman.
Instrucciones de instalación y despliegue.
