# Simui
# RESPONSIVE HTML Package

The RESPONSIVE HTML package provides a convenient way to add custom class names to HTML elements based on different breakpoints without the need to write CSS media queries. This README will guide you through the process of using this package to achieve responsive designs easily.

## Features

One of the most powerful features of this package is the ability to add a custom class name attribute to a certain breakpoint without having to write CSS media queries.

## Examples

### Example #1: Adding a Blue Background for Mobile Devices Only

1. Create a `div` HTML element and add the `data-info=""` attribute.
2. Define a CSS class named 'blue' with the `background-color: blue;` property.
3. Add the breakpoint and class name pattern to the `data-info` attribute: `max-767px#blue`.
4. The final result should look like this: `<div data-info="max-767px#blue"></div>`

```html
<style type="text/css">
.blue {
   background-color: blue;
}
</style>
<div data-info="max-767px#blue" style="height: 250px;"></div>

## Example #2: Adding a Yellow Background for Desktop Devices Only

1. Define a CSS class named 'yellow' with the `background-color: yellow;` property.
2. Add the class names for different devices using the format `.min-768px#yellow`.
3. Update the `data-info` attribute to include both class names: `max-767px#blue.min-768px#yellow`.
4. The final result should look like this: `<div data-info="max-767px#blue.min-768px#yellow"></div>`

```html
<style type="text/css">
.yellow {
   background-color: yellow;
}
</style>
<div data-info="max-767px#blue.min-768px#yellow" style="height: 250px;" class="yellow"></div>



