# Municipios España Symfony

Dataset que incluye un listado de municipios, provincias y comunidades autónomas segun el INE y que estan relacionadas entre sí. 
Incluye:

* **Database** En este directorio se incluyen las estructura de las tablas y los registros para insertar directamente en la base de datos.
* **Database Insert** En este directorio se incluyen **únicamente** los registros para insertar en la base de datos.
* **Entity** En este directorio se incluyen las entidades **Comunidades**, **Provincias**, y **Municipios**, completamente relacionadas entre sí. Actualizado a Symfony 3.2.

### Formato de los datos

* **Comunidades**

Incluye los siguientes campos:

        id:  Código de la comunidad.
        slug:   Slug de la comunidad.
        comunidad:   Nombre de la comunidad (según INE).
        capital_id: Capital de la comunidad.
        
* **Provincias**

Incluye los siguientes campos:

        id:  Código de la provincia.
        slug:   Slug de la provincia.
        provincia:   Nombre de la provincia (según INE).
        comunidad_id: Referencia a la comunidad a la que pertenece.
        capital_id: Capital de la provincia.
        
 * **Municipios**

Incluye los siguientes campos:

        id:  Código del municipio.
        slug:   Slug del municipio.
        municipio:   Nombre del municipio (según INE).
        provincia_id: Referencia a la cprovincia a la que pertenece.
        capital_id: Capital del municipio.
