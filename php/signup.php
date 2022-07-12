<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // lets check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - Already exists";
            }
            else{
                // lets check user upload file or not
                if(isset($_FILES['image'])){
                    $img_name = $FILES['image']['name']; // getting user uplaoded image name

                    $tmp_name = $FILES['image']['tmp_name']; // this temporary name is used to save file in our folder

                    // lets explode image and get the last extension like jpg, png

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // here we get the extension fo an user uplaoded image file

                    $extensions = ['png', 'jpg', 'jpeg']; // these are some valid image extensions and we have store them in array

                    if(in_array($img_ext, $extensions) === true){
                        $time = time(); // this will return us the current time 

                        $status = "Active now"; // once user signed up then his status will be active now
                    }else{
                        echo "Please select an image file - jpeg, jpg, png";
                    }
                }else{
                    echo "Please upload an image file!";
                }
            }
        }else{
            echo "$email - This email is not valid!";
        }
    }else{
        echo "All input fields are required!";
    }
?>