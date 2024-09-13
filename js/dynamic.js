function goToPage(pg)
{
        if(pg.indexOf("/") == -1)
        {
            pg = "/WelcomhotelBhubaneswar/" + pg;
        } 
	window.location.href = pg;
}