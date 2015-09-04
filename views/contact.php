<?
    if (file_exists('../model/info.xml')) { 
        $dom = simplexml_load_file('../model/info.xml');
        //print_r($dom);
    } else {
        exit("Failed to open ../model/info.xml");
    }

    
    print "<h3>";
    print $dom->children();
    print "</h3>";
    
    foreach ($dom->address->children() as $location) 
    {
        print $location;
        print "<br>";
    }

    print "<h3>Contact Info</h3>";

    foreach ($dom->contact->children() as $phonenum)
    {
        print $phonenum;
        print "<br>";
    }
?>
