Fases de la comunicación:  
RA4_Enunciados_alumnado.pdf
URL: El cliente analiza el esquema (http), el host (localhost), el puerto (8000) y la ruta (/e01/inspector.php). (No pertenece al mensaje HTTP).
DNS: Traducción del nombre de dominio a una dirección IP. (No pertenece al mensaje HTTP).
Conexión: Apertura del socket TCP (y negociación TLS si fuese HTTPS) entre cliente y servidor. (No pertenece al mensaje HTTP).
Petición (Request): Envío de la línea de petición (GET /... HTTP/1.1), cabeceras del cliente (Host, User-Agent, Accept) y cuerpo (si es POST). (Pertenece al mensaje HTTP).
Respuesta (Response): Línea de estado (HTTP/1.1 200 OK), cabeceras del servidor (Content-Type, Date) y cuerpo (el JSON). (Pertenece al mensaje HTTP).
Métodos HTTP: GET (solicita representación de un recurso), HEAD (igual que GET pero sin cuerpo de respuesta), POST (envía datos para procesar/crear), PUT (reemplaza o crea un recurso en una URI específica), OPTIONS (consulta métodos soportados por el servidor), TRACE (devuelve la petición recibida para diagnóstico) y CONNECT (establece un túnel, habitual para proxies HTTPS).  
RA4_Enunciados_alumnado.pdf
Familias de códigos de estado: 1xx (informativos), 2xx (éxito), 3xx (redirección), 4xx (error del cliente) y 5xx (error del servidor).  
RA4_Enunciados_alumnado.pdf
Evolución de HTTP: 0.9 solo soportaba GET sin cabeceras ni códigos de estado. 1.0 introdujo cabeceras, códigos y tipos MIME, abriendo y cerrando una conexión TCP por recurso. 1.1 añadió conexiones persistentes (Keep-Alive) por defecto y Host obligatorio. 2 introdujo framing binario, multiplexación (múltiples peticiones simultáneas en una sola conexión) y compresión de cabeceras (HPACK). Reutilizar una conexión TCP solo ahorra latencia de red; HTTP sigue siendo stateless (sin estado) a nivel de aplicación porque el servidor no asocia automáticamente esa conexión a una identidad de usuario entre peticiones independientes.  
RA4_Enunciados_alumnado.pdf

- 1
  Mecanismos de estado: Campos ocultos y parámetros URL viajan en cada petición dentro del HTML/URL (visibles y manipulables por el usuario). Las cookies se almacenan en el navegador y se envían automáticamente en la cabecera Cookie. Las sesiones guardan los datos en el servidor y solo envían un identificador (ID) en una cookie. Un ID enviado por el cliente no demuestra identidad por sí mismo porque cualquiera que intercepte o adivine ese identificador puede suplantar al usuario si no hay controles adicionales.  
  RA4_Enunciados_alumnado.pdf
- 1
  Prueba de ventana privada: Al recargar o abrir una ventana privada, inspector.php no conserva los valores anteriores porque no se utilizan cookies ni sesiones; cada petición HTTP es completamente independiente.  
  RA4_Enunciados_alumnado.pdf
- 1
