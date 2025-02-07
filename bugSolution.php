To correct this, pass the variable by reference using the `&` operator in the function's parameter list. This ensures that the inner function directly manipulates the variable in the outer scope.

```php
<?php
function outerFunction() {
  $myVar = 10;

  function innerFunction(&$var) { // Pass by reference
    $var += 5; 
  }

  innerFunction($myVar);
  echo "Modified variable: " . $myVar; // Output: 15
}

outerFunction();
?>
```
By using the `&` before `$var` in the `innerFunction` definition, changes made to `$var` within the inner function will now reflect in the `$myVar` variable of the `outerFunction`.