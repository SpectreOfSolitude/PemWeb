function posting(){
    event.preventDefault();
    console.log("ping")
    let post = document.getElementById("inputPost").value;
    console.log(post)
    let template = document.createElement("p")
    let textNode = document.createTextNode(post);
    template.classList.toggle("feedbox")
    template.appendChild(textNode);
    feedsbox = document.getElementById("feeds");
    feedsbox.appendChild(template)

    console.log(feedsbox)
    console.log("p0ng")
}

