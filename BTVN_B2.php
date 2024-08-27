<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>
<body>
    <?php
    // Bài 1 : Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
    echo "Bài 1: Số ký tự trong chuỗi 'Hello World' là: ";
    echo strlen("Hello World");
    echo "<br>";

    //Bài 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
    echo "Bài 2: Số từ trong chuỗi 'Hello World' là: ";
    $str = "Hello World";
    echo str_word_count($str);
    echo "<br>";

    //Bài 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
    echo "Bài 3: Đảo ngược chuỗi 'Hello World' thành: ";
    echo strrev("Hello World");
    echo "<br>";

    //Bài 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
    echo "Bài 4: Tìm kiếm chuỗi 'World' trong chuỗi 'Hello World' là: ";
    echo strpos("Hello World", "World");
    echo "<br>";

    //Bài 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
    echo "Bài 5: Thay thế 'World' trong 'Hello World' thành 'Sammy': ";
    echo str_replace("World","Sammy","Hello Sammy");
    echo "<br>";

    //Bài 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
    echo "Bài 6: Kiểm tra xem chuỗi có bắt đầu bằng 'Hello' không:<br>";
    $str1 = "Hello world";
    $str2 = "Hello Huyen";
    $kiemtra = strncmp($str1, $str2, "5");
    if( $kiemtra === 0) {
    echo"Chuỗi bắt đầu bằng một chuỗi con khác!";
    }else{
    echo"Chuỗi không bắt đầu bằng một chuỗi con khác!";
    }
    echo"<br>";

    // Bài 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    echo "Bài 7: Chuyển đổi chuỗi 'hello TMU' thành chữ hoa : ";
    $str1 = "hello TMU";
    $str2 = strtoupper($str1);
    echo $str2;
    echo"<br>";

    //Bài 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
    echo "Bài 8: Chuyển 'HELLO TMU' thành chữ thường: "; 
    $str = "HELLO TMU";
    echo strtolower($str);
    echo"<br>";

    //Bài 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
    echo "Bài 9: Chuyển 'hello TMU' thành in hoa chữ cái đầu: ";
    $str1 = "hello TMU";
    echo ucwords($str1);
    echo "<br>";

    //Bài 10: Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
    echo "Bài 10: Loại bỏ khoảng trắng ở đầu và cuối của chuỗi' Hello TMU ': ";
    $str = " Hello TMU ";
    echo "[".$str."]";    //[ Hello TMU ];
    echo "[".trim($str)."]";
    echo "<br>";

    //Bài 11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    echo "Bài 11: Loại bỏ kí tự đầu tiên của chuỗi 'SHello TMU' là: ";
    $str= "SHello TMU";
    echo ltrim($str,"S");
    echo "<br>";

    //Bài 12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    echo "Bài 12: Loại bỏ ký tự cuối của chuỗi 'Hello TMU!' là: ";
    $str= "Hello TMU!";
    echo rtrim($str, "!");
    echo "<br>";

    //Bài 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    echo "Bài 13: Tách chuỗi thành một mảng các phần tử: ";
    $str = ("Táo, Cam, Lê, Dưa Hấu");
    print_r(explode(",", $str));
    echo "<br>";

    //Bài 14: Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    echo "Bài 14: Nối các phần tử của một mảng thành một chuỗi: ";
    $fruits = array("Táo", "Cam", "Lê", "Dưa Hấu");
    $fruit_string = implode(", ", $fruits);
    echo $fruit_string; 
    echo "<br>";

    //Bài 15: Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
    echo "Bài 15: Thêm '!' vào cuối của chuỗi 'Hello TMU' là: ";
    $str= "Xin chào TMU";
    echo str_pad($str, 20, "!", STR_PAD_BOTH);
    echo "<br>";

    //Bài 16: Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    echo "Bài 16: Kiểm tra xem một chuỗi có kết thúc bằng chuỗi con khác hay không:<br> ";
    $word = "Hello Sammy";
    $check_word = "TMU";
    
    if (strrchr($word, $check_word) === $check_word) {
        echo "Từ '$word' kết thúc bằng '$check_word'. Chuỗi không kết thúc bằng chuỗi con khác!";
    } else {
        echo "Từ '$word' không kết thúc bằng '$check_word'. Chuỗi kết thúc bằng chuỗi con khác!";
    }
    echo"<br>";

    //Bài 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    echo "Bài 17: Kiểm tra xem một chuỗi có chứa chuỗi con khác không: ";
    $str1="Xin chào TMU!";
    $str2="T";
    if(strstr($str1,$str2)){
        echo"Chuỗi có chứa một chuỗi con khác!";
    }
    else{
        echo"Chuỗi không chứa một chuỗi con khác!";
    }
    echo"<br>";

    //Bài 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    echo "Bài 18:Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác: ";
    $str1="123!@#$%^TMU234!@$%^&*";
    echo preg_replace("/\W+/","_",$str1);
    echo"<br>";

    //Bài 19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
    echo "Bài 19: Kiểm tra xem chuỗi có phải là một số nguyên không: ";
    $x=16;
    if(is_int($x)){
    echo"Biến x thuộc kiểu số nguyên";
    }
    else{
    echo"Biến x không thuộc kiểu số nguyên";
    }
    echo"<br>";

    //Bài 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
    echo "Bài 20: Kiểm tra xem có phải email hợp lệ không: ";
    $str1="Huyenngoc3654238@gmail.com";
    $str2="Huyenngoc3654238@gmail.com";
    if(filter_var($str2, FILTER_VALIDATE_EMAIL)){
    echo"Email hợp lệ!";
    }
    else{
    echo"Email không hợp lệ!";
    }
    echo "<br>";
    




  

   

    
