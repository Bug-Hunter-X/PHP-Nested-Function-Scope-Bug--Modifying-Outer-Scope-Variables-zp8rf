# PHP Nested Function Scope Bug

This repository demonstrates a common bug in PHP related to variable scope within nested functions.  When a nested function attempts to modify a variable from its parent function's scope, it creates a copy unless explicitly passed by reference.

The `bug.php` file shows the erroneous behavior, while `bugSolution.php` provides a corrected version using references.

**Key Learning:** Understanding variable scope and the importance of using the `&` operator for modifying variables in outer scopes from inner functions in PHP.