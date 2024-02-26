# 🖥️ Proyecto de Página Web Estático
## 🏎️ Sergio Pérez - FanPage

### Introducción
En el presente informe, se presenta el desarrollo de un proyecto final en el contexto de la asignatura de Programación de Web Estático, impartida por el profesor Erick Hernández. Este proyecto tiene como objetivo principal la creación de un sitio web compuesto por al menos cuatro archivos HTML interconectados, que representan diferentes secciones y funcionalidades del sitio.


El proyecto se centra en la conceptualización y materialización de una presencia en línea para una persona ficticia que es propietaria de un negocio internacional que ofrece servicios específicos. En este caso, se realizó una página web enfocado en el piloto mexicano de Formula 1, Sergio Pérez.


El desarrollo del proyecto implica la creación de archivos HTML principales y secundarios, cada uno con su estructura específica que incluye elementos como encabezados, cuerpos y pies de página. Además, se incorporan elementos multimedia, como imágenes, así como hojas de estilo CSS para mejorar la presentación y el diseño del sitio.

 
Una de las características más importantes del proyecto es la inclusión de un formulario de contacto en la página "Contacto.html", que sigue una estructura y funcionalidad específicas. Este formulario se conecta a una base de datos mediante PHP, lo que permite almacenar la información proporcionada por los usuarios.

 
A lo largo de este informe, se detallará el proceso de desarrollo, desde la planificación inicial hasta la implementación final, destacando las decisiones de diseño, la estructura del sitio y la funcionalidad del formulario de contacto. Además, se discutirán los desafíos encontrados durante el desarrollo y las soluciones aplicadas para superarlos.

### Proceso de desarrollo
#### Tecnologías utilizadas
- HTML (HyperText Markup Language): HTML es el lenguaje estándar utilizado para crear y estructurar el contenido de las páginas web. En este proyecto, HTML se utilizó para definir la estructura de cada página web, incluyendo encabezados, párrafos, listas, enlaces y otros elementos necesarios para presentar información de manera organizada y accesible para los usuarios. Además, se emplearon etiquetas específicas para integrar archivos multimedia, como imágenes, audio y video, en las páginas.
- Bootstrap: Se utilizo esta librería para implementar de forma rápida un diseño intuitivo y moderno con los estándares actuales.
- CSS (Cascading Style Sheets): CSS es un lenguaje de estilo utilizado para controlar la presentación y el diseño de las páginas web. En este proyecto, se empleó CSS para aplicar estilos visuales a los elementos HTML, como colores, fuentes, márgenes, espaciado y diseño de la página. Esto permitió personalizar la apariencia del sitio web y garantizar una experiencia de usuario coherente y atractiva en todas las páginas.
- JS (JavaScript): JavaScript es un lenguaje de programación utilizado para agregar interactividad. Se utilizo para realizar un alert cuando el formulario se enviado a la base de datos.
- PHP (Hypertext Preprocessor): PHP es un lenguaje de programación del lado del servidor. En este proyecto, se utilizó PHP para procesar datos enviados desde formularios web, como el formulario de contacto, y realizar operaciones en una base de datos MySQL.
- MySQL: MySQL es un sistema de gestión de bases de datos relacional utilizado para almacenar y administrar datos en aplicaciones web. En este proyecto, se utilizó MySQL para crear y administrar la base de datos que almacena la información proporcionada por los usuarios a través del formulario de contacto. Esto incluye la definición de la estructura de la base de datos, la creación de tablas y la realización de consultas para insertar, actualizar y recuperar datos según sea necesario.

#### Requerimientos de diseño
- Tipografía: Para garantizar la coherencia visual y la identidad de marca, se seleccionó la tipografía Geogrotesque Light, la cual fue extraída del logo original del piloto. Esta elección se realizó con el objetivo de mantener una estética uniforme en todo el sitio web y reflejar la personalidad y estilo asociados con la marca del piloto.

<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/3abeaf1c-0f20-433e-b1e0-357cbea6bfa8" width="400">
</p>

- Paleta de colores: Se optó por utilizar la paleta de colores del equipo de Formula 1 actual del piloto, Red Bull Racing. Esta decisión se tomó con el propósito de alinear el diseño del sitio web con la imagen corporativa del piloto y su equipo, creando así una conexión visual entre la presencia en línea y la identidad de la marca en el mundo del automovilismo. La paleta de colores de Red Bull Racing se caracteriza por tonos vibrantes y llamativos, lo que ayuda a captar la atención del usuario y a transmitir una sensación de energía y dinamismo en todo el sitio web.

<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/bd33ef42-6a85-4c2a-bace-b0259d675312" width="400">
</p>

#### Estructura del proyecto
##### Archivos principales: 
-	index.html: En la página principal del proyecto web, index.html, se ha creado una presentación detallada del piloto. Se ha estructurado la información utilizando una tabla donde se destacan datos relevantes como la fecha de nacimiento, la edad, la nacionalidad y el inicio de su carrera. Además, se incluye una sección dedicada a los logros del piloto, donde se muestran los premios que ha ganado a lo largo de su trayectoria. Esta página sirve como punto de entrada al sitio web y proporciona una visión general del perfil profesional del piloto.
-	sobre_mi.html: En esta página se brinda más información acerca del piloto, dividiendo el contenido en dos secciones principales. La primera sección presenta un carrusel de imágenes del piloto, lo que permite a los usuarios tener una visión visualmente atractiva de su persona. La segunda sección contiene una breve autobiografía que proporciona contexto adicional sobre la vida y carrera del piloto, permitiendo a los visitantes conocer más a fondo su historia y logros.
- mi_trabajo.html: Esta página está dedicada a presentar los equipos en los que el piloto ha corrido a lo largo de su carrera. Se ha optado por utilizar tarjetas o cards para presentar esta información de manera organizada y visualmente atractiva. Cada tarjeta incluye detalles sobre los equipos, como el nombre y la temporada en la que compitió. Esta presentación facilita la comprensión y navegación del historial del piloto en diferentes equipos.
-	contacto.html: En esta página se ha implementado un formulario de contacto para facilitar la comunicación entre el piloto y sus seguidores o potenciales interesados. El formulario probablemente incluye campos como su nombre, correo electrónico y mensaje, permitiendo a los usuarios enviar comentarios. Además, este formulario está conectado a un backend PHP para procesar los datos enviados por los usuarios y almacenarlos en una base de datos, como se mencionó en los requerimientos de diseño.

##### Archivos secundarios:
-	style.css: Este archivo contiene todas las reglas de estilo y diseño que se aplican a las páginas HTML del proyecto. En él se define la apariencia visual del sitio web, incluyendo aspectos como colores, fuentes, márgenes, tamaños de texto, efectos visuales y disposición de los elementos. La separación de la hoja de estilo en un archivo independiente facilita la gestión y mantenimiento del diseño, permitiendo realizar cambios de manera más eficiente y consistente en todo el sitio.
-	/src: En esta carpeta se encuentran varios archivos relacionados con la configuración y el funcionamiento del sitio web:
- .env: Este archivo almacena los datos de configuración necesarios para la conexión a la base de datos, como la dirección del servidor, el nombre de usuario y la contraseña. Al separar esta información en un archivo .env, se mejora la seguridad y se facilita la gestión de los datos sensibles.
- conexión.php: Este archivo contiene el código PHP necesario para establecer la conexión con la base de datos y realizar operaciones de consulta, inserción, actualización o eliminación de datos. También puede incluir funciones para el procesamiento del formulario de contacto y la gestión de datos enviados por los usuarios.
- cert.pem: Este archivo representa el certificado SSL utilizado para asegurar la conexión a la base de datos externa. El uso de SSL garantiza la confidencialidad y la integridad de los datos transmitidos entre el servidor web y la base de datos, protegiendo así la información sensible de posibles ataques o interceptaciones.
- /Multimedia: Esta carpeta contiene todos los archivos de contenido visual utilizados en el proyecto, como imágenes y archivos SVG. Estos elementos multimedia se utilizan para enriquecer el contenido de las páginas web, proporcionando elementos visuales atractivos y relevantes para los usuarios. La organización de estos archivos en una carpeta específica facilita su gestión y referencia en el código HTML y CSS del sitio web.

<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/53924326-61bb-4c49-bd58-2c1e1685832b" width="400">
</p>

#### Creación de BD MySQL
Para la implementación del servicio de MySQL, se optó por utilizar la plataforma de PlanetScale. PlanetScale ofrece la posibilidad de crear y administrar bases de datos MySQL de forma remota, lo que elimina la necesidad de configurar y mantener una base de datos local en el servidor del proyecto.


Al utilizar PlanetScale, se obtiene acceso a una infraestructura de base de datos confiable y escalable, lo que garantiza un rendimiento óptimo y una alta disponibilidad para el sitio web. Además, PlanetScale ofrece características de seguridad avanzadas, como el cifrado de datos en reposo y en tránsito, lo que protege la información confidencial de posibles amenazas de seguridad.


La decisión de utilizar PlanetScale para la creación de la base de datos MySQL permite una mayor flexibilidad y comodidad en el desarrollo y despliegue del proyecto web. Al tener la base de datos alojada de forma remota, se facilita el acceso y la administración desde cualquier lugar y en cualquier momento, lo que simplifica el proceso de desarrollo y mantenimiento del sitio web. Además, PlanetScale ofrece opciones de escalabilidad automática, lo que permite adaptar la capacidad de la base de datos según las necesidades del proyecto sin interrupciones en el servicio.

<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/02319975-5b7d-4169-901f-7831ff98b15e" width="500">
</p>

Para establecer la conexión con la base de datos MySQL, se ha creado un archivo denominado conexión.php. Este archivo contiene todas las instrucciones necesarias para establecer la conexión de forma eficiente y segura. Dentro de conexión.php, se incluyen varios elementos clave, como los detalles de configuración de la base de datos, como el nombre de usuario, la contraseña y el nombre del servidor, que permiten al script de PHP establecer una conexión adecuada con la base de datos remota.


Además de los detalles de configuración, conexión.php también incluirá el código PHP necesario para iniciar y gestionar la conexión con la base de datos. Esto puede implicar la creación de un objeto de conexión utilizando funciones específicas de PHP, como mysqli_init(), y la gestión de posibles errores de conexión para garantizar un flujo de ejecución robusto y sin interrupciones.


Una vez establecida la conexión con éxito, conexión.php puede contener funciones adicionales para realizar las querys en este caso insertar los datos del formulario en la base de datos.

<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/dad90061-0667-4c2b-ac01-ff9a707ee625" width="500">
</p>


<p align="center">
  <img src="https://github.com/newton1057/Web_Estatico/assets/53379558/93468566-dbd5-4839-b45b-a771bdf33aba" width="500">
</p>

### Conclusión:
En el desarrollo de este proyecto de sitio web para el piloto de Fórmula 1, se ha logrado integrar una variedad de tecnologías y técnicas de programación web estática para crear una experiencia en línea completa y atractiva. A través de la implementación de archivos HTML, CSS, JavaScript, PHP y MySQL, se ha logrado construir un sitio web funcional que cumple con los requisitos establecidos y proporciona a los usuarios información relevante y una interfaz intuitiva.


La estructura del sitio, compuesta por archivos principales como index.html, sobre_mi.html, Mi_trabajo.html y Contacto.html, junto con archivos secundarios como style.css y /src, ha permitido organizar de manera eficiente el contenido y la lógica del proyecto. Además, la integración de elementos multimedia en la carpeta /Multimedia ha enriquecido la experiencia del usuario, ofreciendo contenido visualmente atractivo y relevante.


La implementación de una base de datos MySQL utilizando el servicio de PlanetScale ha mejorado la escalabilidad y la accesibilidad del sitio web, permitiendo el almacenamiento y gestión eficiente de datos de forma remota y segura. La creación del archivo conexión.php ha facilitado la conexión y manipulación de datos en la base de datos, garantizando un flujo de información fluido y confiable entre el sitio web y la base de datos.
