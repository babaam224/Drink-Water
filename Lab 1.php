<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Exercise</title>
    <link rel='stylesheet' href="style.css">
    <style>
            table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>HTML Exercise</h1>
    <p>This is a simple exercise to practice HTML structure and elements.</p>
    <ol>
        <li>Headers</li>
        <li>Lists</li>
        <li>Tables</li>
    </ol>



    <h2>Headers</h2>
    <p>Headers are used to define the title or subtitle of a section. There are six levels of headers, from h1 to h6. The lower the number, the larger and more important the header</p>
    <h3>This is a level 3 header</h3>
    <h4>This is a level 4 header</h4>



    <h2>Lists</h2>
    <p>Lists are used to group a set of related items. There are three types of lists: ordered, unordered, and description. Ordered lists use numbers to indicate the order of the items. Unordered lists use bullets to indicate no specific order. Description lists use a term and a definition pair to describe an item</p>
    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>
    <ol>
        <li>Step 1: Boil water</li>
        <li>Step 2: Add coddee powder</li>
        <li>Step 3: Enjoy your coffee</li>
    </ol>
    <dl>
    <dt>HTML</dt>
        <dd>HyperText Markup Language</dd>
    <dt>CSS</dt>
        <dd>Cascading Style Sheet</dd>
    </dl>



    <h2>Tables</h2>
    <p>Tables are used to display data or information in a structured way. Tables consist of rows and columns. Each row is defined by a "tr" element. Each column is defined by a "th" element for table header or a "td" element for table data.</p>
    <table border="1" id = users>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Alice</td>
        <td>20</td>
    </table>



    <h2>Image</h2>
    <p>Images are used to enhance the visual presentation of a web page. The "img" tag is used to embed an image</p>

    <a href="https://www.apu.edu.my/" target="_blank">
    <img src="apu-logo.png" alt="This is a car" style="height:150px;">
    </a>



    <h2>Links</h2>
    <p>Links are created using the "a" tag. They are used to navigate between pages or external websites</p>



    <h2>Text Formatting</h2>
    <p>Text in HTML can be formatted in different styles such as <b>bold</b>, <i>italic</i>, and <u>underlined</u> to emphasize certain parts of the content.</p>



    <h2>Line Break and Horizontal Rule</h2>
    <p>A line break can be used to start a new line without starting a new paragraph. A horizontal rule can be used to separate sections of a web page.</p>
    <p>Line<br>Line<br>Line<br>Line<br>Line<hr>Line</p>



    <h2>HTML Entities</h2>
    <p>Special characters or symbols that cannot be typed directly can be displayed using entities in HTML.</p>
    <ul>
        <li>This website content is copyright &copy; 2025.</li>
        <li>For more information, contact us at &phone; 03-8996 1000.</li>
        <li>Water is represented as H<sub>2</sub>O, and Einstein’s equation is E = mc<sup>2</sup>.</li>
    </ul>
</body>
</html>