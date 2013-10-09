function checkLocalStorageIsSet(totalLength)
{
    if(typeof(Storage)!=="undefined")
    {   
        if (localStorage.startIndex && localStorage.endIndex)
        {   
            if(Number(localStorage.startIndex)+4 >=totalLength)
            {
                localStorage.startIndex=0;
                if(totalLength>4)
                {
                    localStorage.endIndex=4;
                }
                else
                {
                    localStorage.endIndex=totalLength;
                }
            }
            else
            {
                localStorage.startIndex = Number(localStorage.startIndex)+4;
                if(Number(localStorage.startIndex)+4<=totalLength)
                {
                    localStorage.endIndex=Number(localStorage.startIndex)+4;
                }
                else
                {
                    localStorage.endIndex=totalLength;
                }
            }
        }
        else
        {   if(totalLength > 4)
            {
                localStorage.startIndex=4;
                if(totalLength>8)
                {
                    localStorage.endIndex=8;
                }
                else
                {
                    localStorage.endIndex=totalLength;
                }
            }
            else
            {
                localStorage.startIndex=0;
                localStorage.endIndex=totalLength;
            }
        }
    }
}
function categoryRight()
{
    var elements = document.getElementsByClassName("dynamicCategory");
    var totalLength = elements.length;
    checkLocalStorageIsSet(totalLength);
    for (var i = 0; i < totalLength; i++)
    {
        elements[i].style.display = 'none';
    }


    for (var j = Number(localStorage.startIndex); j < Number(localStorage.endIndex); j++)
    {
        elements[j].style.display = 'block';
    }
}








