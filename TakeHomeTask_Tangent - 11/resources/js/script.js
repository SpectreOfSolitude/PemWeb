let array = [];

function arr(){
    
}

function returning() {
    var newArray = array.map(function(value) {
        console.log(value)
        feedsbox = document.getElementById("feeds");
        feedsbox.appendChild(value)
        return value
    });
    console.log(newArray)
}

function create() {
    event.preventDefault();
    let post = document.getElementById("inputPost").value;
    console.log(post)
    let template = document.createElement("p")
    let textNode = document.createTextNode(post);
    template.classList.toggle("feedbox")
    template.appendChild(textNode);
    array.push(template)
    console.log(array)
    
}
function posting(){
    create()
    returning()

}

