<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="StyleSheet" href="style.css" />
</head>
<body>
    <div id="container">
        <div id="Sub-Container">
        <h1>Enter the word/sentence</h1>
        <textarea id="convert" rows="4" cols="50"></textarea>
        <button id="naming">Naming Format</button>
        <button id="toUpper">Upper</button>
        <button id="camel">Camel</button>
        <button id="toLower">Lower</button>
        <textarea id="output" type="text" rows="4" cols="100"></textarea>
        </div>
    </div>
</body>
<script>
    function toCamelCase(text) {
    return text.replace(/(?:^\w|[A-Z]|\b\w)/g, function(word, index) {
        return index === 0 ? word.toLowerCase() : word.toUpperCase();
    }).replace(/\s+/g, '');
}
function capitalizeFirst(text) {
    return text.replace(/\b\w+/g, function(word) {
        return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    });
}
    let upper = document.getElementById("toUpper");
    let camel = document.getElementById("camel");
    let naming = document.getElementById("naming");
    let lower = document.getElementById("toLower");
    let container = document.getElementById("container");
    let subContainer = document.getElementById("Sub-Container");
upper.addEventListener('click',()=>{
    let value = document.getElementById("convert").value;
    let output = document.getElementById("output");
    output.value = value.toUpperCase();
});
lower.addEventListener('click',()=>{
    let value = document.getElementById("convert").value;
    let output = document.getElementById("output");
    output.value = value.toLowerCase();
});
camel.addEventListener('click',()=>{
    let value = document.getElementById("convert").value;
    let output = document.getElementById("output");
    output.value = toCamelCase(value);
});
naming.addEventListener('click',()=>{
    let value = document.getElementById("convert").value;
    let output = document.getElementById("output");
    output.value = capitalizeFirst(value);
});
/*container.addEventListener("mouseover",()=>{
container.style.setProperty('background-color','rgba(65,65,65,0.7)','important');
container.style.setProperty('background-image','none','important');
subContainer.style.setProperty('background-image','url("bimg.jpg")');
});
subContainer.addEventListener("mouseover",()=>{
container.style.setProperty('background-color','none','important');
container.style.setProperty('background-image','url("bimg.jpg")');
subContainer.style.setProperty('background-image','none','important');
subContainer.style.setProperty('background-color','rgba(65,65,65,0.7)','important');
});*/
</script>
</html>