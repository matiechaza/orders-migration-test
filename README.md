# Orders - Prueba técnica

## Contexto

En el equipo de Orders estamos en una migración tecnológica donde estamos migrando nuestra API v1 desarrollada en PHP y MySQL a un nueva API v2 desarrollada en un microservicio en Scala y MongoDB. Esto va a permitir una mejora en el rendimiento y la performance de nuestro servicio para los consumidores de la API.

La API v2 ya está desarrollada y lista para usarse pero no podemos deprecar la API v1 hasta no hacer una buena campaña de comunicación a nuestros partners.
Mientras tanto, nos gustaría que la API v1 utilice la API v2 así nuestros partners empiezan a recibir los beneficios de performance de la API v2 sin tener que hacer modificaciones en sus aplicaciones.

## Problema

El problema que se presenta es que la API v1 retorna toda la información de la tabla mwp_orders de MySQL. Esta tabla no solo contiene la información de la orden sino también la información del pago y la información del customer. El microservicio de la API v2 solamente contiene la información de la orden por lo tanto, deberíamos pensar una forma de que la API v1 siga retornando la misma información.

## Requerimiento

Hacer las modificaciones necesarias en el código para que la API v1 utilice la API v2 manteniendo el mismo endpoint y respuesta.
