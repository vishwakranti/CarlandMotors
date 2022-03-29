<?php
//load helper functions
require_once './utilities/helperFunctions.php';

//load database connections
require_once "config.php";
$cars ="";

if(!isAdmin()){
	header("location: index.php");
	exit;
}

if(isRequestMethodGet() && isset($_GET['car_id']))
{
    $car_id = $_GET['car_id'];

	//prepare sql statement
	$sql = "SELECT car.car_id, car.price,car.year, car.manufacturer, 
						car.model, car.colour, car_images.file_name, 
						car_images.id AS image_id
				FROM `car` 
				LEFT OUTER JOIN car_images ON car_images.car_id = car.car_id 
                WHERE car.car_id =" . $car_id;
	
	$stmt = $mysqli->prepare($sql);

	if($stmt->execute()) //execute prepared sql
	{
        $cars = $stmt->get_result(); // store result
	}

}
else if (isRequestMethodPost())
{
    $updateMode = getPostRequestValue('updateMode');
    $car_id = getPostRequestValue('carId');
   

    if ($updateMode == 'addImage')
    {
        if(isset($_FILES['carPhotosUpload']))
        {   
            $uploadFileCount = count($_FILES['carPhotosUpload']['name']);
            $query = "INSERT INTO car_images (car_id,file_name) VALUES ";
            $valuesSql = "";
            $fileCopied = false;
            for($x = 0; $x < $uploadFileCount; $x++ )
            {
                $fileToBeUploaded = $_FILES['carPhotosUpload']['name'][$x];
                if(preg_match('/[.](jpg)|(jpeg)|(png)|(gif)$/', $fileToBeUploaded))
                {
                    $fileToBeUploadedTmp = $_FILES['carPhotosUpload']['tmp_name'][$x];
                    $targetFile = "image_" . $x . "_" . time() . "." . pathinfo($fileToBeUploaded)['extension'];
                    $fileCopied = move_uploaded_file($fileToBeUploadedTmp, IMAGE_UPLOAD_PATH . $targetFile);

                    if($fileCopied)
                       $valuesSql .=  "(" . $car_id . ",\"" . $targetFile . "\"),";  
                }
            }

            $valuesSql = substr($valuesSql, 0, strlen($valuesSql) - 1);
            
            if($valuesSql <> "")
            {
                $stmt = $mysqli->prepare($query . $valuesSql);

                $stmt->execute();
            }
        }
        else
        {
            die(); //todo: add better validation and error handling
        }
    }
    else if ($updateMode == 'deleteImage')
    {
        $image_id = getPostRequestValue('imageId');
        $image_file_name = getPostRequestValue('imageFileName');

        //delete file data from database
        $sql = "DELETE FROM car_images where id = " . $image_id;

        $stmt = $mysqli->prepare($sql);
        $stmt->execute();

        //delete file from server
        $file_unlink_result = unlink(IMAGE_UPLOAD_PATH . $image_file_name);
    }
    else
    {
        die();
    }

    header("location: managePhotos.php?car_id=" . $car_id);
    exit;
}
else{
	header("location: manageCars.php");
	exit;
}

?>

<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Carland Motors - Find the best car for you!">
	<meta name="author" content="Vishwakranti Suryawanshi">
	<title>Carland Motors</title>
	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	 crossorigin="anonymous">
	<link rel="icon" href="favicon.ico">
	<meta name="theme-color" content="#7952b3">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	 crossorigin="anonymous"></script>

	<style>
		@media (min-width: 768px) {
			.mt-0 {
				margin-top: 20px !important;
			}
		}
	</style>
</head>

<body>
	<header class="mt-0">
		<?php
		include './partials/navbar.php';
		?>
	</header>
	<main>
		<div class="container mt-0">
			<div class="row justify-content-center">
				<div class="col-auto display-6">
					<?php 
                        $car = $cars->fetch_assoc();
                        echo "<a href=\"carDetails.php?car_id=" . $car['car_id'] . "\">" . $car['year'] . " " . $car['manufacturer'] . " " . $car['model'] . " " . $car['colour'] . "</a>"; ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<h3 class="display-6 text-center"> Add Photos</h3>
				<div class="col-auto">
					<form enctype="multipart/form-data" action="<?php print $_SERVER['PHP_SELF']?>"
					 method="POST" class="row g-3">
						<div class="col-auto">
							<?php echo "<input type=\"hidden\" name=\"updateMode\" value=\"addImage\"> 
                                       <input type=\"hidden\" name=\"carId\" value=\"" . $car[ 'car_id'] . "\">" ; ?>
							<input type="file" class="form-control" id="inputCarPhotos" name="carPhotosUpload[]" multiple>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary mb-3">Upload</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						<h1 class="display-6">Delete Photos</h1>
					</p>
				</div>
				<div class="row">

					<?php
								if(($cars) && $cars->num_rows > 0 )
								{
                                    $i=1;
                                    foreach($cars as $car ) //iterate through the dataset we got from the database
                                    {
                                        
                                        if($car['file_name'])
                                        {
                                            echo "<div class=\"col-sm-2 text-end\">" .$i ."</div><div class=\"col-sm-8 text-center\">";
                                            echo "<img src=\"./images/" . $car['file_name']. "\" class=\"\" alt=\"...\" width=\"400\" height=\"300\">";

                                            echo "</div><div class=\"col-sm-2 text-start\">";
                                            echo "<form action=\"" . $_SERVER['PHP_SELF']. "\" method=\"POST\">";
                                             echo "    <input type=\"hidden\" name=\"updateMode\" value=\"deleteImage\">
                                                       <input type=\"hidden\" name=\"carId\" value=\"" . $car[ 'car_id'] . "\">
                                                       <input type=\"hidden\" name=\"imageId\" value=\"" . $car['image_id'] . "\">
                                                       <input type=\"hidden\" name=\"imageFileName\" value=\"" . $car['file_name'] . "\">
                                                       <button type=\"submit\" class=\"btn btn-primary justify-content-center\">Delete</button
                                                  </form></div>";
                                        }
                                        else{
                                            echo "<div class=\"row justify-content-center\"> <div class=\"col-4\"> <h1 class=\"display-4\">No images found!</h1></div></div>";
                                        }
                                        $i++;
                                            
                                    }
									
								}
							?>
				</div>
			</div>


		</div>
		<!-- /.container -->
		<!-- FOOTER -->
		<footer class="container mt-0">
			<p class="float-end"><a href="#">Site designed by Vishwakranti Suryawanshi</a></p>
			<p>&copy; 2022 Carland Motors Inc. </p>
		</footer>
	</main>
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	 crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/carland.js"></script>
</body>

</html>