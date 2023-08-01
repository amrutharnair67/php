
<!DOCTYPE html>
<html >

<body>
  <?php
    function fibonacci($n) {
        $fib = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }
    
    
    $length = 10;
    $result = fibonacci($length);
    
    // Output the Fibonacci sequence
    echo "Fibonacci sequence of length $length: ";
    foreach ($result as $num) {
        echo $num . " ";
    }
   
  ?>
</body>
</html>