# BookedUp

## Equipo
* *Ana Paola Minchaca García - A01026744*
* *Karen Isabel Morgado Castillo - A01027446*
* *Maximiliano Sapién Fernández - A01027541*


## 1. Problema
Se requiere elaborar un sistema de información que funja como una tienda en línea de libros, esto le permitirá a los clientes visualizar los productos que se manejan, así como comprar. Para que esto sea posible, el cliente debe registrarse en la página con un usuario y contraseña, así como meter una cantidad de datos necesarios para el registro junto con su método de pago. Por ahora la tienda hace envíos gratis a algunos estados de la república mexicana. 

## 2. Requerimientos Funcionales
### Cliente
* ***Registro de Cliente***
1. Registro y validación del cliente por usuario y contraseña para la compra, así como los datos bancarios (nombre completo, número de tarjeta, fecha de vencimiento y CVV) y la dirección de envío(calle, número exterior, número interior, código postal, colonia, estado y ciudad).
2. Si ya se tiene cuenta registrada, el cliente podrá darle click a un botón para ingresar solamente usuario y contraseña.
* ***Consulta de libros***
3. Desplegar la lista de los libros en existencia, mostrando la imagen del libro, su sinopsis si hace hover sobre la portada del libro y su precio. 
* ***Agregado de libro(s) al carrito***
4. En base al libro seleccionado, el cliente podrá dar click al icono del carrito en donde se irán apilando los libros.
5. En el carrito, el cliente podrá quitar los libros no deseados al dar click en la opción “eliminar libro”.
6. También cuenta con la opción de “checkout” en la que se mostrará el resumen de compra y un mensaje de despedida.
* ***Libro(s) en carrito***
7. En base a la información proporcionada y los libros elegidos, se mostrará un resumen de compra, mostrando título, autor, cantidad, precio y total.

## 3. Diagrama de Clases
![diagrama](https://media.discordapp.net/attachments/1060271373974523994/1060271884597477467/image.png?width=591&height=676)

## 4. Diagrama EER y Relacional
![diagrama-eer](https://media.discordapp.net/attachments/1060271373974523994/1060272539835834448/image.png)
![diagrama-relacional](https://media.discordapp.net/attachments/1060271373974523994/1060272656877895680/image.png)

## 5. Manual de Usuario
### Pantalla Home
![home](https://media.discordapp.net/attachments/1060271373974523994/1060273136613982268/image.png)

En la pantalla de Home el usuario podrá ver el botón de “Log In” (“Log Out” si ya inició sesión) que lo llevará a la pestaña de Sign Up (Registro por si no tiene cuenta) donde si ya tiene una cuenta podrá iniciar sesión al final del formulario (consulte la siguiente pantalla para verlo), así como entrar al catálogo de libros, si no ha iniciado sesión/no tiene cuenta la página de Cart estará vacía y le aparecerá un botón de “Log In” en vez de “Checkout”. Al mismo tiempo podrá ver las redes sociales de la página como pinterest, instagram, facebook y twitter. 

### Pantalla Sign Up
![sign-ip](https://media.discordapp.net/attachments/1060271373974523994/1060273642006663168/image.png)

Si el usuario no tiene una cuenta la podrá hacer en la pestaña de Log In donde se le pedirá que llene los datos en pantalla, una vez escrito todo podrá picarle al botón de “Sign Up” y ya quedará registrado en la página. Como ya se explicó antes, si el usuario tiene cuenta puede darle click al botón Log In que lo llevará a la página de Log In. Si no se escribe nada, los campos se marcarán de color rojo pidiendo que por favor escriba en todos los campos. 

### Pantalla Login
![login](https://media.discordapp.net/attachments/1060271373974523994/1060273881081987163/image.png)

Si el usuario ya tiene una cuenta solo será necesario que inicie sesión escribiendo su username y su password. Si la información es incorrecta lo redireccionará a la misma página, mientras que si la información es correcta será redireccionado a la página de Shop. 

### Pantalla Shop
![shop](https://media.discordapp.net/attachments/1060271373974523994/1060274051718856704/image.png)

En esta página el usuario podrá ver el catálogo de libros que ofrece la página, si pasa su cursor por cada portada de los libros entonces podrá ver su sinopsis. Cada libro cuenta con el título, el precio y la calificación que tiene. Al lado del título hay un pequeño carrito donde el usuario podrá picarle para agregar libros a su carrito, si ya inició sesión entonces el libro ya se mostrará en su carrito, si no ha iniciado sesión la función del carrito no funciona puesto que debe iniciar sesión.

### Pantalla Cart
![cart](https://user-images.githubusercontent.com/42215143/210631277-1c4f7685-eb76-4e26-92a3-f5468ea0a2ff.png)

En el carrito el usuario podrá ver los libros que ha agregado al carrito (si tiene cuenta e inició sesión), en la parte derecha verá un pequeño cuadro que le dirá el pago del envío que en este caso es gratis para todos y el total a pagar junto con dos botones, el “checkout” para pagarlos y finalmente ver el resumen de su compra y el “vaciar carrito” que le vaciará todo el contenido del carrito. Y como ya se había mencionado antes, si no tiene cuenta y no ha iniciado sesión, no podrá agregar nada al carrito y en vez de aparecerle en la derecha los botones “checkout” y “vaciar carrito” verá un botón de “Log In” que lo llevará a la página de Log In. 

### Pantalla Checkout
![image](https://user-images.githubusercontent.com/42215143/210631486-b0607670-5d4f-4b59-afd6-b939beb95827.png)

La pantalla de Checkout como ya se explicó antes, solo está disponible para aquellos usuarios que ya iniciaron sesión. En Checkout primero podrán ver un pequeño cuadro con la información del envío, es decir, a qué nombre está la orden (todo eso con base a los datos que se pusieron cuando se registró el usuario en la página), al igual que su dirección de envío. En caso de que la persona quiera cambiar la dirección del envío podrá hacerlo con el botón de “Cambiar dirección” que lo llevará a la página de Cambiar Información que se explicará después. El usuario podrá ver un resumen con los libros que escogió, así como ver el total de nuevo y un botón de “Confirmar” cuando esté listo para hacer su compra que le pondrá un mensaje en pantalla.

![image](https://user-images.githubusercontent.com/42215143/210631558-79ec64de-3bb7-42ba-8b4e-0c0dd24b00dc.png)

Y al picarle aceptar lo llevará de regreso a la pantalla de Shop, ya con su carrito vacío.

### Pantalla Update
![image](https://user-images.githubusercontent.com/42215143/210631633-cc5d5bd1-7b03-4e24-9a3f-b491032b65a6.png)

Esta página también solo estará disponible para aquellos usuarios que han iniciado sesión. Una vez que desde Checkout le pican al botón de “Cambiar dirección” los llevará a esta página. Allí tendrán que llenar los datos vistos en pantalla y picarle al botón de “Actualizar” que inmediatamente actualizará sus datos en la base de datos y lo llevará a Checkout de nuevo para que esa nueva dirección salga allí. 

### Pantalla Agregar
![image](https://user-images.githubusercontent.com/42215143/210631733-31bf7533-6845-40ee-a6fe-8ba8ac6b40f3.png)

La pantalla de Administrador solo está disponible para aquel usuario designado como el administrador. En este caso solo nuestro usuario “coco” puede ingresar a esta pantalla. Desde el momento que hace Login y los datos son correctos se le llevará a esta pantalla donde podrá agregar un nuevo libro a la base de datos. Y una vez que ingrese los datos en pantalla y le pique al botón “Agregar”, le aparecerá un mensaje en pantalla con lo siguiente:

![image](https://user-images.githubusercontent.com/42215143/210631798-38593a4e-8e1c-42ad-af9b-f0b47bf37927.png)

Y al picarle aceptar a ese botón simplemente lo llevará de vuelta a la pantalla de Agregar Producto. 

## 6. Video de funcionalidad del proyecto
https://drive.google.com/file/d/12dztAOveRp72jWJWUqxRzDyrNHPomp6t/view?usp=sharing 
