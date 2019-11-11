POST_FLAG = false;

function test(form)
{
    if (! POST_FLAG) {
        POST_FLAG = true;
        
        setTimeout(() => {
            POST_FLAG = false;
        }, 1000);
        return true;
    } else {
        return false;
    }
    
}
