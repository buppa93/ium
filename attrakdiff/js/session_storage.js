


function storeData()
{
    if(typeof(Storage) !== "undefined")
    {
        //if(tutti i campi sono riempiti)
        savePage1();
        //else
        //code for empty fields
    }
    else
    {
        alert("Sorry! No Web Storage support..");
    }
}

function savePage1()
{
    sessionStorage.setItem(q1p1, document.getElementsByName("a1"));
    sessionStorage.setItem(q2p1, document.getElementsByName("a2"));
    sessionStorage.setItem(q3p1, document.getElementsByName("a3"));
    sessionStorage.setItem(q4p1, document.getElementsByName("a4"));
    sessionStorage.setItem(q5p1, document.getElementsByName("a5"));
    sessionStorage.setItem(q6p1, document.getElementsByName("a6"));
    sessionStorage.setItem(q7p1, document.getElementsByName("a7"));
    sessionStorage.setItem(q8p1, document.getElementsByName("a8"));
    sessionStorage.setItem(q9p1, document.getElementsByName("a9"));
    sessionStorage.setItem(q10p1, document.getElementsByName("a10"));
}

function savePage2()
{
    sessionStorage.setItem(q1p2, document.getElementsByName("a1"));
    sessionStorage.setItem(q2p2, document.getElementsByName("a2"));
    sessionStorage.setItem(q3p2, document.getElementsByName("a3"));
    sessionStorage.setItem(q4p2, document.getElementsByName("a4"));
    sessionStorage.setItem(q5p2, document.getElementsByName("a5"));
    sessionStorage.setItem(q6p2, document.getElementsByName("a6"));
    sessionStorage.setItem(q7p2, document.getElementsByName("a7"));
    sessionStorage.setItem(q8p2, document.getElementsByName("a8"));
    sessionStorage.setItem(q9p2, document.getElementsByName("a9"));
}

function savePage3()
{
    sessionStorage.setItem(q1p3, document.getElementsByName("a1"));
    sessionStorage.setItem(q2p3, document.getElementsByName("a2"));
    sessionStorage.setItem(q3p3, document.getElementsByName("a3"));
    sessionStorage.setItem(q4p3, document.getElementsByName("a4"));
    sessionStorage.setItem(q5p3, document.getElementsByName("a5"));
    sessionStorage.setItem(q6p3, document.getElementsByName("a6"));
    sessionStorage.setItem(q7p3, document.getElementsByName("a7"));
    sessionStorage.setItem(q8p3, document.getElementsByName("a8"));
    sessionStorage.setItem(q9p3, document.getElementsByName("a9"));
}
