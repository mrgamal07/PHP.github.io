<?php
// Function that performs division
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

// Error handling with try-catch-finally
try {
    $num1 = 10;
    $num2 = 0;

    $result = divide($num1, $num2);
    echo "Result: $result";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "\nProcess completed.";
}
?>
