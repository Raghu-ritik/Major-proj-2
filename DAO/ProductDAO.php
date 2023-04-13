<?php

    class ProductDAO{
        public static function getAllProducts(){
            $conn=DBConnect::getConnection();
            
            //prepared statement
            $query="SELECT * FROM `products`";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                return $result;
            }
            else{
                echo "No Products Found !";   
                return false;
            }
        }

        public static function getProductById($Prod_id){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `products` WHERE P_ID = '$Prod_id'";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                return $result;
            }
            else{
                echo "No Products Found !";   
                return false;
            }
        }


        public static function getNextProductId(){
            $conn=DBConnect::getConnection();
            $query="SELECT MAX(P_ID) FROM products ";

            $stmt=$conn->prepare($query);

            $stmt->execute();

            $result=$stmt->fetchColumn();
            $newCustomer="";
            if($stmt->rowCount()>0){
               
                $newCustomer="P".(intval(substr($result,1))+1);
            } 
            else
                $newCustomer="P101";
           
            
            return $newCustomer;
        }

        public static function addProduct($product){

            $conn=DBConnect::getConnection();

            $PId= ProductDAO::getNextProductId();
            $PName=$product->getPName();
            $price=$product->getPrice();
            $description=$product->getDescription();
            $images=$product->getImages();
            $quantity=$product->getQuantity();
            $createdOn=date("Y-m-d");
            $updatedOn=date("Y-m-d");
            $IId=$product->getIId();
            $status=$product->getStatus();

            $query1="Insert into PRODUCTS values (:PId,:PName,:price,:description,:images,:quantity,:createdOn,:updatedOn,:IId,:status)";
            $stmt1=$conn->prepare($query1);

            $stmt1->bindParam('PId',$PId);
            $stmt1->bindParam('PName',$PName);
            $stmt1->bindParam('price',$price);
            $stmt1->bindParam('description',$description);
            $stmt1->bindParam('images',$images);
            $stmt1->bindParam('quantity',$quantity);
            $stmt1->bindParam('createdOn',$createdOn);
            $stmt1->bindParam('updatedOn',$updatedOn);
            $stmt1->bindParam('IId',$IId);
            $stmt1->bindParam('status',$status);
            if($stmt1->execute()){
                return true;
            }
            else {
                $flag=false;
            }
        }

        public static function updateProduct($product){
            $conn=DBConnect::getConnection();

            $PId= $product->getPId();
            $PName=$product->getPName();
            $price=$product->getPrice();
            $description=$product->getDescription();
            $images=$product->getImages();
            $quantity=$product->getQuantity();
            $createdOn=$product->getCreatedOn();
            $updatedOn=date("Y-m-d");
            $IId=$product->getIId();
            $status=$product->getStatus();

            $query1="update PRODUCTS set PName=:PName,price=:price,description=:description,images=:images,quantity=:quantity,updatedOn=:updatedOn,IId=:IId,status=:status where PId=:PId";
            $stmt1=$conn->prepare($query1);
            
            $stmt1->bindParam('PName',$PName);
            $stmt1->bindParam('price',$price);
            $stmt1->bindParam('description',$description);
            $stmt1->bindParam('images',$images);
            $stmt1->bindParam('quantity',$quantity);
            $stmt1->bindParam('updatedOn',$updatedOn);
            $stmt1->bindParam('IId',$IId);
            $stmt1->bindParam('status',$status);
            $stmt1->bindParam('PId',$PId);
            if($stmt1->execute()){
                return true;
            }
            else {
                $flag=false;
            }
        }

        public static function deleteProduct($PId){
            $conn=DBConnect::getConnection();

            $query1="update product set status='DISABLE' where PId=:PId";
            $stmt1=$conn->prepare($query1);

            $stmt1->bindParam('PId',$PId);
            if($stmt1->execute()){
                return true;
            }
            else {
                $flag=false;
            }
        }

    }
?>