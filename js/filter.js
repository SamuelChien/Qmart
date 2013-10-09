function toggleAllFilter()
{
    if (document.getElementById("storeForm").style.display != "none" || document.getElementById("otherForm").style.display != "none" || document.getElementById("posterInfoForm").style.display != "none" || document.getElementById("graphForm").style.display != "none")
    {
        document.getElementById("storeForm").style.display = "none";
        document.getElementById("otherForm").style.display = "none";
        document.getElementById("posterInfoForm").style.display = "none";
        document.getElementById("graphForm").style.display = "none";
        document.getElementById("submitButton").style.display = "none";
    }
    else
    {
        document.getElementById("storeForm").style.display = "block";
        document.getElementById("otherForm").style.display = "block";
        document.getElementById("posterInfoForm").style.display = "block";
        document.getElementById("graphForm").style.display = "block";
        document.getElementById("submitButton").style.display = "block"; 
    }
}

function storeFilter()
{
    if (document.getElementById("storeForm").style.display == "inline")
    {
        document.getElementById("storeForm").style.display="none";
        if ((document.getElementById("otherForm").style.display == "none") && (document.getElementById("posterInfoForm").style.display == "none") && (document.getElementById("graphForm").style.display == "none"))
            document.getElementById("submitButton").style.display="none";
    }
    else
    {
        document.getElementById("storeForm").style.display="inline";
        document.getElementById("submitButton").style.display="inline";
    }
}
function posterInfoFilter()
{
    if (document.getElementById("posterInfoForm").style.display == "inline")
    {
        document.getElementById("posterInfoForm").style.display="none";
        if ((document.getElementById("storeForm").style.display == "none") && (document.getElementById("otherForm").style.display == "none") && (document.getElementById("graphForm").style.display == "none"))
            document.getElementById("submitButton").style.display="none";
    }
    else
    {
        document.getElementById("posterInfoForm").style.display="inline";
        document.getElementById("submitButton").style.display="inline";
    }
}
function priceFilter()
{
    if (document.getElementById("graphForm").style.display == "inline")
    {
        document.getElementById("graphForm").style.display="none";
        if ((document.getElementById("storeForm").style.display == "none") && (document.getElementById("posterInfoForm").style.display == "none") && (document.getElementById("otherForm").style.display == "none"))
            document.getElementById("submitButton").style.display="none";
    }
    else
    {
        document.getElementById("graphForm").style.display="inline";
        document.getElementById("submitButton").style.display="inline";
    }
}
function otherFilter()
{
    if (document.getElementById("otherForm").style.display == "inline")
    {
        document.getElementById("otherForm").style.display="none";
        if ((document.getElementById("storeForm").style.display == "none") && (document.getElementById("posterInfoForm").style.display == "none") && (document.getElementById("graphForm").style.display == "none"))
            document.getElementById("submitButton").style.display="none";
    }
    else
    {
        document.getElementById("otherForm").style.display="inline";
        document.getElementById("submitButton").style.display="inline";
    }
}