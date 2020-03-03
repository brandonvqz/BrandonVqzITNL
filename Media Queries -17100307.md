# Instituto Tecnológico de México Campus Nuevo Laredo

## Investigación: Media Queries.


### **Alumno:** Brandon Vazquez Camarillo.
### **Numero de Control:** 17100307.
---

## Media Types.
Los Media Types (tipos de medios) describen la categoría general de un dispositivo. Excepto cuando se utilizan los operadores lógicos not o only, el tipo de medio es opcional y será interpretada como all.

all: Apto para todos los dispositivos.  
print: Destinado a material impreso y visualización de documentos en una pantalla en el modo de vista previa de impresión.  
screen: Destinado principalmente a las pantallas.  
speech: Destinado a sintetizadores de voz.  

## Operadores Lógicos.
Se pueden redactar queries utilizando operadores lógicos, incluyendo not, and, y only.

Además se puede combinar múltiples queries en una lista separada por comas múltiples; si cualquiera de las queries en la lista es verdadera, la hoja de estilo asociada es aplicada. Esto es equivalente a una operación lógica "or".

## AND
El operador and es usado para colocar juntas múltiples funciones multimedia. Un query básico con el tipo de medio especificado como all puede lucir así:

```CSS
    @media (min-width: 700px) and (orientation: landscape) { ... }
```

## NOT
El operador not aplica a todo el query y retorna verdadero si es posible y sino retorna falso (como por ejemplo monochrome en un monitor a color o una ventana con un ancho mínimo de min-width: 700px en un monitor de 600px). Un not negara un query si es posible pero no a todos los query posibles si están ubicados en una lista separada por comas. El operador not no puede ser usado para negar un query individual, solo para un query completo. Por ejemplo, el not en el siguiente query es evaluado al final:

```CSS
    @media not (all and (monochrome)) { ... }
```

## ONLY
El operador only previene que navegadores antiguos que no soportan queries con funciones apliquen los estilos asignados:
```HTML
<link rel="stylesheet" media="only screen and (color)" href="Ejemplo.css" />
```

## Funciones multimedia.
La mayoría de las funciones multimedia pueden ser precedidas por "min-" o "max-" para expresar "greater or equal to" o "less than or equal to". Esto elimina la necesidad de usar los símbolos "<" y ">" los cuales podrían causar conflictos con HTML y XML. Si usted usa una función multimedia sin especificarle un valor, la expresión retornara verdadero si el valor es diferente de cero.

## color
Valor: \<color>  
Medio: media/visual  
Acepta prefijos min/max: si  

Indica el numero de bits por componente de color del dispositivo de salida. Si el dispositivo no soporta colores, este valor es 0.

## color-index
Valor: \<integer>  
Medio: media/visual  
Acepta prefijos min/max: sí  

Indica el numero de entradas en la tabla de colores para el dispositivo de salida.

## aspect-ratio
Valor: \<ratio>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

Describe el aspecto de una zona a mostrar en el dispositivo de salida. Este valor consiste en enteros positivos separados por una barra ("/"). Esto representa la razón de aspecto de los pixeles horizontales (primer termino) a los pixeles verticales (segundo termino).

```CSS
@media screen and (min-aspect-ratio: 1/1) { ... }
```

## device-aspect-ratio
Valor: \<ratio>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

Describe la proporción de aspecto del dispositivo de salida. Este valor consiste de dos enteros positivos separados por una barra ("/"). Este representa la proporción de aspecto de los pixeles horizontales (primer termino) a los pixeles verticales (segundo termino).

```CSS
@media screen and (device-aspect-ratio: 16/9), screen and (device-aspect-ratio: 16/10) { ... }
```

## device-height
Valor: \<length>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

Describe la altura del dispositivo de salida (ya sea la totalidad de la pantalla o página y no el área del documento a renderizar).

## device-width
Valor: \<length>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

Describe la anchura del dispositivo de salida (ya sea la totalidad de la pantalla o página y no el área del documento a renderizar).

```HTML
<link rel="stylesheet" media="screen and (max-device-width: 799px)"/>
```

## grid
Valor: \<integer>  
Medio: all  
Acepta prefijos min/max: no  

Determina cuando el dispositivo de salida es un dispositivo de cuadrícula o de mapa de bits. Si el dispositivo esta basado en una cuadrícula (como una terminal TTY o una pantalla de teléfono de solo texto), el valor sera 1, de lo contrario sera 0.

## height
Valor: \<length>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

La función height describe la altura de la superficie a renderizar en el dispositivo de salida (como la altura de una ventana o la bandeja de papel en una impresora).

## monochrome
Valor: \<integer>  
Medio: media/visual  
Acepta prefijos min/max: sí  

Indica el número de bits por pixel en un dispositivo monocromático (escala de grises). Si el dispositivo no es monocromático el valor sera 0.

## orientation
Valor: landscape | portrait  
Medio: media/visual  
Acepta prefijos min/max: no  

Indica cuando el dispositivo esta en modo landscape (el ancho de la pantalla es mayor al alto) o modo portrait (el alto de la pantalla es mayor al ancho).

## resolution
Valor: \<resolution>  
Medio: bitmap  
Acepta prefijos min/max: sí  

Indica la resolución (densidad de pixeles) del dispositivo de salida. La resolución puede ser especificada en puntos por pulgada (dpi) o en puntos por centímetros (dpcm).

## scan
Valor: progressive | interlace  
Medio: media/tv  
Acepta prefijos min/max: no  

Describe el proceso de exploración de televisión de los dispositivos de salida.

## width
Valor: \<length>  
Medio: media/visual, media/tactile  
Acepta prefijos min/max: sí  

La función width describe el ancho de la superficie a renderizar en el dispositivo de salida (como el ancho de una ventana de un documento o el ancho de la bandeja de papel en una impresora).