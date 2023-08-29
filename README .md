
# Simui
SIMUI is an open source frontend web framework built to ease the frontend development process.

How SIMUI is defferent from other frontend web frameworks such as Bootstrap or Foundation ?

## GET STARTED

```html
<!-- Minified CSS ( CDN ) in head --> 
<link rel="stylesheet" type="text/css" href="https://unpkg.com/css/simui.min.css"> 

<!--Minified JS ( CDN) script tag to your project's head / footer --> 
<script async src="https://unpkg.com/js/simui.min.js"></script> 

```
## RESPONSIVE HTML

One of the most powerful feautres of this package is that you can add a custom class name attribute to a certain break point without having to write CSS media queries.

Let us show two examples below.
- add a custom blue background class name for mobile devices only ( from 767px width and below) and,
- add a custom yellow background class name for desktop devices only ( from 768px width and above)

### Example #1 : Adding blue background for Mobile Devices only
1. Create a div html element and add data-info="" attribute

2. Create a CSS class name and call it 'blue', and give it a background-color: blue; CSS value

3. Add a data-info="" attribute, and write the following pattern

4. Add max-767px#blue into this data attribute

5. Now the final results should be
```html
<div data-info="max-767px#blue"></div>
```

6. The results for this code should produce a class name called 'blue', being added only for all
devices starting from 767px of width and below

7. Please resize the browser to see the changes
Note:

- A # Sign, seperate a breakpoint and desired class name
- A . Sign, seperate each collection so you can add many class for different devices as you want.
```html
<style type="text/css">
               .blue{
                  background-color: blue;
               }
            </style>
<div data-info="max-767px#blue" style="height: 250px;"></div>
```
### Example #2 : Adding yellow background for Desktop Devices only

#### What if you want to add more classes for another devices?

We csan achieve that by seperating each set by a period ( a dot or '.'). Take a look an example below.

1. Create a CSS class name and call it 'yellow', and give it a background-color: yellow; CSS value.
2.  the previous html snippet 
```html
 <div data-info="max-767px#blue"></div>
```
Add .min-768px#yellow to the data-info="" attribute
The final code should be updated to 
```html
<div data-info="max-767px#blue.min-768px#yellow"></div>
```
Now if you resize the browser you should see a blue on mobile screens and yellow on desktop screens
Note:

- A # Sign, seperate a breakpoint and desired class name
- A . Sign, seperate each collection so you can add many class for different devices as you want.

```html
<style type="text/css">
               .blue{
                  background-color: blue;
               }
               .yellow{
                  background-color: yellow;
               }
            </style>
<div data-info="max-767px#blue.min-768px#yellow" style="height: 250px;" class="yellow"></div>
```

## REACTIVE HTML
One of the most powerful feautres of this package is that you can toggle a class name for any HTML element, when ever a your desired element is triggered.

#### Let us show two examples below.

### Example #1 : Adding blue background to a paragraph when button is clicked

1. Create a paragraph html element and add id="myparagraph" attribute
2. Create a CSS class name and call it 'blue', and give it a background-color: blue; CSS value
3. Next, create a button html element and add data-toggle="" attribute
4. Add 'myparagraph|blue|click' to the data-toggle="" attribute
5. The results should be, a blue paragraph when the button is clicked
6. Please click on button to see the results

#### Note:

The format is : id|class name|event

Where : id - is attribute of an element to be changed ( like p#myparagraph )

class Name : is class name to be toggled on that id ( like .blue class you created )
event : is an event on the element with a data-toggle attribute ( like button you create)

Event can be any of JavaScript events such as ( click, mousemove, mousedown etc )

```html
<style type="text/css">
.blue{
    background-color: blue;
}
</style>

<button data-toggle="myparagraph|blue|click">Click Me</button>

<p id="myparagraph" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
```
###### If you want to add multiple class names for a same class name you can make use of data-toggleall="" attribute

```html
<style type="text/css">
.green{
    background-color: green;
}
</style>

<button data-toggleall="p1|green|click">Change Backgroud</button>
<button data-toggleall="p2|green|click">Change Backgroud</button>
<p id="p1" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
<p id="p2" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
```