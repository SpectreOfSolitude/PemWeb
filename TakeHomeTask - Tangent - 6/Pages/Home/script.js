function posting(){
    event.preventDefault();
    let post = document.getElementById("inputPost").value;
    console.log(post)
    let template = document.createElement("p")
    let textNode = document.createTextNode(post);
    template.classList.toggle("feedbox")
    template.appendChild(textNode);
    feedsbox = document.getElementById("feeds");
    feedsbox.appendChild(template)
}

