<script type="text/javascript">
   // Creamos la variable 'app' y le damos el nombre del modulo
   var app = angular.module('listarRegistros', []);
 
   // Creamos el controllador 'postresController'
   app.controller('postresController', function($scope, $http) {
 
   // Mediante el servicio $http hacemos una petición 'get' a un archivo PHP que nos
      devuelve los registros de la base de datos en formato JSON
   $http.get("archivo.php")
     .then(function (response) {$scope.names = response.data.records;});
   });       
</script>