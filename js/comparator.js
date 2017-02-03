function toggle(elem)
{   

    if(elem.value == "More details")
    {
        jQuery('#'+elem.id).val('Less details');
    }
    else if(elem.value == "Less details")
    {
          jQuery('#'+elem.id).val('More details');
    }
     else if(elem.value == "Plus de details")
    {
          jQuery('#'+elem.id).val('Moins de details');
    }
     else if(elem.value == "Moins de details")
    {
          jQuery('#'+elem.id).val('Plus de details');
    }

}