    
    // When the user scrolls down 500px from the top of the document, slide down the navbar

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() 
    {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) 
        {
            document.getElementById("navbar").style.top = "0";
        } else 
        {
            document.getElementById("navbar").style.top = "-100px";
        }
    }
    