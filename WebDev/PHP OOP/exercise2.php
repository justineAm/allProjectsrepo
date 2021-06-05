

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <br><br>
    <form action="<?php $_PHP_SELF ?>" method="POST" name="dropdown">
    <div class="selecteditems">
    </div>
    <input type="text" name="addme" value="" placeholder="Enter something here..."/>
    <button name="submit" class="btn btn-secondary"type="submit">ADD to dropdown</button>

    <br><br><br>
    
</form>
</body>
</html>
<?php

   
        class addtoDropdown{
            public $add;
            public function myFunction($add){
                $this->add = $add;
            }
            public function __toString() {
                return $this->add;
              }
        }
        if(isset($_POST['submit'])){
        $addto = $_POST['addme'];
        //echo "$addto";
        $drop = new addtoDropdown();
        $drop ->myFunction($addto);
        

        
        echo ( "<select>
                <option value='Dropdown'>Dropdown List</option>
                <option selected = 'selected'value='$drop'>$drop</option>
                <option value='option1'>option1</option>
                <option value='option2'>option2</option>
                <option value='option3'>option3    </option>
                
                </select>");    
        
        
        }

        

    

?>