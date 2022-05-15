<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
       <form action="" method="GET">
           <br>
             <div class="container">
                 <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                   Calculadora Basica SENA
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                
                                      <div class="col-md-5">
                                          <label for="">Numero 1</label>
                                          <input type="number" value="" class="form-control" name="numero1" id="numero1" required>
                                      </div>
                                    
                                      <div class="col-md-5">
                                          <label for="">Numero 2</label>
                                          <input type="number" value="" class="form-control" name="numero2" id="numero1" required>
                                      </div>
                                      <div class="col-md-2">
                                          <label for="">Operacion.</label>
                                          <select name="calculo" id="calculo" class="form-control">
                                              <option value="suma">+</option>
                                              <option value="resta">-</option>
                                              <option value="multiplicación">*</option>
                                              <option value="división">/</option>
                                          </select>
                                      </div>
                                  </div>
                                  <hr>
                                   <button type="submit" class="btn btn-primary pull-right">Operar</button>
                                </div>
                          </div>
                      </div>
                 </div>
             </div>
       </form>
       <div class="container">
           <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="alert alert-success">
                    <?php
                      $valor1 = $_GET['numero1'];
                      $valor2 = $_GET['numero2'];

                    $calculo =$_GET['calculo'];

                    if ($calculo == 'suma'){
                        print ('el resultado de la suma es:');
                        print ($valor1+$valor2);
                    }
                    else if($calculo == 'resta'){
                        print ('el resultado de la resta es:');
                        print ($valor1-$valor2);
                    }
                    else if($calculo == 'multiplicación'){
                        print ('el resultado de la multiplicación es:');
                        print ($valor1*$valor2);
                    }  
                    else if($calculo == 'división'){
                        print ('el resultado de la división es:');
                        print ($valor1-$valor2);
                    }
                    ?> 
                  </div>
               </div>
           </div>
       </div>
</body>
</html>

