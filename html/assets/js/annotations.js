function createAnnotationDiv ()
{
    let div = document.createElement("div");
    div.setAttribute("id", "annotation");

    document.getElementById("body").appendChild(div);
}

function hideAnnotationDiv () { $("#annotation").hide(); }

function showAnnotationDiv () { $("#annotation").show(); }

function setAnnotationMessage (stringMessage, howManySeconds = 8)
{
    showAnnotationDiv();
    $("#annotation").text(stringMessage);
}

createAnnotationDiv();