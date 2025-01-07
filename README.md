# PHP Foreach Loop and Pass-by-Reference Gotcha

This example demonstrates a common pitfall in PHP involving foreach loops, array modification, and pass-by-reference.  Unsetting elements within a foreach loop on an array passed by reference can produce unexpected results because the loop's internal pointer might skip elements after an unset operation.

**Problem:** The `foo` function aims to remove elements with the value 'someValue' from an array. However, because PHP uses pass-by-reference by default for arrays, the original array is modified directly. Unsetting elements during iteration using `unset()` alters the array's structure, potentially causing the loop to skip elements.