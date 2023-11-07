<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .element {
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body style="margin-top: 80px">

    <div id="element-container"></div>

    <script>
        var elements = @json($elements);
        var elementContainer = document.getElementById('element-container');

        elements.forEach(function(element) {
            var newElement = document.createElement(element.tagname);
            newElement.className = 'element';

            if (element.tagname === 'img') {
                newElement.src = element.src;
            } else {
                newElement.textContent = element.text;
            }

            elementContainer.appendChild(newElement);
        });
    </script>
</body>

</html>
