
<?php
//return TRUE if value contain only whitespaces or is "".
function hasAvalue($value)
{
    if($value == "" or ctype_space($value))
        return FALSE;

return TRUE;
}

function PostSet()
{
    foreach($_POST as $key=>$value)
    {
        if(!isset($_POST[$key]))
        {
            return FALSE;
        }
    }

    return TRUE;
}

?>