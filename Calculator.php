<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator_Using_PHP</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item-left">
                    <div class="app-title">
                        <div class="animated infinite pulse">
                        <div class="vl">&nbsp;PHP <br>&nbsp;Calculator <br></div>
                        </div>
                    </div>
                </div>
                
                <div class="screen-body-item">
                    <div class="app-form">
                        <form method = "POST">
                            <div class="app-form-group">
                                <input type="text" class="app-form-control"name = "val1">
                            </div>
                            <div class="app-form-group">
                            <input type="text" class="app-form-control" name = "val2">
                            </div>
                            <div class="select-style">
                                <select name="operation" class="select-style">
                                    <option value="add">ADD</option>
                                    <option value="sub">SUB</option>
                                    <option value="mul">MULT</option>
                                    <option value="div">DIV</option>
                                    <option value="mod">MOD</option>
                                </select>
                            </div>

                            <div>
                                <input type="submit" name="submit" value="submit" class="app-form-button">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="app-form-group showdata">
            <p class="value">
               <?php

               if(isset($_POST['submit'])){
               $charVal = $_POST['val1'];
               $charVal1 = $_POST['val2'];
            //    $charResult = $charVal.$charVal1;
               $operation = $_POST['operation'];

               switch( $operation){
                    case "add":$add =  $charVal + $charVal1;
                          echo "The addition of two number is {$add}";
                          break;
                          case "sub":$sub =  $charVal - $charVal1;
                          echo "The substraction of two number is {$sub}";
                          break;
                          case "mul":$mul =  $charVal * $charVal1;
                          echo "The multiplication of two number is {$mul}";
                          break;
                          case "div":$div =  $charVal / $charVal1;
                          echo "The division of two number is {$div}";
                          break;
                          case "mod":$mod =  $charVal % $charVal1;
                          echo "The module of two number is {$mod}";
                          break;
                          default : echo "This not exits";
               }
              
               }

               ?>
            </p>
        </div>
        </div>
    </div>
</body>
</html>