Shopify - Symfony 3.1
=========
Proyecto para Consumir API de Shopify con Bundle 
PHPShopify que permite integrar el SDK con Symfony

- Para descargar el proyecto se requiere hacer uso de git o 
descargar mediante un archivo .zip
- Una vez descargado se ejecuta el comando 
   - <code>composer install</code>
- En caso de que no funcione, ejecutar el comando
   - <code>composer update</code>
- Este comando lo que hace es descargar los paquetes que
requiere symfony para poder funcionar

Código Importante
== 
- Los bloques de código que son indispensables se encuentran en:
> src / AppBundle / Controller / ShopifyController

> src / AppBundle / Resources / views / Shopify

- La primer ruta corresponde al controlador que es donde se 
hace el llamado de la API

- La segunda ruta es donde estan las vistas en las que
muestro los resultados

